<?php

// Check if the user has submitted the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form input values
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the username and password (you can add more validation if needed)
    if ($username == "admin" && $password == "password") {
        // Successful login
        echo "Login successful!";
        // Redirect to another page or perform any other desired actions
    } else {
        // Invalid login credentials
        echo "Invalid username or password!";
    }
}


// <!DOCTYPE html>
// <html>
// <head>
//     <title>Login Page</title>
// </head>
// <body>
//     <h2>Login</h2>
//     <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
//         <label for="username">Username:</label>
//         <input type="text" id="username" name="username" required><br><br>
//         <label for="password">Password:</label>
//         <input type="password" id="password" name="password" required><br><br>
//         <input type="submit" value="Login">
//     </form>
// </body>
// </html>




?>