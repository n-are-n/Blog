<!-- Register Page -->
<?php include_once('Assets/Php/config.php') ?>
<?php if (isset($_SESSION['ID'])) : header('Location: index.php') ?><?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<head>
    <link rel="stylesheet" href="Assets/Css/signin.css">
</head>

<body class="text-center">
    <main class="form-signin">
        <form action="<?php echo BASE_URL ?>signup.php" method="post" enctype="multipart/form-data">
            <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
            <!-- Name Field : only space & alphabets r allowed -->
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="Name" placeholder="Full Name" title="only alphabet & space allowed" pattern="[A-Za-z\s]+" required>
                <label for="floatingInput">Full Name</label>
            </div>
            <div class="form-floating">
                <input type="tel" class="form-control" id="floatingInput" name="Number" placeholder="Phone Number" pattern="[0-9]{10}" title="only numbers allowed" required>
                <label for="floatingInput">Phone Number</label>
            </div>
            <!-- Mail Field -->
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="Mail" placeholder="Mail ID" required>
                <label for="floatingInput">Mail ID</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" size="20" name="Password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <!-- Image Field : only images r allowed -->
            <!-- <div>
                <input type="file" class="form-control" id="floatingInput" name="Pic" accept="image/jpeg" title="only image are allowed" placeholder="Picture"><br>
                <label for="floatingInput">Avatar : </label>
            </div> -->
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
        </form>
    </main>
    <?php include_once('Inc/foot.php') ?>
</body>

</html>
