document.addEventListener("DOMContentLoaded", function() {
    var fnameInput = document.getElementById("fname");
    var emailInput = document.getElementById("email");
    var numInput = document.getElementById("num");
    var pswdInput = document.getElementById("pswd");
    var cpwdInput = document.getElementById("cpwd");
    var btn1 = document.getElementById("btn1");

    var error = document.getElementById("error");
    var error1 = document.getElementById("error1");
    var error2 = document.getElementById("error2");
    var error3 = document.getElementById("error3");
    var error4 = document.getElementById("error4");

    btn1.addEventListener("click", function(event) {
        var isValid = true;
        
        var fname = fnameInput.value.trim();
        var email = emailInput.value.trim();
        var num = numInput.value.trim();
        var pswd = pswdInput.value.trim();
        var cpwd = cpwdInput.value.trim();

        // Reset error messages
        error.textContent = "";
        error1.textContent = "";
        error2.textContent = "";
        error3.textContent = "";
        error4.textContent = "";

        // Check if name is empty
        if (fname === "") {
            error.textContent = "Please enter your name";
            isValid = false;
        }

        // Check if email is valid
        if (email === "") {
            error1.textContent = "Please enter your email";
            isValid = false;
        } else if (!isValidEmail(email)) {
            error1.textContent = "Please enter a valid email";
            isValid = false;
        }

        // Check if phone number is valid
        if (num === "") {
            error2.textContent = "Please enter your phone number";
            isValid = false;
        } else if (!isValidPhoneNumber(num)) {
            error2.textContent = "Please enter a valid phone number";
            isValid = false;
        }

        // Check if password and confirm password match
        if (pswd !== cpwd) {
            error4.textContent = "Passwords do not match";
            isValid = false;
        }

        // Check password strength
        if (!isValidPassword(pswd)) {
            error3.textContent = "Password should contain at least one lowercase and one uppercase letter";
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault(); // Prevent form submission if there are errors
        }
    });

    // Function to validate email
    function isValidEmail(email) {
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }

    // Function to validate phone number
    function isValidPhoneNumber(number) {
        var numberPattern = /^[0-9]{10}$/;
        return numberPattern.test(number);
    }

    // Function to validate password strength
    function isValidPassword(password) {
        var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z]).+$/;
        return passwordPattern.test(password);
    }
});
