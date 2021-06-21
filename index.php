<!-- Home Page -->
<?php include_once('Assets/Php/read.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('Inc/head.php') ?>

<body>
    <?php include_once('Inc/header.php') ?>
    <main>
        <section>
            <?php
            if ($sql != false) { // If true is returned this part will be executed
                foreach ($sql as $Blog) { ?>
                    <div>
                        
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
