<?php
session_start();
unset($SESSION['username']);
session_destroy();
header('Location:nmenu1trial.php');
?>
