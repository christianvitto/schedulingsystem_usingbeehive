<!DOCTYPE html>
<html>
<head>
    <title>college of science</title>
    <link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
    <header>
    <nav>
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="head_login.php">Department Head</a></li>
            <li><a href="faculty_login.php">Faculty</a></li>
            <li><a href="addmin_section.php">Create Account</a></li>
        </ul>
    </nav>
    
    </header>
   
    <section>
        <?php
        $imagePath = 'image/tup.jpg';
       
        ?>
        <img src="<?php echo $imagePath; ?>"  />
      
    </section>
    <footer>
        <p>&copy; <?php echo date("2023"); ?> All rights reserved.</p>
    </footer>
</body>
</html>
