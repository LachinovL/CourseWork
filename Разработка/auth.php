<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'root', '', 'fitness-club');
    $mysql->set_charset('utf8');

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = 
    '$login' AND `password` = '$pass'");
    $user = $result->fetch_assoc();
    if (count($user) == 0) {
        ?>
        <script> alert("Пользователь не найден")
        window.location.href = "/auth.html"
        </script>
        <?php
        exit();
    }

    setcookie('user', $user['id'], time() + 3600, "/");
    setcookie('isAdmin', $user['isAdmin'], time() + 3600, "/");

    $mysql->close();
    
    header('Location: index.php')
    ?>