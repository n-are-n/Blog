<?php include_once('Assets/Php/author.php') ?>
<?php include_once('Assets/Php/Categories.php') ?>
<aside>
    <form id="Form">
        <legend>Author</legend>
        <div>
            <?php foreach ($Sql as $author) { ?>
                <input type="radio" name="Author" value="<?= $author['ID'] ?>">
                <label><?= $author['Name'] ?></label>
                <br>
            <?php } ?>
        </div>
        <legend>Category</legend>
        <div>
            <?php foreach ($sql as $Category) { ?>
                <input name="Category" type="radio" value="<?= $Category['ID'] ?>">
                <label><?= $Category['Category'] ?></label>
                <br>
                <?php } ?>
        </div>
    </form>
</aside>
<script src="Assets/Js/aside.js"></script>
<aside>
</aside>
