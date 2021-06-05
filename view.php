<?php include_once('Assets/Php/view.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
    <?php include_once('Inc/header.php') ?>
    <main>
        <section class="container">
            <?php foreach ($sql as $Blog) { ?>
                <div class="row">
                    <span class="right"><?php echo $Blog['Date & Time'] ?></span>
                    <div>
                        <h4>Title : <?php echo $Blog['Title']; ?></h4>
                        <h6>Category : <?php echo $Blog['Category_ID'] ?></h6>
                        <h5>Description : <?php echo $Blog['Blog']; ?></h5>
                    </div>
                    <?php if (isset($_SESSION['ID'])) { ?>
                        <div>
                            <span>Like(0)</span>
                            <span>Dislike(0)</span>
                            <span class="comments">Comment(0)</span>
                        </div>
                        <form action="<?php echo BASE_URL ?>comment.php" method="GET" class="hidden" id="form">
                            <fieldset>
                                <legend>Comment</legend>
                                <input type="text" name="Post_ID" value="<?php echo $Blog['ID'] ?>" hidden>
                                <textarea name="Comment" placeholder="write your comments here..." cols="30" rows="10" required></textarea><br>
                                <input type="submit" id="submit" value="Submit">
                            </fieldset>
                        </form>
                    <?php } ?>
                </div>
            <?php } ?>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
    <script src="Assets/Js/script.js"></script>
</body>

</html>
