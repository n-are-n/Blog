<!-- Create Post Page -->
<?php include_once('Assets/Php/config.php') ?>
<?php include_once('Assets/Php/categories.php') ?>

<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
    <?php include_once('Inc/header.php') ?>
    <?php include_once('Inc/aside.php') ?>
    <main>
        <section>
            <form action="<?php echo BASE_URL . 'create.php' ?>" method="GET" enctype="multipart/form-data">
                <fieldset>
                    <legend>New Post</legend>
                    <input type="text" name="ID" value="<?php echo $_SESSION['ID'] ?>" hidden>
                    <!--Title Field -->
                    <input type="text" name="Title" placeholder="Post Title" title="only alphabets & space" pattern="[A-Za-z\s]+" required><br>
                    <!-- Category Field -->
                    <select name="Category">
                        <option selected disabled>Category</option>
                        <?php foreach ($sql as $Categories) { ?>
                            <option value="<?php echo $Categories['ID'] ?>"><?php echo $Categories['Category'] ?></option>
                        <?php } ?>
                    </select><br>
                    <!-- Blog Field -->
                    <textarea name="Blog" placeholder="Post Desc..." spellcheck="true" required></textarea><br>
                    <input type="submit" value="Add Post">
                </fieldset>
            </form>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
    <!-- <script src="Assets/Js/Category.js"></script> -->
</body>

</html>
