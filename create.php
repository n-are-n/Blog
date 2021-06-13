<!-- Create Post Page -->
<?php include_once('Assets/Php/config.php') ?> <!-- include configuration file --> 
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
    <?php include_once('Inc/header.php') ?>
    <main>
        <section>
            <form action="<?php echo BASE_URL . 'create.php' ?>" method="GET" enctype="multipart/form-data">
                <fieldset>
                    <legend>New Post</legend>
                    <input type="text" name="ID" value="<?php echo $_SESSION['ID'] ?>" hidden>
                    <!--Title Field -->
                    <input type="text" name="Title" size="25" title="only alphabets & space" placeholder="Blog Title" pattern="[A-Za-z\s]+" required><br>
                    <!-- Category Field -->
                    <select name="Category" style="padding: 6px 60px;">
                        <option selected disabled>Categories</option>
                        <option value="1">Android Application Development</option>
                        <option value="2">Macintosh Application Development</option>
                        <option value="3">Unix Application Development</option>
                        <option value="4">Website Application Development</option>
                        <option value="5">Windows Application Development</option>
                    </select><br>
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
