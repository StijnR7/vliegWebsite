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
        alert("Please fill out all required fields");
        event.preventDefault();
    }
}
