function validateForm(event) {
    const form = event.target;
    const inputs = form.querySelectorAll("input[required]");
    let isValid = true;
    inputs.forEach(input => {
        if (!input.value.trim()) {
            isValid = false;
        }
    });
    if (!isValid) {
        alert("Please fill out all required fields.");
        event.preventDefault();
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const forms = document.querySelectorAll("form");
    forms.forEach(form => {
        form.addEventListener("submit", validateForm);
    });

    
    document.getElementById("registerLink").addEventListener("click", (event) => {
        event.preventDefault();
        document.getElementById("loginbak").style.display = "none";
        document.getElementById("registerbak").style.display = "block";
        document.getElementById("paswoordbak").style.display = "none";
    });

    document.getElementById("loginLink").addEventListener("click", (event) => {
        event.preventDefault();
        document.getElementById("loginbak").style.display = "block";
        document.getElementById("registerbak").style.display = "none";
        document.getElementById("paswoordbak").style.display = "none";
    });

    document.getElementById("vergeet").addEventListener("click", (event) => {
        event.preventDefault();
        document.getElementById("loginbak").style.display = "none";
        document.getElementById("registerbak").style.display = "none";
        document.getElementById("paswoordbak").style.display = "block";
    });

    document.getElementById("terugLink").addEventListener("click", (event) => {
        event.preventDefault();
        document.getElementById("loginbak").style.display = "block";
        document.getElementById("registerbak").style.display = "none";
        document.getElementById("paswoordbak").style.display = "none";
    });
});