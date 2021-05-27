<?php
# Logout session
session_start();
session_destroy();
header('Location: ../../home.php?Logout=Success');
