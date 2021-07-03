<!-- Header -->
<?php include_once('Assets/Php/Categories.php') ?>
<header>
    <div id="Logo">
        <a href="" title="Logo">
            <b>
                <i>
                    <big>Logo</big>
                </i>
            </b>
        </a>
    </div>
    <nav>
        <a href="" title="Home">Feed</a>
        <?php if (isset($_SESSION['ID'])) : ?>
            <a href="manage.php?id=<?php echo $_SESSION['ID'] ?>" title="Manage your Post's">Post</a>
            <a href="favorite.php?id=<?php echo $_SESSION['ID'] ?>" title="Manage your favorite post's">Favorite</a>
        <?php endif ?>
    </nav>
    <?php if (isset($_SESSION['ID'])) : ?>
        <div>
            <img src="data:image;base64,<?php echo $_SESSION['Pic'] ?>" title="<?php echo $_SESSION['Name'] ?>" width="30" height="30">
        </div>
    <?php endif ?>
    <div>
        <?php if (isset($_SESSION['ID'])) { ?>
            <a href="<?php echo BASE_URL ?>signout.php">
                <button title="Logout">Logout</button>
            </a>
        <?php } ?>
        <?php if(empty($_SESSION['ID'])) { ?>
            <a href="signin.php">
                <button title="Login">Login</button>
            </a>
            <a href="signup.php">
                <button title="Register">Register</button>
            </a>
        <?php } ?>
    </div>
    <form action="search.php" method="GET">
        <input type="search" placeholder="Title or Author or Category" title="Enter the Keyword" name="Key">
    </form>
</header>
<header>
    <nav id="carousel">
        <?php foreach($sql as $_Categories) { ?>
            <a href="categories.php?id=<?php echo $_Categories['ID'] ?>" title="<?php echo $_Categories['Category'] ?>"><?php echo $_Categories['Category'] ?></a>
        <?php } ?>
    </nav>
</header>
