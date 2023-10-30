
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="hone.css">
    <script src="main.js"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <div class="nav">
            <div class="nav-menu">
                <span class="menu">
                    <ion-icon class="menu-icon" name="menu"></ion-icon>
                </span>
            </div>
            <div class="title">
                <div class="your-to-do">
                    <svg width="50px" height="50px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"
                        fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0" />
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                        <g id="SVGRepo_iconCarrier">
                            <defs>
                                <style>
                                .a {
                                    fill: none;
                                    stroke: #000000;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                }
                                </style>
                            </defs>
                            <path class="a"
                                d="M15.64,4.51a2.6,2.6,0,0,0-2.78,2.78H10.08a2.59,2.59,0,0,0-2.79,2.79V40.71a2.59,2.59,0,0,0,2.79,2.78H37.92a2.59,2.59,0,0,0,2.79-2.78V10.08a2.59,2.59,0,0,0-2.79-2.79H35.14c0-3.71-5.57-3.71-5.57,0H18.43a2.6,2.6,0,0,0-2.79-2.78Z" />
                            <line class="a" x1="12.85" y1="14.05" x2="35.15" y2="14.05" />
                            <line class="a" x1="12.85" y1="21.54" x2="35.15" y2="21.54" />
                            <line class="a" x1="12.85" y1="29.03" x2="35.15" y2="29.03" />
                            <line class="a" x1="12.85" y1="36.53" x2="35.15" y2="36.53" />
                        </g>
                    </svg>
                    <h2>Your Todo</h2>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="side-bar">

            <div class="side-bar-content">
                <div class="side-bar-tittle">
                    <h3>Project</h3>
                </div>

                <div class="new-project">
                    <form id="new-project-form">
                        <input type="text" id="new-project-input" placeholder="What is your new project">
                        <input type="submit" id="new-project-submit" value="New Project">
                    </form>
                </div>

                <!-- <div class="new-project">
                    <button type="button">New Project</button>
                </div> -->

                <div class="project-space">
                    <div id="project">

                        <!-- <div class="project-list">
                            <div class="project-content">
                                <input 
                                    type="text" 
                                    class="text" 
                                    value="A new task"
                                    readonly>
                            </div>
                            <div class="project-action">
                                <button class="edit">Edit</button>
                                <button class="delete">Delete</button>
                            </div>
                        </div> -->

                    </div>
                </div>

            </div>
        </div>

        <div class="content">
            <div class="display-day">
                <h2>Monday</h2>
            </div>
            <div id="new-to-do">
                <button id="new-to-do-submit" onclick="showForm()">New Item</button>
            </div>
            <div class="new-to-do-list">
                <form action="" id="new-to-do-option">
                    <div class="new-to-do-option-title">
                        <h3>New Todo</h3>
                    </div>
                    <div class="new-to-do-content">
                        <div class="new-todo-input">
                            <input type="text" placeholder="Todo Title">
                        </div>
                        <div class="new-todo-date">
                            <input type="date" name="" id="" placeholder="mm/dd/yy">
                        </div>
                        <div class="todo-decription">
                            <textarea name="" id="" placeholder="Todo Description"></textarea>
                        </div>
                        <div class="add-new-todo">
                            <input type="submit" id="add-new-todo" value="Add">
                        </div>
                    </div>
                </form>

            </div>
            <div class="to-do-space">
                <div class="priority-item">
                    <label for="">High Priority Item</label>
                    <button>Details</button>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
