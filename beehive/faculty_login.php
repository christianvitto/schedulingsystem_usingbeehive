<!DOCTYPE html>
<html>
<head>
    <title>Faculty Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Faculty Login</h1>
    </header>
    <section>
        
        <?php
        // Check if form is submitted
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Perform validation and authentication
            if ($username == 'faculty' && $password == 'password') {
                // Redirect to faculty dashboard or perform necessary actions
                header('Location: faculty_dashboard.php');
                exit();
            } else {
                echo '<p class="error">Invalid username or password.</p>';
            }
        }
        ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit">Login</button>
        </form>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Department. All rights reserved.</p>
    </footer>
</body>
</html>
