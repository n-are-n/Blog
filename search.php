<?php include_once('Assets/Php/search.php') ?>
<?php include_once('Assets/Php/read.php') ?>
<head>
    <link rel="stylesheet" href="Assets/Stylus/fav.css">
</head>
<?php foreach ($_sql as $Blog) { ?>
    <!-- Foreach loop through the rows in $sql -->
    <div>
        <p><?php echo $Blog['_Views'] ?> Views</p>
        <p class="right"><?php echo $Blog['Date_Time'] ?> Ago</p>
        <p>Written By : <?php echo $Blog['Name'] ?></p>
        <p>Title : <?php echo $Blog['Title']; ?></p> <!-- Title row -->
        <p>Category : <?php echo $Blog['Category'] ?></p> <!-- Category row -->
        <p>Description : <?php echo $Blog['Post']; ?></p> <!-- Post row -->
        <p>Like (<?php Like($Blog['ID']) ?>)</p>
        <p>Dislike (<?php Dislike($Blog['ID']) ?>)</p>
        <p>Comments (<?php Comment_Count($Blog['ID']) ?>)</p>
        <?php if(isset($_SESSION['ID'])) : ?>
            <a href="<?php echo BASE_URL ?>favorite.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>">+</a>
        <?php endif ?>
        <a href="<?php echo BASE_URL ?>count.php?id=<?php echo $Blog['ID'] ?>&view=<?php echo $Blog['_Views'] ?>" class="button right">Read More >>></a>
    </div>
<?php } ?>
<?php if (empty($sql->{'num_rows'})) : ?>
    <h1>No Post Found!</h1>
<?php endif ?>
