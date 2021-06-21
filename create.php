<!-- Create Post Page -->
<?php include_once('Assets/Php/config.php') ?>
<!-- include configuration file -->
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
    <?php include_once('Inc/header.php') ?>
    <main id="post-main">
        <section>
            <form action="<?php echo BASE_URL . 'create.php' ?>" method="GET" enctype="multipart/form-data">
                <fieldset>
                    <legend>New Post</legend>
                    <input type="text" name="ID" value="<?php echo $_SESSION['ID'] ?>" hidden>
                    <!--Title Field -->
                    <label for="Title"><b>Title</b></label><br>
                    <input type="text" id="Title" name="Title" cols="100" size="45" title="only alphabets & space" pattern="[A-Za-z\s]+" required><br>
                    <!-- Category Field -->
                    <label for="Category"><b>Category</b></label><br>
                    <select name="Category" id="Category">
                        <option value="1" selected>Android Application Development</option>
                        <option value="2">Macintosh Application Development</option>
                        <option value="3">Unix Application Development</option>
                        <option value="4">Website Application Development</option>
                        <option value="5">Windows Application Development</option>
                    </select><br>
                    <!-- Blog Field -->
                    <label for="Blog"><b>Blog</b></label><br>
                    <textarea id="Blog" rows="30" cols="100" name="Blog" spellcheck="true" required></textarea><br>
                    <input type="submit" class="button" value="Add Post">
                </fieldset>
            </form>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
</body>

</html>
