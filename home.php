<!-- Home Page -->
<?php
include_once('Assets/Php/read.php');
?>
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
                        <h6 class="desc">Description : <?php echo $Blog['Blog']; ?></h6>
                        <a href="view.php?id=<?php echo $Blog['ID']; ?><?php if(isset($_SESSION['ID']) && $_SESSION['ID'] === $Blog['User_ID']): echo '&user='.$_SESSION['ID'] ?><?php endif; ?>" class="button right">Read More >>></a>
                    </div>
                <?php } ?>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
    <script src="Assets/Js/home.js">
    /* Javascript File *////
    </script>
</body>

</html>
