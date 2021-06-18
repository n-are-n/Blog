<!-- Login Page -->
<?php include_once('Assets/Php/config.php') ?>
<?php if(isset($_SESSION['ID'])): header('Location: home.php') ?><?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
<header>
    <nav>
        <a href="index.php" class="logo">Blog</a>
    </nav>
</header>
    <main>
        <section>
            <form action="<?php echo BASE_URL #BASE_URL: Assets/Php/ ?>signin.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Login</legend>
                    <!-- Mobile Number Field : only 10 digit number is allowed -->
                    <input type="tel" name="Number" title="only numbers allowed" placeholder="Phone Number" pattern="[0-9]{10}" required><br>
                    <!-- Password Field -->
                    <input type="password" size="20" name="Password" placeholder="Password" required><br>
                    <input type="submit" class="button" value="Sign In"><br>
                    <span>Don't have an account ? <a href="signup.php">Register</a></span>
                </fieldset>
            </form>
        </section>
    </main>
    <?php include_once('Inc/foot.php') #Adding footer to page ?>
</body>

</html>
