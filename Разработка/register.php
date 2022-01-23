<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $isAdmin = 0;

    if (mb_strlen($login) < 3 || mb_strlen($login) > 15) {
        ?>
            <script> alert("Недопустимая длина логина")
            window.location.href = "/register.html"
            </script>
            <?php
            exit();
    } else if (mb_strlen($name) < 2 || mb_strlen($name) > 15) {
        ?>
        <script> alert("Недопустимая длина имени")
        window.location.href = "/register.html"
        </script>
        <?php
        exit();
    } if (mb_strlen($pass) < 3 || mb_strlen($pass) > 15) {
        ?>
        <script> alert("Недопустимая длина пароля")
        window.location.href = "/register.html"
        </script>
        <?php
        exit();
    }

    $mysql = new mysqli('std-mysql', 'std_1676_fitclub', 'Lachinov', 'std_1676_fitclub');
    $mysql->set_charset('utf8');
    $mysql->query("INSERT INTO `users` (`login`, `password`, `name`, `isAdmin`)
     VALUES ('$login', '$pass', '$name', '$isAdmin')");

    $mysql->close();


    header('Location: auth.html');
?>
