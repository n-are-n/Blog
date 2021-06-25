<?php include_once('Assets/Php/view.php') ?>
<?php include_once('Assets/Php/read.php') ?>
<head>
    <link rel="stylesheet" href="Assets/Stylus/fav.css">
</head>
<?php foreach ($_sql as $Blog) { ?> <!-- Foreach loop through the rows in $sql -->
    <div>
        <p><?php echo $Blog['Date_Time'] ?></p>
        <p>Written By : <?php echo $Blog['Name'] ?></p>
        <!-- Post Data -->
        <p>Title : <?php echo $Blog['Title']; ?></p> <!-- Title row -->
        <p>Category : <?php echo $Blog['Category'] ?></p> <!-- Category row -->
        <p>Description : <?php echo $Blog['Post']; ?></p> <!-- Post row -->
        <?php if (isset($_SESSION['ID'])) { ?>
            <a href="<?php echo BASE_URL ?>dislike.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>&dislike=0">Like (<?php Like($Blog['ID']) ?>)</a>
            <a href="<?php echo BASE_URL ?>dislike.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>&dislike=1">Dislike (<?php Dislike($Blog['ID']) ?>)</a>
            <a id="comments">Comments (<?php Comment_Count($Blog['ID']) ?>)</a>
            <a href="<?php echo BASE_URL ?>favorite.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>">+</a>
            <span id="comment" class="hidden"><?php Comment($Blog['ID']) ?></span>
            <!-- Comment Form -->
            <form action="<?php echo BASE_URL ?>comment.php" id="form" method="GET" class="hidden" enctype="multipart/form-data">
                <fieldset>
                    <legend>Comment</legend>
                    <input type="text" name="Post_ID" value="<?php echo $Blog['ID'] ?>" hidden>
                    <textarea name="Comment" placeholder="write your comments here..." cols="30" rows="10" required></textarea><br>
                    <input type="submit" id="submit" value="Submit">
                </fieldset>
            </form>
        <?php } ?>
    </div>
<?php } ?>
<script src="Assets/Js/Comment.js"></script>
