<!-- Header -->
<header>
    <nav>
        <a href="#">Logo</a>
        <?php if(isset($_SESSION['ID'])) : ?>
            <a href="manage.php">Post</a>
            <a href="favorite.php">Favorite</a>
        <?php endif ?>
    </nav>
    <form method="get">
        <input type="search">
        <input type="submit" value="Search">
    </form>
    <?php if(empty($_SESSION['ID'])) : ?>
        <a href="signin.php">
            <button>Login</button>
        </a>
        <a href="signup.php">
            <button>Register</button>
        </a>
    <?php endif ?>
    <?php if(isset($_SESSION['ID'])) : ?>
        <a href="<?php echo BASE_URL ?>signout.php">
            <button>logout</button>
        </a>
        <img src="data:image;base64,<?php echo $_SESSION['Pic'] ?>" title="<?php echo $_SESSION['Name'] ?>" width="100" height="100">
    <?php endif ?>
</header>
