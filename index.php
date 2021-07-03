<!-- Home Page -->
<?php include_once('Assets/Php/read.php') ?>
<?php include_once('Assets/Php/Comment_Count.php') ?>
<?php include_once('Assets/Php/Like_Count.php') ?>
<?php include_once('Assets/Php/Dislike_Count.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body onload="readTime()">
    <?php include_once('Inc/header.php') ?>
    <?php include_once('Inc/aside.php') ?>
    <main>
        <section>
            <?php if (empty($_sql->{'num_rows'})) : ?>
                <h1>No Post Found!</h1>
            <?php endif ?>
            <?php foreach ($_sql as $Blog) { ?>
                <article>
                    <p><?php echo $Blog['_Views'] ?> Views</p>
                    <p><?php echo $Blog['Date_Time'] ?> Ago</p>
                    <?php if (isset($Blog['Name'])) : ?>
                        <a href="profile.php?id=<?php echo $Blog['User_ID'] ?>"><?php echo $Blog['Name'] ?></a>
                        <span>in</span>
                        <a href="categories.php?id=<?php echo $Blog['Category_ID'] ?>"><?php echo $Blog['Category'] ?></a>
                    <?php endif ?>
                    <br>
                    <br>
                    <a href="<?php echo BASE_URL ?>count.php?id=<?php echo $Blog['ID'] ?>&view=<?php echo $Blog['_Views'] ?>">
                        <h1>
                            <b>
                                <i>
                                    <strong><?php echo $Blog['Title']; ?></strong>
                                </i>
                            </b>
                        </h1>
                    </a>
                    <br>
                    <a href="<?php echo BASE_URL ?>count.php?id=<?php echo $Blog['ID'] ?>&view=<?php echo $Blog['_Views'] ?>">
                        <b>
                            <i class="Post"><?php echo $Blog['Post']; ?></i>
                        </b>
                    </a>
                    <br>
                    <span class="readTime"></span>
                    <p>Like (<?php Like($Blog['ID']) ?>)</p>
                    <p>Dislike (<?php Dislike($Blog['ID']) ?>)</p>
                    <p>Comments (<?php Comment_Count($Blog['ID']) ?>)</p>
                    <?php if (isset($_SESSION['ID'])) : ?>
                        <a href="<?php echo BASE_URL ?>favorite.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>" title="Add to favorite">+</a>
                    <?php endif ?>
                </article>
                <hr>
            <?php } ?>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
    <!-- <script src="Assets/Js/Category.js"></script> -->
    <script src="Assets/Js/readTime.js"></script>
</body>

</html>

