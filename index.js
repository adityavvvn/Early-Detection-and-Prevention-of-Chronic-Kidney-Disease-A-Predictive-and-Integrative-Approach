document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission

        // Perform form validation
        if (validateForm()) {
            // If validation passes, submit the form
            this.submit();
        }
    });

    function validateForm() {
        let isValid = true;
        const inputs = document.querySelectorAll("input, select");

        inputs.forEach(function(input) {
            // Check if required fields are empty
            if (input.hasAttribute("required") && input.value.trim() === "") {
                isValid = false;
                input.classList.add("error");
                input.nextElementSibling.style.visibility = "visible";
            } else {
                input.classList.remove("error");
                input.nextElementSibling.style.visibility = "hidden";
            }
        });

        return isValid;
    }
});
