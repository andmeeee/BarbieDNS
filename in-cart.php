<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $photo = $_POST['photo'];
        $price = $_POST['price'];
        $conn = new PDO("mysql:host=localhost;dbname=DNS", $username="root", $password="");

        $stmt = $conn->prepare("INSERT INTO cart (name, photo, price) VALUES (:name, :photo, :price)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':photo', $photo);
        $stmt->bindParam(':price', $price);

        if ($stmt->execute()) {
            echo "Данные успешно добавлены в корзину!";
        } else {
            echo "Произошла ошибка при добавлении данных в корзину.";
        }
    }
?>