<!-- Create Post Page -->
<?php include_once('Assets/Php/config.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>
<body>
<?php include_once('Inc/header.php') ?>
    <main>
        <section>
            <form action="<?php echo BASE_URL . 'create.php' ?>" method="GET">
                <fieldset>
                    <legend>New Post</legend>
                    <!--Title Field -->
                    <input type="text" name="ID" value="<?php echo $_SESSION['ID'] ?>" hidden>
                    <input type="text" name="Title" size="25" title="only alphabets & space" placeholder="Blog Title" pattern="[A-Za-z\s]+" required><br>
                    <!-- Blog Field -->
                    <textarea placeholder="Blog..." cols="27" name="Blog" required></textarea><br>
                    <input type="submit" class="button" value="Add Post">
                </fieldset>
            </form>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
</body>

</html>
