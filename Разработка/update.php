<?php
    $week = filter_var(trim($_POST['week']), FILTER_SANITIZE_STRING);
    $time = filter_var(trim($_POST['time']), FILTER_SANITIZE_STRING);
    $coach = filter_var(trim($_POST['coach']), FILTER_SANITIZE_STRING);
    $club = filter_var(trim($_POST['club']), FILTER_SANITIZE_STRING);
    $sport = filter_var(trim($_POST['sport']), FILTER_SANITIZE_STRING);
    $week2 = filter_var(trim($_POST['week2']), FILTER_SANITIZE_STRING);
    $time2 = filter_var(trim($_POST['time2']), FILTER_SANITIZE_STRING);
    $coach2 = filter_var(trim($_POST['coach2']), FILTER_SANITIZE_STRING);
    $club2 = filter_var(trim($_POST['club2']), FILTER_SANITIZE_STRING);
    $sport2 = filter_var(trim($_POST['sport2']), FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'root', '', 'fitness-club');
    $mysql->set_charset('utf8');

    
    $mysql->query("UPDATE `shedule` SET `id_weekday` = '$week2' AND `id_time` = '$time2' AND `id_coach` = '$coach2'
    AND `id_club` = '$club2' AND `id_sport` = '$sport2'
    WHERE `id_weekday` = '$week' AND `id_time` = '$time' AND `id_coach` = '$coach'
    AND `id_club` = '$club' AND `id_sport` = '$sport'");

    $mysql->close();
    
    header('Location: sheduleadm.php')
    ?>