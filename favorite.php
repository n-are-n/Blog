<?php include_once('Assets/Php/view_favorite.php') ?>
<?php include_once('Assets/Php/Comment_Count.php') ?>
<?php include_once('Assets/Php/Like_Count.php') ?>
<?php include_once('Assets/Php/Dislike_Count.php') ?>
<?php include_once('Assets/Php/Coment.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
    <?php include_once('Inc/header.php') ?>
    <?php include_once('Inc/aside.php') ?>
    <main>
        <section>
            <?php if (empty($_sql->{'num_rows'})) : ?>
                <h1>No Favorite's Added!</h1>
            <?php endif ?>
            <?php foreach ($_sql as $Blog) { ?>
                <!-- Foreach loop through the rows in $sql -->
                <div>
                    <p><?php echo $Blog['_Views'] ?> Views</p>
                    <p><?php echo $Blog['Date_Time'] ?> Ago</p>
                    <a href="profile.php?id=<?php echo $Blog['User_ID'] ?>">Written By : <?php echo $Blog['Name'] ?></a>
                    <br>
                    <br>
                    <a href="<?php echo BASE_URL ?>count.php?id=<?php echo $Blog['ID'] ?>&view=<?php echo $Blog['_Views'] ?>" target="page">Title : <?php echo $Blog['Title']; ?></a>
                    <br>
                    <br>
                    <a href="<?php echo BASE_URL ?>category.php?id=<?php echo $Blog['Category_ID'] ?>">Category : <?php echo $Blog['Category'] ?></a>
                    <br>
                    <br>
                    <a href="<?php echo BASE_URL ?>count.php?id=<?php echo $Blog['ID'] ?>&view=<?php echo $Blog['_Views'] ?>" target="page">Description : <?php echo $Blog['Post']; ?></a>
                    <br>
                    <br>
                    <?php if (isset($_SESSION['ID'])) { ?>
                        <a href="<?php echo BASE_URL ?>dislike.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>&dislike=0">Like (<?php Like($Blog['ID']) ?>)</a>
                        <a href="<?php echo BASE_URL ?>dislike.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>&dislike=1">Dislike (<?php Dislike($Blog['ID']) ?>)</a>
                        <a>Comments (<?php Comment_Count($Blog['ID']) ?>)</a>
                        <div><?php Comment($Blog['ID']) ?></div>
                    <?php } ?>
                </div>
                <hr>
            <?php } ?>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
    <!-- <script src="Assets/Js/Category.js"></script> -->
</body>

</html>
