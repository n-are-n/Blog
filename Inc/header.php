<!-- Header -->
<header>
    <!-- Navbar -->
    <nav>
        <a href="index.php" class="logo">Blog</a>
        <!-- Search Bar -->
        <form action="search.php" id="Search" class="search" method="GET" enctype="multipart/form-data">
            <input type="search" name="Search" onkeyup="showHint(this.value)" placeholder="Search for Title or Post" size="90x90" autocomplete="off">
            <span id="Hint"></span>
            <button form="Search" type="submit" style="padding: 0;border: none;">
            <svg id="Layer_1" enable-background="new 0 0 512.392 512.392" height="20" viewBox="0 0 512.392 512.392" width="25" xmlns="http://www.w3.org/2000/svg"><g><path d="m211.196 422c-116.346 0-211-94.654-211-211s94.654-211 211-211 211 94.654 211 211-94.654 211-211 211zm0-382c-94.29 0-171 76.71-171 171s76.71 171 171 171 171-76.71 171-171-76.71-171-171-171zm295.143 466.534c7.81-7.811 7.81-20.475 0-28.285l-89.5-89.5c-7.811-7.811-20.475-7.811-28.285 0s-7.81 20.475 0 28.285l89.5 89.5c3.905 3.905 9.024 5.857 14.143 5.857s10.236-1.952 14.142-5.857z"/></g></svg>
            </button>
        </form>
        <?php if (isset($_SESSION['Name'])) : #It check whether session is set 
        ?>
            <!-- User Account Control -->
                <div class="dropdown">
                <img style="border-radius: 50%;" src="data:image;base64,<?php echo $_SESSION['Pic'] ?>" width="40" height="40" class="right">
                <div class="menu">
                    <!-- If its set logout & delete button will be seen -->
                    <a href="manage.php?id=<?php echo $_SESSION['ID'] ?>" class="link">Posts</a>
                    <a href="<?php echo BASE_URL ?>signout.php" class="link">Logout</a>
                    <a href="<?php echo BASE_URL ?>deactivate.php?id=<?php echo $_SESSION['ID'] ?>" class="link">Delete Account</a>
                </div>
            </div>
        <?php else : # else login is shown 
        ?>
            <!-- Login -->
            <a href="signin.php" class="button right">
                Login
                <svg class="login" height="20" viewBox="0 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg" fill="#555">
                    <path d="m218.667969 240h-202.667969c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h202.667969c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" />
                    <path d="m138.667969 320c-4.097657 0-8.191407-1.558594-11.308594-4.691406-6.25-6.253906-6.25-16.386719 0-22.636719l68.695313-68.691406-68.695313-68.671875c-6.25-6.253906-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l80 80c6.25 6.25 6.25 16.382813 0 22.636719l-80 80c-3.136719 3.132812-7.234375 4.691406-11.328125 4.691406zm0 0" />
                    <path d="m341.332031 512c-23.53125 0-42.664062-19.136719-42.664062-42.667969v-384c0-18.238281 11.605469-34.515625 28.882812-40.511719l128.171875-42.730468c28.671875-8.789063 56.277344 12.480468 56.277344 40.578125v384c0 18.21875-11.605469 34.472656-28.863281 40.488281l-128.214844 42.753906c-4.671875 1.449219-9 2.089844-13.589844 2.089844zm128-480c-1.386719 0-2.558593.171875-3.816406.554688l-127.636719 42.558593c-4.183594 1.453125-7.210937 5.675781-7.210937 10.21875v384c0 7.277344 7.890625 12.183594 14.484375 10.113281l127.636718-42.558593c4.160157-1.453125 7.210938-5.675781 7.210938-10.21875v-384c0-5.867188-4.777344-10.667969-10.667969-10.667969zm0 0" />
                    <path d="m186.667969 106.667969c-8.832031 0-16-7.167969-16-16v-32c0-32.363281 26.300781-58.667969 58.664062-58.667969h240c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16h-240c-14.699219 0-26.664062 11.96875-26.664062 26.667969v32c0 8.832031-7.167969 16-16 16zm0 0" />
                    <path d="m314.667969 448h-85.335938c-32.363281 0-58.664062-26.304688-58.664062-58.667969v-32c0-8.832031 7.167969-16 16-16s16 7.167969 16 16v32c0 14.699219 11.964843 26.667969 26.664062 26.667969h85.335938c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" />
                </svg>
            </a>
        <?php endif; ?>
    </nav>
</header>
