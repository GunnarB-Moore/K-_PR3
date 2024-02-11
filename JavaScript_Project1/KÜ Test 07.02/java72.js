// Funktion zum Speichern der To-Do in Liste, Informationen aus den Eingabefeldern
function savemyTodo() {
    var todoName = document.getElementById('todoName').value;
    var dueDate = document.getElementById('dueDate').value;
    
    // Hier kannst du den Code für das Speichern des To-Dos in der Datenbank einfügen

    // Nach dem Speichern, füge das neue To-Do zur Liste hinzu
    var todoList = document.getElementById('todos');
    var todoItem = document.createElement('li');
    todoItem.textContent = todoName + ' - ' + dueDate + ' - Status: offen';
    todoList.appendChild(todoItem);
    
    // Aktualisiere die Anzahl der To-Dos
    var todoCount = document.getElementById('todoCount');
    var count = document.querySelectorAll('#todos li').length;
    todoCount.textContent = 'Anzahl der To-Dos: ' + count;
}
