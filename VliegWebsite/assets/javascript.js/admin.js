document.getElementById('createLink').addEventListener('click', function(event) {
    event.preventDefault();
    showSection('createbak');
});

document.getElementById('updateLink').addEventListener('click', function(event) {
    event.preventDefault();
    showSection('updatebak');
});

document.getElementById('deleteLink').addEventListener('click', function(event) {
    event.preventDefault();
    showSection('deletebak');
});

function showSection(sectionId) {
    document.querySelectorAll('.content-section').forEach(function(section) {
        section.classList.remove('active');
    });
    document.getElementById(sectionId).classList.add('active');
}
