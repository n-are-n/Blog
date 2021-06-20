    <!-- Header -->
<header>
    <!-- Navbar -->
    <nav>
        <?php if(isset($_SESSION['ID'])) : ?>
            <a href="manage.php?id=<?php echo $_SESSION['ID'] ?>" class="link">Posts</a>
            <a href="favorite.php?id=<?php echo $_SESSION['ID'] ?>">Favorite</a>
        <?php endif ?>
        <!-- Search Bar -->
        <form action="search.php" id="Search" class="search" method="GET" enctype="multipart/form-data">
            <input type="search" name="Search" onkeyup="showHint(this.value)" placeholder="Search for Title or Post" size="90x90" autocomplete="off">
            <!-- <span id="Hint"></span> -->
            <button form="Search" type="submit" style="padding: 0;border: none;">
            <svg id="Layer_1" enable-background="new 0 0 512.392 512.392" height="20" viewBox="0 0 512.392 512.392" width="25" xmlns="http://www.w3.org/2000/svg"><g><path d="m211.196 422c-116.346 0-211-94.654-211-211s94.654-211 211-211 211 94.654 211 211-94.654 211-211 211zm0-382c-94.29 0-171 76.71-171 171s76.71 171 171 171 171-76.71 171-171-76.71-171-171-171zm295.143 466.534c7.81-7.811 7.81-20.475 0-28.285l-89.5-89.5c-7.811-7.811-20.475-7.811-28.285 0s-7.81 20.475 0 28.285l89.5 89.5c3.905 3.905 9.024 5.857 14.143 5.857s10.236-1.952 14.142-5.857z"/></g></svg>
            </button>
        </form>
        <?php if (isset($_SESSION['ID'])) : #It check whether session is set 
        ?>
            <!-- User Account Control -->
                <div class="dropdown">
                <img style="border-radius: 50%;" src="data:image;base64,<?php echo $_SESSION['Pic'] ?>" width="40" height="40" class="right">
                <div class="menu">
                    <!-- If its set logout & delete button will be seen -->
                    <a href="<?php echo BASE_URL ?>signout.php" class="link">Logout</a>
                    <a href="<?php echo BASE_URL ?>deactivate.php?id=<?php echo $_SESSION['ID'] ?>" class="link">Delete Account</a>
                </div>
            </div>
        <?php else : # else login is shown 
        ?>
            <!-- Login -->
            <a href="signin.php" class="button right">
            </a>
        <?php endif; ?>
    </nav>
</header>
