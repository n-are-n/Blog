<!-- Header -->
<?php include_once('Assets/Php/Categories.php') ?>
<header>
    <div id="Logo">
        <a href="index.php" title="Logo">Logo</a>
    </div>
    <nav>
        <a href="index.php" title="Home">Feed</a>
        <?php if (isset($_SESSION['ID'])) : ?>
            <a href="manage.php?id=<?php echo $_SESSION['ID'] ?>" target="page" title="Manage your Post's">Post</a>
            <a href="favorite.php?id=<?php echo $_SESSION['ID'] ?>" target="page" title="Manage your favorite post's">Favorite</a>
        <?php endif ?>
    </nav>
    <?php if (isset($_SESSION['ID'])) : ?>
        <div>
            <img style="border-radius: 50%;margin-left: 10px;margin-right: 10px;" src="data:image;base64,<?php echo $_SESSION['Pic'] ?>" title="<?php echo $_SESSION['Name'] ?>" width="30" height="30">
            </div>
    <?php endif ?>
    <div style="float: right;">
        <?php if (isset($_SESSION['ID'])) { ?>
            <a href="<?php echo BASE_URL ?>signout.php">
                <button title="Logout">Logout</button>
            </a>
        <?php } ?>
        <?php if(empty($_SESSION['ID'])) { ?>
            <a href="signin.php" target="page">
                <button title="Login">Login</button>
            </a>
            <a href="signup.php" target="page">
                <button title="Register">Register</button>
            </a>
        <?php } ?>
    </div>
    <form action="search.php" method="GET" target="page">
        <input type="search" placeholder="Title or Author or Category" title="Enter the Keyword" name="Key">
        <input style="font-size: large;" type="submit" title="Search" value="Search">
    </form>
</header>
<header>
    <div>
        <div class="nav-btn prev" title="Previous"><</div>
        <div class="nav-btn next" title="Next">></div>
    </div>
    <nav id="carousel">
        <div class="category">
            <?php foreach($sql as $_Categories) { ?>
                <a href="categories.php?id=<?php echo $_Categories['ID'] ?>" target="page" title="<?php echo $_Categories['Category'] ?>"><?php echo $_Categories['Category'] ?></a>
            <?php } ?>
        </div>
    </nav>
</header>
