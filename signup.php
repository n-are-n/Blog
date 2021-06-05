<!-- Register Page -->
<?php include_once('Assets/Php/config.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
    <header>
        <nav>
            <a href="home.php" class="logo">Blog</a>
        </nav>
    </header>
    <main>
        <section>
            <form action="<?php echo BASE_URL ?>signup.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Register</legend>
                    <!-- Name Field : only space & alphabets r allowed -->
                    <input type="text" name="Name" placeholder="Full Name" title="only alphabet & space allowed" pattern="[A-Za-z\s]+" required><br>
                    <input type="tel" name="Number" placeholder="Phone Number" pattern="[0-9]{10}" title="only numbers allowed" required><br>
                    <!-- Mail Field -->
                    <input type="email" name="Mail" placeholder="Mail ID" required><br>
                    <input type="password" size="20" name="Password" placeholder="Password" required><br>
                    <!-- <label for="Pic">Profile Picture : </label><br> -->
                    <!-- <input type="file" id="Pic" name="Pic" accept="image/*" title="only image are allowed" placeholder="Picture"><br> -->
                    <input type="submit" class="button" value="Sign Up"><br>
                    <span>Have an account ? <a href="signin.php">Login</a></span>
                </fieldset>
            </form>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
</body>

</html>
