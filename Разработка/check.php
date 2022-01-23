<?php
    if($_COOKIE['user'] != '') {
        header('Location: personacc.php');
    } else
    {
        header('Location: auth.html');
    }
?>