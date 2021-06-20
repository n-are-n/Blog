<!-- Login Page -->
<?php include_once('Assets/Php/config.php') ?>
<?php if (isset($_SESSION['ID'])) : header('Location: home.php') ?><?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<head>
    <link rel="stylesheet" href="Assets/Css/signin.css">
</head>

<body class="text-center">
    <main class="form-signin">
        <form action="<?php echo BASE_URL ?>signin.php" method="POST" enctype="multipart/form-data">
            <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Sign In</h1>

            <div class="form-floating">
                <input type="tel" class="form-control" id="floatingInput" name="Number" placeholder="Phone Number" pattern="[0-9]{10}" title="only numbers allowed" required>
                <label for="floatingInput">Phone Number</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="Password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <!-- <label> -->
                <!-- <input type="checkbox" value="remember-me"> Remember me -->
                <!-- </label> -->
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
        </form>
    </main>
    <?php include_once('Inc/foot.php') #Adding footer to page 
    ?>
</body>

</html>
