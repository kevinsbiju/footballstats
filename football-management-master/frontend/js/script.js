function showSection(sectionId) {
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
        section.style.display = 'none'; // Hide all sections
    });
    document.getElementById(sectionId).style.display = 'block'; // Show the selected section
}

function addTeam() {
    alert('Add Team functionality goes here.');
}

function modifyTeam() {
    alert('Modify Team functionality goes here.');
}

function deleteTeam() {
    alert('Delete Team functionality goes here.');
}

function addPlayer() {
    alert('Add Player functionality goes here.');
}

function modifyPlayer() {
    alert('Modify Player functionality goes here.');
}

function deletePlayer() {
    alert('Delete Player functionality goes here.');
}

function scheduleMatch() {
    alert('Schedule Match functionality goes here.');
}

function viewStandings() {
    alert('View Standings functionality goes here.');
}

function validateForm(form) {
    const playerID = form.playerID.value;
    const age = form.age.value;
    const position = form.position.value;

    if (!playerID || !age || !position) {
        alert('All fields must be filled out!');
        return false;
    }

    if (age < 0) {
        alert('Age must be a positive number!');
        return false;
    }

    return true;
}

// Attach validation to the form submission
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function (e) {
        if (!validateForm(this)) {
            e.preventDefault(); // Prevent form submission if validation fails
        }
    });
});