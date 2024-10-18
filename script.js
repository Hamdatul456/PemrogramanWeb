document.addEventListener("DOMContentLoaded", function() {
    const taskInput = document.getElementById("task-input");
    const taskList = document.getElementById("task-list");
    const addTaskBtn = document.getElementById("add-task-btn");

    let tasks = [];

    addTaskBtn.addEventListener("click", () => {
        const taskText = taskInput.value.trim();
        if (taskText !== "") {
            const task = {
                id: Date.now(),
                text: taskText,
            };
            tasks.push(task);
            renderTasks();
            taskInput.value = "";
        }
    });

    function renderTasks() {
        taskList.innerHTML = "";
        tasks.forEach(task => {
            const li = document.createElement("li");
            li.innerHTML = `
                <span>${task.text}</span>
                <button onclick="deleteTask(${task.id})">🗑️</button>
                <button onclick="editTask(${task.id})">✏️</button>
            `;
            taskList.appendChild(li);
        });
    }

    window.deleteTask = function(id) {
        tasks = tasks.filter(task => task.id !== id);
        renderTasks();
    };

    window.editTask = function(id) {
        const task = tasks.find(t => t.id === id);
        const newText = prompt("Edit your task:", task.text);
        if (newText !== null && newText.trim() !== "") {
            task.text = newText.trim();
            renderTasks();
        }
    };
});
