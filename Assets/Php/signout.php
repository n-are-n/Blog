<?php
# Logout session
session_start();
session_unset();
session_destroy();
header('Location: ../../home.php?Logout=Success');
