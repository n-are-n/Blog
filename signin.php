<!-- Login Page -->
<?php include_once('Assets/Php/config.php') ?>
<?php if (isset($_SESSION['ID'])) : header('Location: home.php') ?><?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<head>
    <link rel="stylesheet" href="Assets/Css/signin.css">
</head>

<body>
    <main id="signin-main">
        <section id="signin-form">
            <form action="<?php echo BASE_URL ?>signin.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>Sign In</legend>
                    <input type="tel" name="Number" size="32" placeholder="Phone Number" pattern="[0-9]{10}" title="only numbers allowed" required><br>
                    <input type="password" name="Password" size="32" placeholder="Password" required><br>
                    <input type="submit" value="Sign In">
                    <p>New User ? <a href="signup.php">Sign Up</a></p>
                </fieldset>
            </form>
        </section>
    </main>
</body>

</html>
