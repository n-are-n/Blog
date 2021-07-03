<?php include_once('Assets/Php/view.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
    <?php include_once('Inc/header.php') ?>
    <?php include_once('Inc/aside.php') ?>
    <main>
        <section>
            <?php foreach ($_sql as $Blog) { #By foreach getting blog details from server 
            ?>
                <form action="<?php echo BASE_URL ?>edit.php" method="GET" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Edit Post</legend>
                        <!-- ID Field -->
                        <input name="ID" value="<?php echo $Blog['ID'] #Blog ID 
                                                ?>" hidden>
                        <input type="text" size="25" name="Title" value="<?php echo $Blog['Title'] #Blog Title 
                                                                            ?>" title="only alphabets & space" pattern="[A-Za-z\s]+" required><br>
                        <select name="Category">
                            <option selected>Category</option>
                            <?php foreach ($sql as $Categories) { ?>
                                <option value="<?php echo $Categories['ID'] ?>"><?php echo $Categories['Category'] ?></option>
                            <?php } ?>
                        </select><br>
                        <textarea name="Post" cols="27" required><?php echo $Blog['Post'] #Blog content 
                                                                    ?></textarea><br>
                        <input type="submit" value="Update Post">
                    </fieldset>
                </form>
            <?php } ?>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
</body>

</html>
