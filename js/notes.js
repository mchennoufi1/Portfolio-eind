document.querySelector('#push').onclick = function() {
    var newNoteInput = document.querySelector('#newnote textarea');
    var noteName = newNoteInput.value.trim();
    if (noteName.length == 0) {
        alert("Please Enter a Note");
    } else {
        // Add task to the DOM
        document.querySelector('#notes').innerHTML += `
      <div class="note">
        <div id="notename">${noteName}</div>
        <button class="delete">
          <img src="img/bin4.png" style="width: 22px; height: 22px;">
        </button>
      </div>
    `;

        // Save task to local storage
        var notes = JSON.parse(localStorage.getItem('note')) || [];
        notes.push(noteName);
        localStorage.setItem('notes', JSON.stringify(notes));

        // Clear input field
        newNoteInput.value = '';

        // Add click event to delete button
        var deleteButtons = document.querySelectorAll(".delete");
        for (var i = 0; i < deleteButtons.length; i++) {
            deleteButtons[i].onclick = function() {
                var noteName = this.previousElementSibling.innerHTML;
                var notes = JSON.parse(localStorage.getItem('notes')) || [];
                notes = notes.filter(note => note !== noteName);
                localStorage.setItem('notes', JSON.stringify(notes));
                this.parentNode.remove();
            }
        }
    }
};

// Load tasks from local storage
var notes = JSON.parse(localStorage.getItem('notes')) || [];
notes.forEach(function(noteName) {
    document.querySelector('#notes').innerHTML += `
    <div class="note">
      <div id="notename">${noteName}</div>
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
        var noteName = this.previousElementSibling.innerHTML;
        var notes = JSON.parse(localStorage.getItem('notes')) || [];
        notes = notes.filter(note => note !== noteName);
        localStorage.setItem('notes', JSON.stringify(notes));
        this.parentNode.remove();
    }
}
