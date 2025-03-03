import sqlite3
from flask import Flask, request, jsonify
from flask_cors import CORS

app = Flask(__name__)
CORS(app)
# Initialize the database
def init_db():
    conn = sqlite3.connect('../database/tasks.db')  # Connect to the database
    cursor = conn.cursor()
    # Create the tasks table if it doesn't exist
    cursor.execute('''
        CREATE TABLE IF NOT EXISTS tasks (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            title TEXT NOT NULL,
            description TEXT,
            deadline TEXT NOT NULL,
            completed BOOLEAN NOT NULL DEFAULT 0
        )
    ''')
    conn.commit()  # Save changes
    conn.close()

# Call the function to initialize the database
init_db()

# Route to view all tasks
@app.route('/tasks', methods=['GET'])
def get_tasks():
    conn = sqlite3.connect('../database/tasks.db')
    cursor = conn.cursor()
    cursor.execute('SELECT * FROM tasks')
    tasks = cursor.fetchall()
    conn.close()
    return jsonify(tasks)

# Route to add a new task
@app.route('/tasks', methods=['POST'])
def add_task():
    data = request.get_json()
    title = data['title']
    description = data.get('description', '')
    deadline = data['deadline']
    conn = sqlite3.connect('../database/tasks.db')
    cursor = conn.cursor()
    cursor.execute('INSERT INTO tasks (title, description, deadline) VALUES (?, ?, ?)', 
                   (title, description, deadline))
    conn.commit()
    conn.close()
    return jsonify({'message': 'Task added successfully!'})

# Route to mark a task as completed
@app.route('/tasks/<int:task_id>', methods=['PUT'])
def complete_task(task_id):
    conn = sqlite3.connect('../database/tasks.db')
    cursor = conn.cursor()
    cursor.execute('UPDATE tasks SET completed = 1 WHERE id = ?', (task_id,))
    conn.commit()
    conn.close()
    return jsonify({'message': f'Task {task_id} marked as completed!'})

# Route to delete a task
@app.route('/tasks/<int:task_id>', methods=['DELETE'])
def delete_task(task_id):
    conn = sqlite3.connect('../database/tasks.db')
    cursor = conn.cursor()
    cursor.execute('DELETE FROM tasks WHERE id = ?', (task_id,))
    conn.commit()
    conn.close()
    return jsonify({'message': f'Task {task_id} deleted!'})

@app.route('/')
def home():
    return "Welcome to the Student Task Manager!"

if __name__ == '__main__':
    app.run(debug=True)
