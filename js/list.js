document.querySelector('#push').onclick = function() {
    var newTaskInput = document.querySelector('#newtask input');
    var taskName = newTaskInput.value.trim();
    if (taskName.length == 0) {
        alert("Please Enter a Task");
    } else {
        // Add task to the DOM
        document.querySelector('#tasks').innerHTML += `
      <div class="task">
        <span id="taskname">${taskName}</span>
        <button class="delete">
          <img src="img/bin4.png" style="width: 22px; height: 22px;">
        </button>
      </div>
    `;

        // Save task to local storage
        var tasks = JSON.parse(localStorage.getItem('tasks')) || [];
        tasks.push(taskName);
        localStorage.setItem('tasks', JSON.stringify(tasks));

        // Clear input field
        newTaskInput.value = '';

        // Add click event to delete button
        var deleteButtons = document.querySelectorAll(".delete");
        for (var i = 0; i < deleteButtons.length; i++) {
            deleteButtons[i].onclick = function() {
                var taskName = this.previousElementSibling.innerHTML;
                var tasks = JSON.parse(localStorage.getItem('tasks')) || [];
                tasks = tasks.filter(task => task !== taskName);
                localStorage.setItem('tasks', JSON.stringify(tasks));
                this.parentNode.remove();
            }
        }
    }
};

// Load tasks from local storage
var tasks = JSON.parse(localStorage.getItem('tasks')) || [];
tasks.forEach(function(taskName) {
    document.querySelector('#tasks').innerHTML += `
    <div class="task">
      <span id="taskname">${taskName}</span>
      <button class="delete">
        <img src="img/bin4.png" style="width: 22px; height: 22px;">
      </button>
    </div>
  `;
});

// Add click event to delete buttons
var deleteButtons = document.querySelectorAll(".delete");
for (var i = 0; i < deleteButtons.length; i++) {
    deleteButtons[i].onclick = function() {
        var taskName = this.previousElementSibling.innerHTML;
        var tasks = JSON.parse(localStorage.getItem('tasks')) || [];
        tasks = tasks.filter(task => task !== taskName);
        localStorage.setItem('tasks', JSON.stringify(tasks));
        this.parentNode.remove();
    }
}
