document.addEventListener('DOMContentLoaded', function() {
    const createbak = document.getElementById('createbak');
    const updatebak = document.getElementById('updatebak');
    const deletebak = document.getElementById('deletebak');

    const createLink = document.getElementById('createLink');
    const updateLink = document.getElementById('updateLink');
    const deleteLink = document.getElementById('deleteLink');
    

    if (updateLink) {
        updateLink.addEventListener('click', function(event) {
            event.preventDefault();
            createbak.classList.remove('active');
            deletebak.classList.remove('active');
            updatebak.classList.add('active');
        });
    }

    if (createLink) {
        createLink.addEventListener('click', function(event) {
            event.preventDefault();
            updatebak.classList.remove('active');
            deletebak.classList.remove('active');
            createbak.classList.add('active');
        });
    }

    if (deleteLink) {
        deleteLink.addEventListener('click', function(event) {
            event.preventDefault();
            createbak.classList.remove('active');
            updatebak.classList.remove('active');
            deletebak.classList.add('active');
        });
    }

    createbak.classList.add('active');
});
