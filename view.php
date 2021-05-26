<?php include_once('Assets/Php/view.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
<?php include_once('Inc/header.php') ?>
    <main>
        <section class="container">
            <?php foreach ($sql as $Blog) { ?>
                <div class="row">
                    <h5>Title : <?php echo $Blog['Title']; ?></h5>
                    <h6>Description : <?php echo $Blog['Blog']; ?></h6>
                    <?php if(isset($_SESSION['Name'])): ?>
                        <a class="button" href="edit.php?id=<?php echo $Blog['ID'] ?>">Edit</a>
                        <a class="button button-primary right" href="<?php echo BASE_URL ?>delete.php?id=<?php echo $Blog['ID'] ?>">Delete</a>
                    <?php endif; ?>
                </div>
                <?php } ?>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
</body>

</html>
