<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./styles/signin.css">
    <link rel="stylesheet" href="./styles/HomeStyle.css">
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <?php
                if (isset($_GET['error'])) {
                 echo '<p class="error">' . $_GET['error'] . '</p>';
        }
        ?>
        <form action="./includes/stdSignup.php" method="post">
            <input type="text" placeholder="Full Name" name="fullname" >
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" >
            <input type="password" placeholder="Confirm Password" name="confirmPassword" >
            <input type="text" placeholder="Username" name="username" >
            <input type="number" placeholder="Phone Number" name="phoneNumber" >
            <input type="text" placeholder="Country" name="country" >
            <label for="date" style="margin-left: 10px;">Birth day</label>
            <input type="date" placeholder="birth-day" name="birth-day" >
            
                <input type="submit" value="Sign Up">
            
        </form>

        <a href="./signin.php">Already have an account? Sign In</a>
    </div>
</body>
<footer>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section-about">
                <a href="./index.php" style="text-decoration: none;color: aliceblue;"><h1 style="font-family: 'Agentur';">Skill Zone<span>| BETA</h1></a>
                <p>Skill Roads is a platform that provides you with the best courses and tracks to learn programming languages and computer science.</p>
                <p>&copy; Skill Roads</p>
                <div class="contact">
                    <i class="fa fa-envelope"></i>
                    contactUs@skillzone.com
                </div>
            </div>
        </div>
    </div>
</footer>
</html>
