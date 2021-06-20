<!-- Home Page -->
<?php include_once('Assets/Php/read.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
    <?php include_once('Inc/header.php') ?>
    <main>
        <section class="container">
            <?php
            if ($sql != false) { // If true is returned this part will be executed
                foreach ($sql as $Blog) { ?>
                    <div class="row">
                        <span>
                            <!-- Post views -->
                            <?php echo $Blog['_Views'] ?>
                            <svg id="Icons" height="20" viewBox="0 0 74 74" width="20" xmlns="http://www.w3.org/2000/svg">
                                <path d="m37 53a47.326 47.326 0 0 1 -34.729-15.315 1 1 0 0 1 0-1.37 47.034 47.034 0 0 1 69.458 0 1 1 0 0 1 0 1.37 47.326 47.326 0 0 1 -34.729 15.315zm-32.616-16a44.993 44.993 0 0 0 65.232 0 44.993 44.993 0 0 0 -65.232 0z" />
                                <path d="m37 53a16 16 0 1 1 16-16 16.019 16.019 0 0 1 -16 16zm0-30a14 14 0 1 0 14 14 14.015 14.015 0 0 0 -14-14z" />
                                <path d="m37 45a8 8 0 1 1 8-8 8.009 8.009 0 0 1 -8 8zm0-14a6 6 0 1 0 6 6 6.006 6.006 0 0 0 -6-6z" />
                            </svg>
                        </span>
                        <!-- Post created time -->
                        <span class="right"><?php echo $Blog['Date_Time'] ?></span>
                        <span>Written By : <?php echo $Blog['Name'] ?></span>
                        <a href="<?php echo BASE_URL ?>follow.php?user=<?php echo $_SESSION['ID'] ?>&id=<?php echo $Blog['User_ID'] ?>">follow</a>
                        <div>
                            <h4>Title : <?php echo $Blog['Title'] ?></h4>
                            <h6>Category : <?php echo $Blog['Category'] ?></h6>
                            <h5>Description : <?php echo $Blog['Post'] ?></h5>
                        </div>
                        <a href="<?php echo BASE_URL ?>count.php?id=<?php echo $Blog['ID'] ?>&view=<?php echo $Blog['_Views'] ?>" class="button right">Read More >>></a>
                    </div>
                <?php }
            } else { ?>
                <!-- If False is returned from server else part will be executed -->
                <h1 style="text-align: center;">No Post Found!</h1>
            <?php } ?>
        </section>
    </main>
    <?php include_once('Inc/foot.php') ?>
</body>

</html>
