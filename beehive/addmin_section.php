<!DOCTYPE html>
<html>
<head>
    <title>Faculty Signup</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Faculty Signup</h1>
    </header>
    <section>
        <h2>Signup</h2>
        <?php
        // Check if form is submitted
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Perform validation and registration process
            if ($name && $email && $password) {
                // Save faculty information to the database or perform necessary actions
                echo '<p class="success">Signup successful! You can now login.</p>';
            } else {
                echo '<p class="error">Please fill in all the fields.</p>';
            }
        }
        ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">Last Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit">Signup</button>
        </form>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Department. All rights reserved.</p>
    </footer>
</body>
</html>
