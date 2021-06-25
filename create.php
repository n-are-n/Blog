<!-- Create Post Page -->
<?php include_once('Assets/Php/config.php') ?>
<head>
    <link rel="stylesheet" href="Assets/Stylus/sign.css">
</head>
            <form action="<?php echo BASE_URL . 'create.php' ?>" method="GET" enctype="multipart/form-data">
                <fieldset>
                    <legend>New Post</legend>
                    <input type="text" name="ID" value="<?php echo $_SESSION['ID'] ?>" hidden>
                    <!--Title Field -->
                    <input type="text" name="Title" placeholder="Post Title" title="only alphabets & space" pattern="[A-Za-z\s]+" required><br>
                    <!-- Category Field -->
                    <select name="Category">
                        <option selected disabled>Category</option>
                        <option value="1">Android Application Development</option>
                        <option value="2">Macintosh Application Development</option>
                        <option value="3">Unix Application Development</option>
                        <option value="4">Website Application Development</option>
                        <option value="5">Windows Application Development</option>
                    </select><br>
                    <!-- Blog Field -->
                    <textarea name="Blog" placeholder="Post Desc..." spellcheck="true" required></textarea><br>
                    <input type="submit" value="Add Post">
                </fieldset>
            </form>
