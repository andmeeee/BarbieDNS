<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=DNS",  $username="root", $password="");

    if (empty($_POST['name'])) exit("Вы не ввели имя!");
    if (empty($_POST['email'])) exit("Вы не ввели почту!");
    if (empty($_POST['content'])) exit("Пустая тема обращения!");

    $query = "INSERT INTO mes VALUES (NULL , :name, :email, :content)";
    $msg = $conn->prepare($query);
    $msg->execute(['name' => $_POST['name'], 'email' => $_POST['email'], 'content' => $_POST['content']]);

    $msg_id = $conn->lastInsertId();

    header("Location: contact.php");
}

catch (PDOException $e)
{
    echo "error" .$e->getMessage();
}
?>