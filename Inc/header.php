<!-- Header of Blog -->
<header>
    <nav>
        <a href="home.php" class="logo">Blog</a>
        <?php if (isset($_SESSION['Name'])) : #It check whether session is set 
        ?>
            <div class="dropdown">
                <img style="border-radius: 50%;" src="" width="40" height="40" class="right">
                <div class="menu">
                    <!-- If its set logout & delete button will be seen -->
                    <a href="create.php?id=<?php echo $_SESSION['ID'] ?>" class="link">Add Post</a>
                    <a href="<?php echo BASE_URL ?>signout.php" class="link">Logout</a>
                    <a href="<?php echo BASE_URL ?>deactivate.php?id=<?php echo $_SESSION['ID'] ?>" class="link">Delete Account</a>
                </div>
            </div>
        <?php else : # else login is shown 
        ?>
            <a href="signin.php" class="button right">Login</a>
        <?php endif; ?>
    </nav>
</header>
