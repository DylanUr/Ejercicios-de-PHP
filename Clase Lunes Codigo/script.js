// login
document.getElementById("login-form")?.addEventListener("submit", function(event) {
    event.preventDefault();
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    
    if (username === "admin" && password === "1234") {
        window.location.href = "task_manager.html"; 
    } else {
        alert("Invalid username or password");
    }
});

// task manager 
if (window.location.pathname.includes("task_manager.html")) {
    const taskForm = document.getElementById("task-form");
    const taskList = document.getElementById("task-list");

    let tasks = JSON.parse(localStorage.getItem("tasks")) || [];

    function renderTasks() {
        taskList.innerHTML = "";
        tasks.forEach((task, index) => {
            const taskCard = document.createElement("div");
            taskCard.classList.add("task-card");

            taskCard.innerHTML = `
                ${task}
                <div>
                    <button class="edit" onclick="editTask(${index})">Edit</button>
                    <button onclick="deleteTask(${index})">Delete</button>
                </div>
            `;
            taskList.appendChild(taskCard);
        });
    }

    function addTask(task) {
        tasks.push(task);
        localStorage.setItem("tasks", JSON.stringify(tasks));
        renderTasks();
    }

    taskForm.addEventListener("submit", function(event) {
        event.preventDefault();
        const newTask = document.getElementById("new-task").value;
        addTask(newTask);
        document.getElementById("new-task").value = "";
    });

    window.deleteTask = function(index) {
        tasks.splice(index, 1);
        localStorage.setItem("tasks", JSON.stringify(tasks));
        renderTasks();
    };

    window.editTask = function(index) {
        const newTask = prompt("Edit the task:", tasks[index]);
        if (newTask !== null && newTask !== "") {
            tasks[index] = newTask;
            localStorage.setItem("tasks", JSON.stringify(tasks));
            renderTasks();
        }
    };

    renderTasks();
}
