document.addEventListener('DOMContentLoaded', function() {
    const loginbak = document.getElementById('loginbak');
    const registerbak = document.getElementById('registerbak');
    const paswoordbak = document.getElementById('paswoordbak');

    const registerLink = document.getElementById('registerLink');
    const loginLink = document.getElementById('loginLink');
    const vergeetLink = document.getElementById('vergeet');
    const terugLink = document.getElementById('terugLink');

    if (registerLink) {
        registerLink.addEventListener('click', function(event) {
            event.preventDefault();
            loginbak.classList.remove('active');
            paswoordbak.classList.remove('active');
            registerbak.classList.add('active');
        });
    }

    if (loginLink) {
        loginLink.addEventListener('click', function(event) {
            event.preventDefault();
            registerbak.classList.remove('active');
            paswoordbak.classList.remove('active');
            loginbak.classList.add('active');
        });
    }

    if (vergeetLink) {
        vergeetLink.addEventListener('click', function(event) {
            event.preventDefault();
            loginbak.classList.remove('active');
            registerbak.classList.remove('active');
            paswoordbak.classList.add('active');
        });
    }

    if (terugLink) {
        terugLink.addEventListener('click', function(event) {
            event.preventDefault();
            paswoordbak.classList.remove('active');
            loginbak.classList.add('active');
        });
    }

    loginbak.classList.add('active');
});
