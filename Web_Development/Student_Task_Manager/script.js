const taskForm = document.getElementById('taskForm');
const taskList = document.getElementById('taskList');

const API_URL = 'http://127.0.0.1:5000/tasks';

// Fetch and display tasks
async function fetchTasks() {
    const response = await fetch(API_URL);
    const tasks = await response.json();
    taskList.innerHTML = '';
    tasks.forEach(task => {
        const li = document.createElement('li');
        li.innerHTML = `
            <span>${task[1]} - ${task[3]}</span>
            <button onclick="deleteTask(${task[0]})">Delete</button>
            <button onclick="completeTask(${task[0]})" ${task[4] ? 'disabled' : ''}>${task[4] ? 'Completed' : 'Mark as Complete'}</button>
        `;
        taskList.appendChild(li);
    });
}

// Add a new task
taskForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const title = document.getElementById('title').value;
    const description = document.getElementById('description').value;
    const deadline = document.getElementById('deadline').value;

    await fetch(API_URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ title, description, deadline }),
    });
    taskForm.reset();
    fetchTasks();
});

// Delete a task
async function deleteTask(id) {
    await fetch(`${API_URL}/${id}`, { method: 'DELETE' });
    fetchTasks();
}

// Mark a task as complete
async function completeTask(id) {
    await fetch(`${API_URL}/${id}`, { method: 'PUT' });
    fetchTasks();
}

// Initial fetch
fetchTasks();
