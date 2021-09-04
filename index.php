<!-- Home Page -->
<?php include_once('Assets/Php/Comment_Count.php') ?>
<?php include_once('Assets/Php/Like_Count.php') ?>
<?php include_once('Assets/Php/Dislike_Count.php') ?>
<!DOCTYPE html>
<html lang="en">
    <?php include_once('Inc/head.php') ?>
<body onload="Post(),Category(),Author(),asideCategory()">
    <?php include_once('Inc/header.php') ?>
    <?php include_once('Inc/aside.php') ?>
    <main>
        <section id="section">
            <form>
                <select id="select" onchange="Sort()">
                    <option selected disabled>Sort By : </option>
                    <option value="Like">Likes</option>
                    <option value="View">Views</option>
                </select>
            </form>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
</body>

</html>
