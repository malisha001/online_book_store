
    function isValidEmail(email) {
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }

    document.addEventListener("DOMContentLoaded", function() {
        var emailInput = document.querySelector("input[name=uid]");
        var errorEmail = document.getElementById("error5");

        emailInput.addEventListener("input", function() {
            var email = emailInput.value.trim();

            if (email === "") {
                resetErrorMessage(errorEmail);
            } else if (!isValidEmail(email)) {
                displayErrorMessage(errorEmail, "Please enter a valid email");
            } else {
                resetErrorMessage(errorEmail);
            }
        });

        // Function to reset error message and styles
        function resetErrorMessage(errorMessage) {
            errorMessage.textContent = "";
            errorMessage.style.color = "";
        }

        // Function to display error message with red color
        function displayErrorMessage(errorMessage, message) {
            errorMessage.textContent = message;
            errorMessage.style.color = "red";
        }
    });
