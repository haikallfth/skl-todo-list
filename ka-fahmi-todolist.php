<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            overflow-x: hidden;
        }

        body {
            width: 100vw;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 80vw;
            height: auto;
        }

        .card {
            width: 90%;
            margin: 20px;
            background: #ffff;
            border-radius: 8px;
            box-shadow: 0px 0px 5px #aeaeae;
        }

        .card-header {
            width: 100%;
            background: #0088cc60;
            margin: 0;
            padding: 10px;
        }

        .text-title p {
            font-size: 1.5em;
        }

        .card-body {
            width: 100%;
            box-sizing: border-box;
        }

        .input-group {
            width: 100%;
            display: grid;
            grid-template-columns: 80% 20%;
            box-sizing: border-box;
            grid-gap: 5px;
            padding: 10px;
        }

        .input-task,
        .btn-add {
            padding: 10px;
        }

        .btn-add {
            background-color: #0088cc;
            color: #ffff;
            border: none;
        }

        .card-list {
            padding: 10px;
            border-bottom: 1px solid #aeaeae;
            display: grid;
            grid-template-columns: 80% 20%;
        }

        .btn-delete {
            background: #ff000070;
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            color: #ffff;
            margin: 5px;
        }

        .btn-check {
            background: #00a653;
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            color: #ffff;
            margin: 5px;
        }

        @media screen and (max-width: 480px) {
            .container{
                width: 95vw;
            }
            .input-group {
                grid-template-columns: auto;
            }
            .card-list {
                grid-template-columns: auto;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="text-title">
                    <p>Todo List Web</p>
                </div>
            </div>
            <div class="card-body">
                <div class="input-group">
                    <input type="text" id="task" class="input-task" placeholder="Write Your Task Here...">
                    <button type="submit" onclick="addTask()" class="btn-add"><b>Add Task</b></button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="text-title">
                    <p>List Task</p>
                </div>
            </div>
            <div class="card-body" id="list-data">
                <!-- <div class="card-list">
                    <div class="list-area">
                        <p>tugas 1</p>
                    </div>
                    <div class="btn-area">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div>
                <div class="card-list">
                    <div class="list-area">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem velit, asperiores odio
                            quisquam unde ab maiores est dicta rerum rem.</p>
                    </div>
                    <div class="btn-area">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div>
                <div class="card-list">
                    <div class="list-area">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque optio, delectus placeat
                            nulla sequi perferendis esse ab fugit totam reprehenderit quasi quibusdam. Animi earum nobis
                            architecto et ipsa nemo perspiciatis accusamus exercitationem delectus in sunt,
                            necessitatibus deserunt itaque distinctio adipisci illum fuga enim aliquam laborum eaque
                            dolor reiciendis. Mollitia, optio.</p>
                    </div>
                    <div class="btn-area">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div>
                <div class="card-list">
                    <div class="list-area">
                        <p>tugas 1</p>
                    </div>
                    <div class="btn-area">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div>
                <div class="card-list">
                    <div class="list-area">
                        <p>tugas 1</p>
                    </div>
                    <div class="btn-area">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div> -->
            </div>
        </div>
    </div>
</body>

<!-- <script src="app.js"></script> -->
    <script>
        const cardList = document.createElement('div');
                 cardList.classList.add('card-list');
                 const listArea = document.createElement('div');
                 listArea.classList.add('list-area');
                 const listText = document.createElement('p');
                 listText.textContent = tasks.task_name;

                 // button
                 const btnArea = document.createElement('div');
                 btnArea.classList.add('btn-area');

                 const btnCheck = document.createElement('div');
                 btnCheck.innerHTML = `<button type="submit" onclick="toggleComplete(${tasks.id})" class="btn-check">Check</button>`;

    </script>
</html>





















<!-- 414 -->
@media only screen and (max-width: 414px) {
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

/* .bawah {
    width: 100%;
    height: 10%;
} */

.btn-add {
    padding: 8px 25px;
    background: #7752fe;
    box-shadow: 0px 0px 10px #7752fe;
    border: none;
    border-radius: 5px;
    margin-top: 10px;
    margin-left: 124px;
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
    /* text-decoration: line-through; */
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
}



<!-- 360 -->
@media screen and (max-width: 360px) {
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
        width: 325px;
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
        width: 325px;
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
    padding: 6.5px 17px;
    background: #7752fe;
    box-shadow: 0px 0px 10px #7752fe;
    border: none;
    border-radius: 5px;
    margin-top: 5%;
    margin-left: 93.5px;
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
    justify-content: space-between;
    align-items: center;
    margin-bottom: 3px;
}

.btn-delete {
    background: none;
    border: 1.5px solid #000;
    padding: 2px 4px;
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
    padding: 2px 4px;
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