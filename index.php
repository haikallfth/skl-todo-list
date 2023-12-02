<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="style.php"> -->
    <title>Todo-list</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    .container {
        width: 100vw;
        height: 100vh;
        background: #7752fe51;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .card-title {
        width: 500px;
        height: 7%;
        background: #7752fe;
        box-shadow: 0px 0px 15px #7752fe;
        border-radius: 20px 20px 0px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 7px;
    }

    .card-title h2 {
        color: #ffff;
        font-family: 'poppins';
    }

    .card {
        width: 500px;
        height: auto;
        background: #ffff;
        box-shadow: 0px 0px 15px #ffff;
        border-radius: 0px 0px 20px 20px;
        margin-top: 7px;
    }

    .atas {
        width: 100%;
        height: 100%;
    }

    /* .bawah {
    width: 100%;
    height: 10%;
} */

    .btn-add {
        display: flex;
        grid-gap: 10px;
        font-size: 1.1em;
        padding: 8px 20px;
        background: #7752fe;
        box-shadow: 0px 0px 10px #7752fe;
        border: none;
        border-radius: 10px;
        margin-top: 5%;
        margin-left: 173px;
        text-decoration: none;
        font-family: 'Poppins';
        color: #ffff;
        transition: 0.2s;
        cursor: pointer;
    }

    .btn-add:hover {
        transition: 0.2s;
        scale: 110%;
        cursor: pointer;
    }

    .btn-add img {
        display: flex;
        justify-content: center;
        align-items: center;
        /* margin-right: 10px; */
    }

    form {
        font-size: 1.3em;
        font-family: 'poppins';
        margin-top: 5%;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        grid-gap: 10px;
    }

    input {
        width: 83.5%;
        padding: 1.5% 1.3%;
        border: 1.5px solid #7752fe;
        border-radius: 5px;
        font-family: 'poppins';
    }

    .yourtask {
        height: auto;
        text-align: center;
        font-family: 'poppins';
        font-size: 1.3em;
    }

    .list-data {
        height: auto;
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        grid-gap: 10px;
        font-size: 1.1em;
    }

    .card-list {
        width: 83.5%;
        height: auto;
        padding: 1.3%;
        border: 1.5px solid #7752fe;
        border-radius: 5px;
        font-family: 'poppins';
        font-size: 0.8em;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .text-list {
        width: 68%;
        height: auto;
        float: left;
        /* text-decoration: line-through; */
    }

    .btn-area {
        width: 35%;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        margin-left: 15px;
    }

    .btn-delete {
        background: none;
        border: 1.5px solid #000;
        padding: 5px 8px;
        border-radius: 3px;
        font-family: 'poppins';
        transition: 0.3s;
        cursor: pointer;
    }

    .btn-delete:hover {
        background: #7752fe;
        color: white;
        border: 1.5px solid #7752fe;
    }

    .btn-check {
        background: none;
        border: 1.5px solid #000;
        padding: 5px 8px;
        border-radius: 3px;
        font-family: 'poppins';
        transition: 0.3s;
        cursor: pointer;
    }

    .btn-check:hover {
        background: #7752fe;
        color: white;
        border: 1.5px solid #7752fe;
    }

    .text-checked {
        color: #00000054;
        text-decoration: line-through #000;
    }

/* 414 */
@media screen and (max-width: 414px) {
    * {
        padding: 0;
        margin: 0;
        overflow-x: hidden;
    }

    .container {
        width: 100vw;
        height: 100vh;
        background: #7752fe51;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .card-title {
        width: 365px;
        height: 7%;
        background: #7752fe;
        box-shadow: 0px 0px 15px #7752fe;
        border-radius: 20px 20px 0px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 3.5px;
    }

    .card-title h2 {
        color: #ffff;
        font-family: 'poppins';
    }

    .card {
        width: 365px;
        height: auto;
        background: #ffff;
        box-shadow: 0px 0px 15px #ffff;
        border-radius: 0px 0px 20px 20px;
        margin-top: 7px;
    }
    .atas {
    width: 100%;
    height: 100%;
}

.btn-add {
    padding: 8px 25px;
    background: #7752fe;
    box-shadow: 0px 0px 10px #7752fe;
    border: none;
    border-radius: 5px;
    margin-top: 5%;
    margin-left: 106px;
    text-decoration: none;
    font-size: 1.0em;
    font-family: 'Poppins';
    color: #ffff;
    transition: 0.2s;
}

.btn-add:hover {
    transition: 0.2s;
    scale: 110%;
}

form {
    font-size: 1.1em;
    font-family: 'poppins';
    margin-top: 5%;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    grid-gap: 10px;
}

input {
    width: 83.5%;
    padding: 1.3%;
    border: 1.5px solid #7752fe;
    border-radius: 5px;
    font-family: 'poppins';
}

.yourtask {
    height: auto;
    text-align: center;
    font-family: 'poppins';
    font-size: 1.1em;
}

.list-data {
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    grid-gap: 10px;
    font-size: 1.1em;
}

.card-list {
    width: 83.5%;
    height: auto;
    padding: 1.3%;
    border: 1.5px solid #7752fe;
    border-radius: 5px;
    font-family: 'poppins';
    font-size: 0.8em;
    display: flex;
    justify-content: center;
    align-items: center;
}

.text-list {
    width: 68%;
    height: auto;
    float: left;
}

.btn-area {
    width: 35%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-bottom: 2.5px;
}

.btn-delete {
    background: none;
    border: 1.5px solid #000;
    padding: 3px 5px;
    border-radius: 3px;
    font-family: 'poppins';
    transition: 0.3s;
    font-size: 0.7em;
}

.btn-delete:hover {
    background: #7752fe;
    color: white;
    border: 1.5px solid #7752fe;
}

.btn-check {
    background: none;
    border: 1.5px solid #000;
    padding: 3px 5px;
    border-radius: 3px;
    font-family: 'poppins';
    transition: 0.3s;
    font-size: 0.7em;
}

.btn-check:hover {
    background: #7752fe;
    color: white;
    border: 1.5px solid #7752fe;
}
.text-checked{
    color: #00000054;
    text-decoration: line-through #000;
}
}
</style>

<body>
    <div class="container">
        <div class="card-title">
            <h2>To do List App</h2>
        </div>
        <div class="card">
            <div class="atas">
                <form>
                    <label for="">Create Your Task Here 👇🏻</label>
                    <input required placeholder="Write Here..." type="text" id="task" class="input-task">
                </form><br>
                <p class="yourtask">Your Task</p>
                <div class="list-data" id="todo-list">
                    <!-- <button type="submit" class="btn-check" id="garis">Check</button> -->
                    <!-- <div class="card-list">
                        <div class="kiri">
                            <p>isinya</p>
                        </div>
                        <div class="kanan">
                            <button type="submit" class="btn-delete">Delete</button>
                            <button type="submit" class="btn-check">Check</button>
                        </div>
                    </div>
                    <div class="card-list">
                        <div class="kiri">
                            <p>isinya</p>
                        </div>
                        <div class="kanan">
                            <button type="submit" class="btn-delete">Delete</button>
                            <button type="submit" class="btn-check">Check</button>
                        </div>
                    </div>
                    <div class="card-list">
                        <div class="kiri">
                            <p>isinya</p>
                        </div>
                        <div class="kanan">
                            <button type="submit" class="btn-delete">Delete</button>
                            <button type="submit" class="btn-check">Check</button>
                        </div>
                    </div>
                    <div class="card-list">
                        <div class="kiri">
                            <p>isinya</p>
                        </div>
                        <div class="kanan">
                            <button type="submit" class="btn-delete">Delete</button>
                            <button type="submit" class="btn-check">Check</button>
                        </div>
                    </div>
                    <div class="card-list">
                        <div class="kiri">
                            <p>isinya</p>
                        </div>
                        <div class="kanan">
                            <button type="submit" class="btn-delete">Delete</button>
                            <button type="submit" class="btn-check">Check</button>
                        </div>
                    </div> -->
                </div>
                <button type="submit" onclick="addTask()" class="btn-add" id="task">Add<img src="plus-chat-asli.png"
                        alt="" width="135%">Task</button>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>