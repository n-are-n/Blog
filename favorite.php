<?php include_once('Assets/Php/view_favorite.php') ?>
<head>
    <link rel="stylesheet" href="Assets/Stylus/fav.css">
</head>
<?php foreach ($sql as $Blog) { ?> <!-- Foreach loop through the rows in $sql -->
    <div>
        <span><?php echo $Blog['_Views'] ?> Views</span>
        <span><?php echo $Blog['Date_Time'] ?> Ago</span>
        <span>Written By : <?php echo $Blog['Name'] ?></span>
        <div>
            <!-- Post Data -->
            <h4>Title : <?php echo $Blog['Title']; ?></h4> <!-- Title row -->
            <h6>Category : <?php echo $Blog['Category'] ?></h6> <!-- Category row -->
            <h5>Description : <?php echo $Blog['Post']; ?></h5> <!-- Post row -->
        </div>
        <a href="<?php echo BASE_URL ?>count.php?id=<?php echo $Blog['ID'] ?>&view=<?php echo $Blog['_Views'] ?>">Read More >>></a>
        <?php if (isset($_SESSION['ID'])) { ?>
            <div>
                <a href="<?php echo BASE_URL ?>dislike.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>&dislike=0">Like (<?php Like($Blog['ID']) ?>)</a>
                <a href="<?php echo BASE_URL ?>dislike.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>&dislike=1">Dislike (<?php Dislike($Blog['ID']) ?>)</a>
                <a onclick="comment()">Comments (<?php Comment_Count($Blog['ID']) ?>)</a>
                <a href="<?php echo BASE_URL ?>favorite.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>">+</a>
            </div>
            <div><?php Comment($Blog['ID']) ?></div>
            <!-- Comment Form -->
            <form action="<?php echo BASE_URL ?>comment.php" method="GET" enctype="multipart/form-data">
                <fieldset>
                    <legend>Comment</legend>
                    <input type="text" name="Post_ID" value="<?php echo $Blog['ID'] ?>" hidden>
                    <textarea name="Comment" placeholder="write your comments here..." cols="30" rows="10" required></textarea><br>
                    <input type="submit" value="Submit">
                </fieldset>
            </form>
        <?php } ?>
    </div>
<?php } ?>
<?php if(empty($sql->{'num_rows'})) : ?>
    <h1>No Favorite's Added!</h1>
<?php endif ?>
