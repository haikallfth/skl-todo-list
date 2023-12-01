document.addEventListener('DOMContentLoaded', function () {
    displayTasks();
});

function displayTasks() {
    const todoList = document.getElementById('todo-list');
    todoList.innerHTML = '';

    fetch('backend.php')
        .then(response => response.json())
        .then(data => {
            data.forEach(tasks => {

                const cardList = document.createElement('div');
                cardList.classList.add("card-list");

                const textList = document.createElement("div");
                textList.classList.add("text-list");

                const textTask = document.createElement("p");

                textTask.textContent = tasks.task_name;
                if (tasks.completed === '1') {
                    textTask.classList.add('text-checked');
                }

                const btnArea = document.createElement("div");
                btnArea.classList.add("btn-area");

                const btnCheck = document.createElement("div");
                btnCheck.innerHTML = `<button type= "submit" onclick= "togglecomplete(${tasks.id})" class="btn-check"> Check </button>`;

                const btnDelete = document.createElement("div");
                btnDelete.innerHTML = `<button type= "submit" onclick= "btnDelete(${tasks.id})" class="btn-delete"> Delete </button>`;

                // const btnDelete = document.createElement("div");
                // `<button onclick="deleteTask(${task.id})">Delete</button>`;

                todoList.appendChild(cardList);
                cardList.appendChild(textList);
                textList.appendChild(textTask);
                cardList.appendChild(btnArea);
                btnArea.appendChild(btnCheck);
                btnArea.appendChild(btnDelete);

            });
        })
}

function addTask() {
    const taskInput = document.getElementById('task');
    const task = taskInput.value.trim();
    if (task !== '') {
        fetch('backend.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    task
                }),
            })
            .then(() => {
                taskInput.value = '';
                displayTasks();
            });
    }
}

// btn-check
function togglecomplete(id) {
    fetch(`backend.php?id=${id}`, {
            method: 'PUT',
        })
        .then(() => displayTasks());
}

// btn-delete
function btnDelete(id) {
    fetch(`backend.php?id=${id}`, {
            method: 'DELETE',
        })
        .then(() => displayTasks());
}