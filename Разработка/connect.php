<?php

$connect = mysqli_connect('localhost', root, '', 'fitness-club');

if(!$connect) {
    die('Error connect to database');
}

?>