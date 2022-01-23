<?php
    if($_COOKIE['user'] != '') {
        header('Location: online.php');
    } else
    {
        header('Location: auth.html');
    }
?>