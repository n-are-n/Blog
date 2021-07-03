<?php include_once('Assets/Php/search.php') ?>
<?php include_once('Assets/Php/Comment_Count.php') ?>
<?php include_once('Assets/Php/Like_Count.php') ?>
<?php include_once('Assets/Php/Dislike_Count.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<head>
    <link rel="stylesheet" href="Assets/Stylus/fav.css">
</head>

<body>
    <?php include_once('Inc/header.php') ?>
    <?php include_once('Inc/aside.php') ?>
    <main>
        <section>
            <?php if (empty($_sql->{'num_rows'})) : ?>
                <h1>No Post Found!</h1>
            <?php endif ?>
            <?php foreach ($_sql as $Blog) { ?>
                <!-- Foreach loop through the rows in $sql -->
                <div>
                    <p><?php echo $Blog['_Views'] ?> Views</p>
                    <p class="right"><?php echo $Blog['Date_Time'] ?> Ago</p>
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
                    <p>Like (<?php Like($Blog['ID']) ?>)</p>
                    <p>Dislike (<?php Dislike($Blog['ID']) ?>)</p>
                    <p>Comments (<?php Comment_Count($Blog['ID']) ?>)</p>
                    <?php if (isset($_SESSION['ID'])) : ?>
                        <a href="<?php echo BASE_URL ?>favorite.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>">+</a>
                    <?php endif ?>
                </div>
                <hr>
            <?php } ?>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
    <script src="Assets/Js/Category.js"></script>
</body>

</html>
