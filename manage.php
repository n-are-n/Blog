<!-- Manage Post Page -->
<?php include_once('Assets/Php/manage.php') ?>
<?php include_once('Assets/Php/Comment_Count.php') ?>
<?php include_once('Assets/Php/Like_Count.php') ?>
<?php include_once('Assets/Php/Dislike_Count.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
    <?php include_once('Inc/header.php') ?>
    <?php include_once('Inc/aside.php') ?>
    <main>
        <section>
            <h1>Manage Posts</h1>
            <a href="create.php?id=<?php echo $_SESSION['ID'] ?>">Add + Post</a>
        </section>
        <section>
            <?php if (empty($_sql->{'num_rows'})) : ?>
                <h1>No Post Found!</h1>
            <?php endif ?>
            <?php foreach ($_sql as $Blog) { ?>
                <div>
                    <p><?php echo $Blog['_Views'] ?> Views</p>
                    <p><?php echo $Blog['Date_Time'] ?> Ago</p>
                    <p>Title : <?php echo $Blog['Title'] ?></p>
                    <p>Category : <?php echo $Blog['Category'] ?></p>
                    <p>Description : <?php echo $Blog['Post'] ?></p>
                    <p>Like (<?php Like($Blog['ID']) ?>)</p>
                    <p>Dislike (<?php Dislike($Blog['ID']) ?>)</p>
                    <p>Comments (<?php Comment_Count($Blog['ID']) ?>)</p>
                    <a href="edit.php?id=<?php echo $Blog['ID'] ?>">Edit</a>
                    <a href="<?php echo BASE_URL ?>delete.php?id=<?php echo $Blog['ID'] ?>">Delete</a>
                </div>
                <hr>
            <?php } ?>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
    <!-- <script src="Assets/Js/Category.js"></script> -->
</body>

</html>
