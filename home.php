<?php include_once('Assets/Php/read.php') ?>

<head>
    <link rel="stylesheet" href="Assets/Stylus/fav.css">
</head>
<?php foreach ($sql as $Blog) { ?>
    <div>
        <p><?php echo $Blog['_Views'] ?> Views</p>
        <p><?php echo $Blog['Date_Time'] ?> Ago</p>
        <p>Written By : <?php echo $Blog['Name'] ?></p>
        <p>Title : <?php echo $Blog['Title']; ?></p>
        <p>Category : <?php echo $Blog['Category'] ?></p>
        <p>Description : <?php echo $Blog['Post']; ?></p>
        <p>Like (<?php Like($Blog['ID']) ?>)</p>
        <p>Dislike (<?php Dislike($Blog['ID']) ?>)</p>
        <p>Comments (<?php Comment_Count($Blog['ID']) ?>)</p>
        <?php if(isset($_SESSION['ID'])) : ?>
            <a href="<?php echo BASE_URL ?>favorite.php?user=<?php echo $_SESSION['ID'] ?>&post=<?php echo $Blog['ID'] ?>">+</a>
        <?php endif ?>
        <a href="<?php echo BASE_URL ?>count.php?id=<?php echo $Blog['ID'] ?>&view=<?php echo $Blog['_Views'] ?>" target="page">Read More >>></a>
    </div>
    <hr>
<?php } ?>
<?php if (empty($sql->{'num_rows'})) : ?>
    <h1>No Post Found!</h1>
<?php endif ?>
