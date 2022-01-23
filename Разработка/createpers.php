<?php
    $user = filter_var(trim($_POST['user']), FILTER_SANITIZE_STRING);
    $week = filter_var(trim($_POST['week']), FILTER_SANITIZE_STRING);
    $time = filter_var(trim($_POST['time']), FILTER_SANITIZE_STRING);
    $coach = filter_var(trim($_POST['coach']), FILTER_SANITIZE_STRING);
    $club = filter_var(trim($_POST['club']), FILTER_SANITIZE_STRING);
    $sport = filter_var(trim($_POST['sport']), FILTER_SANITIZE_STRING);

    $mysql = new mysqli('std-mysql', 'std_1676_fitclub', 'Lachinov', 'std_1676_fitclub');
    $mysql->set_charset('utf8');

    
    $mysql->query("INSERT INTO `individ_shedule` (`id_user`,`id_weekday`, `id_time`, `id_coach`, `id_club`, `id_sport`) VALUES ('$user', '$week', '$time', '$coach', '$club', '$sport')");

    $mysql->close();
    
    header('Location: personacc.php')
    ?>