<?php include_once('Assets/Php/view.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
<?php include_once('Inc/header.php') ?>
    <main>
        <section>
            <?php foreach ($sql as $Blog) { ?>
                <form action="<?php echo BASE_URL ?>edit.php" method="GET">
                    <fieldset>
                        <legend>Edit Post</legend>
                        <input name="ID" value="<?php echo $Blog['ID'] ?>" hidden>
                        <input type="text" size="25" name="Title" value="<?php echo $Blog['Title'] ?>" title="only alphabets & space" pattern="[A-Za-z\s]+" required><br>
                        <textarea name="Blog" required><?php echo $Blog['Blog'] ?></textarea><br>
                        <input type="submit" value="Update Post">
                    </fieldset>
                </form>
            <?php } ?>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
</body>

</html>
