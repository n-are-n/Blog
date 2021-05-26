<?php
session_start();
include_once('Assets/Php/read.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
<?php include_once('Inc/header.php') ?>
    <main>
        <section>
            <?php if (isset($_SESSION['Name'])): ?>
                <a href="create.php" class="button">+ Post</a>
            <?php endif; ?>
        </section>
        <section class="container">
                <?php foreach ($sql as $Blog) { ?>
                    <div class="row">
                        <h5>Title : <?php echo $Blog['Title']; ?></h5>
                        <h6 id="desc">Description : <?php echo $Blog['Blog']; ?></h6>
                        <a href="view.php?id=<?php echo $Blog['ID']; ?>" class="button right">Read More >>></a>
                    </div>
                <?php } ?>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
    <script src="Assets/Js/home.js"></script>
</body>

</html>
