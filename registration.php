<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=DNS",  $username="root", $password="");

    if (empty($_POST['name'])) exit("Вы не ввели имя!");
    if (empty($_POST['login'])) exit("Вы не ввели почту!");
    if (($_POST['password']) != ($_POST['confirm_password'])) exit("Пароли не совпадают!");

    $query = "INSERT INTO users VALUES (:name, :login, :password, :confirm_password, NULL)";
    $msg = $conn->prepare($query);
    $msg->execute(['name' => $_POST['name'], 'login' => $_POST['login'], 'password' => $_POST['password'], 'confirm_password' => $_POST['confirm_password']]);

    $msg_id = $conn->lastInsertId();

    header("Location: index.php");
}

catch (PDOException $e)
{
    echo "error" .$e->getMessage();
}
?>