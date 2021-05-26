<header>
    <nav>
        <a href="home.php" id="logo">Blog</a>
        <?php if (isset($_SESSION['Name'])) : ?>
            <p><?php echo $_SESSION['Name'] ?></p>
            <a href="<?php echo BASE_URL ?>signout.php" class="button button-primary right">Logout</a>
            <a href="<?php echo BASE_URL ?>" class="button button-primary right">Delete Account</a>
        <?php else : ?>
            <a href="signin.php" class="button right">Login</a>
        <?php endif; ?>
    </nav>
</header>
