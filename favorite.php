<?php include_once('Assets/Php/view_favorite.php') ?>
<?php include_once('Assets/Php/Comment_Count.php') ?>
<?php include_once('Assets/Php/Like_Count.php') ?>
<?php include_once('Assets/Php/Dislike_Count.php') ?>
<?php include_once('Assets/Php/Coment.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
    <?php include_once('Inc/header.php') ?>
    <?php include_once('Inc/aside.php') ?>
    <main>
        <section>
            <?php if (empty($_sql->{'num_rows'})) : ?>
                <h1>No Favorite's Added!</h1>
            <?php endif ?>
            <?php foreach ($_sql as $Blog) { ?>
                <!-- Foreach loop through the rows in $sql -->
                <article>
                    <div class="content">
                        <div>
                            <?php if (isset($Blog['Name'])) : ?>
                                <a href="profile.php?id=<?php echo $Blog['User_ID'] ?>"><?php echo $Blog['Name'] ?></a>
                            <?php endif ?>
                            <span class="views"><?php echo $Blog['_Views'] ?> Views</span>
                        </div>
                        <div>
                            <a href="<?php echo BASE_URL ?>count.php?id=<?php echo $Blog['ID'] ?>&view=<?php echo $Blog['_Views'] ?>">
                                <h1>
                                    <b>
                                        <i>
                                            <strong><?php echo $Blog['Title']; ?></strong>
                                        </i>
                                    </b>
                                </h1>
                            </a>
                            <a href="<?php echo BASE_URL ?>count.php?id=<?php echo $Blog['ID'] ?>&view=<?php echo $Blog['_Views'] ?>">
                                <b>
                                    <i>
                                        <p class="Post"><?php echo $Blog['Post']; ?></p>
                                    </i>
                                </b>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span title="Like">&#8679;</span>
                                <span> <?php Like($Blog['ID']) ?></span>
                                <span title="Dislike">&#8681;</span>
                                <span> <?php Dislike($Blog['ID']) ?></span>
                                <span id="comment">&#128172;</span>
                                <span> <?php Comment_Count($Blog['ID']) ?></span>
                            </div>
                            <div>
                                <a href="categories.php?id=<?php echo $Blog['Category_ID'] ?>"><?php echo $Blog['Category'] ?></a>
                                <span>&#126;</span>
                                <span class="readTime"></span>
                                <span>&#126;</span>
                                <span><?php echo $Blog['created_at'] ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="Photo">
                        <a href="<?php echo BASE_URL ?>count.php?id=<?php echo $Blog['ID'] ?>&view=<?php echo $Blog['_Views'] ?>">
                            <img src="Assets/Pic//Chotta.jpg" alt="" width="200" height="150">
                        </a>
                    </div>
                </article>
            <?php } ?>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
</body>

</html>
