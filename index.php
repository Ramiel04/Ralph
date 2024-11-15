<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vernon</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <script>
        function validateLogin() {
            // Predefined username and password
            const correctUsername = "admin"; // Default username
            const correctPassword = "123456"; // Default password

            // Get user input from the form
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
            const message = document.getElementById("message"); // Message display element

            // Clear previous message
            message.textContent = "";
            message.style.display = "none"; // Hide message initially

            // Check if the username and password are provided
            if (username.trim() === "" || password.trim() === "") {
                message.textContent = "Please enter your username and password.";
                message.style.display = "block"; // Show message
                return; // Stop execution
            }

            // Check if the username and password are correct
            if (username === correctUsername && password === correctPassword) {
                // Redirect to another page (e.g., dashboard.html)
                window.location.href = "b1.php";
            } else {
                // Display error message
                message.textContent = "Invalid username or password.";
                message.style.display = "block"; // Show message
            }
        }
    </script>

</head>

<body> 
<div class="login-card">
    <h2>TeachTrack</h2>
    <form class="login-form" onsubmit="event.preventDefault(); validateLogin();">
        <input type="text" id="username" placeholder="username" required/>
        <input type="password" id="password" placeholder="password" required/>
        <button type="button" onclick="validateLogin()">Log In</button> <!-- Call validateLogin on button click -->
        <div id="message" class="error-message"></div> <!-- Message display area -->
    </form>
</div>

</body>
</html>
