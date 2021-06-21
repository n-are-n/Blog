<header>
    <nav>
        <a href="#">Logo</a>
        <?php if(isset($_SESSION['ID'])) : ?>
            <a href="manage.php">Post</a>
            <a href="">Favorite</a>
        <?php endif ?>
    </nav>
    <?php if(empty($_SESSION['ID'])) : ?>
        <a href="signin.php" id="login">
            <button>Login</button>
        </a>
    <?php endif ?>
    <form action="" id="Search" method="get">
        <input type="search" name="" id="" size="32">
        <input type="submit" value="Search">
    </form>
    <img src="" alt="">
</header>
