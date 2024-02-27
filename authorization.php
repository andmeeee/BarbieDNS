<?php
try{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DNS";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (empty($_POST['login'])) exit("Вы не ввели логин!");
    if (empty($_POST['password'])) exit("Вы не ввели пароль!");

    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "Вы успешно авторизовались!";
        $currentTime = date("Y-m-d H:i:s");
        header("Location: index.php");
        $insertSql = "INSERT INTO autho_users (login, time) VALUES ('$login', '$currentTime')";
        mysqli_query($conn, $insertSql);
    } else {
        echo "Ошибка авторизации. Пожалуйста, проверьте свои учетные данные.";
    }
}

catch (PDOException $e)
{
    echo "error" .$e->getMessage();
}
?>