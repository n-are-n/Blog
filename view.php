<?php include_once('Assets/Php/view.php') ?>
<?php include_once('Assets/Php/Comment_Count.php') ?>
<?php include_once('Assets/Php/Like_Count.php') ?>
<?php include_once('Assets/Php/Dislike_Count.php') ?>
<?php include_once('Assets/Php/Coment.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body onload="readTime()">
    <?php include_once('Inc/header.php') ?>
    <?php include_once('Inc/aside.php') ?>
    <main>
        <section>
            <?php foreach ($_sql as $Blog) { ?>
                <!-- Foreach loop through the rows in $sql -->
                <div>
                    <p><?php echo $Blog['Date_Time'] ?></p>
                    <p>Written By : <?php echo $Blog['Name'] ?></p>
                    <!-- Post Data -->
                    <p>Title : <?php echo $Blog['Title']; ?></p> <!-- Title row -->
                    <p>Category : <?php echo $Blog['Category'] ?></p> <!-- Category row -->
                    <p>Description : <?php echo $Blog['Post']; ?></p> <!-- Post row -->
                    <?php if (isset($_SESSION['ID'])) { ?>
                        <a href="<?php echo BASE_URL ?>dislike.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>&dislike=1">Like (<?php Like($Blog['ID']) ?>)</a>
                        <a href="<?php echo BASE_URL ?>dislike.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>&dislike=0">Dislike (<?php Dislike($Blog['ID']) ?>)</a>
                        <a id="comments">Comments (<?php Comment_Count($Blog['ID']) ?>)</a>
                        <a href="<?php echo BASE_URL ?>favorite.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>">+</a>
                        <p id="comment"><?php Comment($Blog['ID']) ?></p>
                        <!-- Comment Form -->
                        <form action="<?php echo BASE_URL ?>comment.php" id="form" method="GET" enctype="multipart/form-data">
                            <fieldset>
                                <legend>Comment</legend>
                                <input type="text" name="Post_ID" value="<?php echo $Blog['ID'] ?>" hidden>
                                <input type="text" name="Comment" placeholder="write your comments here..." required>
                                <input type="submit" id="submit" value="Submit">
                            </fieldset>
                        </form>
                    <?php } ?>
                </div>
                <hr>
            <?php } ?>
            <h2>Related Post's</h2>
            <?php foreach ($Sql as $blog) { ?>
                <div>
                    <p><?php echo $blog['_Views'] ?> Views</p>
                    <p><?php echo $blog['Date_Time'] ?> Ago</p>
                    <?php if (isset($blog['Name'])) : ?>
                        <a href="profile.php?id=<?php echo $blog['User_ID'] ?>">Written By : <?php echo $blog['Name'] ?></a>
                    <?php endif ?>
                    <br>
                    <br>
                    <a href="<?php echo BASE_URL ?>count.php?id=<?php echo $blog['ID'] ?>&view=<?php echo $blog['_Views'] ?>" target="page">Title : <?php echo $blog['Title']; ?></a>
                    <br>
                    <br>
                    <a href="categories.php?id=<?php echo $blog['Category_ID'] ?>">Category : <?php echo $blog['Category'] ?></a>
                    <br>
                    <br>
                    <a href="<?php echo BASE_URL ?>count.php?id=<?php echo $blog['ID'] ?>&view=<?php echo $blog['_Views'] ?>" target="page">Description : <?php echo $blog['Post']; ?></a>
                    <p>Like (<?php Like($blog['ID']) ?>)</p>
                    <p>Dislike (<?php Dislike($blog['ID']) ?>)</p>
                    <p>Comments (<?php Comment_Count($blog['ID']) ?>)</p>
                    <?php if (isset($_SESSION['ID'])) : ?>
                        <a href="<?php echo BASE_URL ?>favorite.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $blog['ID'] ?>">+</a>
                    <?php endif ?>
                </div>
                <hr>
            <?php } ?>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
    <script src="Assets/Js/Comment.js"></script>
    <script src="Assets/Js/readTime.js"></script>
</body>

</html>
