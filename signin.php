<!-- Login Page -->
<?php include_once('Assets/Php/config.php') ?>
<?php if (isset($_SESSION['ID'])) : header('Location: home.php') ?><?php endif; ?>
<head>
    <link rel="stylesheet" href="Assets/Stylus/sign.css">
</head>
<form action="<?php echo BASE_URL ?>signin.php" onsubmit="reload()" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>Sign In</legend>
        <input type="tel" name="Number" size="32" placeholder="Phone Number" pattern="[0-9]{10}" title="only numbers allowed" required>
        <br>
        <input type="password" name="Password" id="Password" size="32" placeholder="Password" required>
        <span id="Show">show</span>
        <br>
        <input type="submit" value="Login">
        <p>New User ? <a href="signup.php">Sign Up</a></p>
    </fieldset>
</form>
<script src="Assets/Js/Password.js"></script>
