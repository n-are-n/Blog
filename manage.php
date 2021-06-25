<!-- Manage Post Page --> 
<?php include_once('Assets/Php/manage.php') ?>
<head>
    <link rel="stylesheet" href="Assets/Stylus/fav.css">
</head>
<section>
    <h1>Manage Posts</h1>
    <a href="create.php?id=<?php echo $_SESSION['ID'] ?>">Add + Post</a>
</section>
<section>
    <?php foreach ($sql as $Blog) { ?>
        <div>
            <h5>Title : <?php echo $Blog['Title']; ?></h5>
            <h6>Description : <?php echo $Blog['Post']; ?></h6>
            <a href="edit.php?id=<?php echo $Blog['ID'] ?>">Edit</a>
            <a href="<?php echo BASE_URL ?>delete.php?id=<?php echo $Blog['ID'] ?>">Delete</a>
        </div>
    <?php } ?>
    <?php if(empty($sql->{'num_rows'})) : ?>
        <h1>No Post Found!</h1>
    <?php endif ?>
</section>
