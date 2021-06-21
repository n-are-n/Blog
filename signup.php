<!-- Register Page -->
<?php include_once('Assets/Php/config.php') ?>
<?php if (isset($_SESSION['ID'])) : header('Location: index.php') ?><?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
    <main id="signin-main">
        <section id="signin-form">
            <form action="<?php echo BASE_URL ?>signup.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Sign Up</legend>
                    <!-- Name Field : only space & alphabets r allowed -->
                    <input type="text" name="Name" size="32" placeholder="Full Name" title="only alphabet & space allowed" pattern="[A-Za-z\s]+" required><br>
                    <input type="tel" name="Number" size="32" placeholder="Phone Number" pattern="[0-9]{10}" title="only numbers allowed" required><br>
                    <!-- Mail Field -->
                    <input type="email" name="Mail" size="32" placeholder="Mail ID" required><br>
                    <input type="password" size="32" name="Password" placeholder="Password" required><br>
                    <!-- Image Field : only images r allowed -->
                    <!-- <input type="file" name="Pic" size="32" accept="image/jpeg" title="only image are allowed" placeholder="Picture"><br> -->
                    <input type="submit" value="Sign Up">
                </fieldset>
            </form>
        </section>
    </main>
</body>

</html>
