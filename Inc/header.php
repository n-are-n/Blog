<!-- Header of Blog -->
<header>
    <nav>
        <a href="home.php" id="logo">Blog</a>
        <?php if (isset($_SESSION['Name'])) : #It check whether session is set ?>
            <p><?php echo $_SESSION['Name'] ?></p>
            <!-- If its set logout & delete button will be seen -->
            <a href="<?php echo BASE_URL ?>signout.php" class="button button-primary right">Logout</a>
            <a href="<?php echo BASE_URL ?>" class="button button-primary right">Delete Account</a>
        <?php else : # else login is shown ?>
            <a href="signin.php" class="button right">Login</a>
        <?php endif; ?>
    </nav>
</header>
