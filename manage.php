<?php include_once('Assets/Php/manage.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

</html>

<body>
    <header>
        <nav>
            <a href="home.php" class="logo">Blog</a>
        </nav>
    </header>
    <main>
        <section>
            <h1 style="display: inline;">Manage Posts</h1>
            <a href="create.php?id=<?php echo $_SESSION['ID'] ?>" class="button right">Add Post</a>
        </section>
        <section class="container">
            <?php foreach ($sql as $Blog) { ?>
                <div class="row">
                    <h5>Title : <?php echo $Blog['Title']; ?></h5>
                    <h6>Description : <?php echo $Blog['Blog']; ?></h6>
                    <a class="button" href="edit.php?id=<?php echo $Blog['ID'] ?>">Edit</a>
                    <a class="button button-primary right" href="<?php echo BASE_URL ?>delete.php?id=<?php echo $Blog['ID'] ?>">Delete</a>
                </div>
            <?php } ?>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
</body>
