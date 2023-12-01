<?php
header('Content-Type: application/json');

// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skl_todo_list";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// End Konfigurasi


// untuk get seluruh data
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM tasks ORDER BY id DESC";
    $result = $conn->query($sql);

    $todos = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $todos[] = $row;
        }
    }
    // convert ke data json
    echo json_encode($todos);
}

    // end get data

    // untuk create data
elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = json_decode(file_get_contents("php://input"));
    $task = $data->task;

    $sql = "INSERT INTO tasks (task_name) VALUES ('$task')";
    $conn->query($sql);
}
    // end create data

    // ngubah status completed 
elseif ($_SERVER['REQUEST_METHOD'] === 'PUT'){
    $id = $_GET['id'];
    $sql = "UPDATE tasks SET completed = NOT completed where id = $id";
    $conn->query($sql);
}
    // end ubah

    // delete data
elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = $_GET['id'];

    $sql = "DELETE FROM tasks WHERE id = $id";
    $conn->query($sql);
}
    // end delete
$conn->close();
?>