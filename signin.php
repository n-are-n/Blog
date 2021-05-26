<?php include_once('Assets/Php/config.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
    <main>
        <section>
            <form action="<?php echo BASE_URL ?>signin.php" method="post">
                <fieldset>
                    <legend>Login</legend>
                    <input type="tel" name="Number" title="only numbers allowed" placeholder="Phone Number" pattern="[0-9]{10}" required><br>
                    <input type="password" size="21" name="Password" placeholder="Password" required><br>
                    <input type="submit" class="button" value="Sign In"><br>
                    <span>Don't have an account ? <a href="signup.php">Register</a></span>
                </fieldset>
            </form>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
</body>

</html>
