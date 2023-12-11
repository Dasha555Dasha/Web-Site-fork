<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $product_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&family=Alegreya:ital@0;1&display=swap" rel="stylesheet">
    <title>Обновление позиции</title>
</head>
<body style="display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
margin: 0;
    padding: 0;
    font-family: 'Alegreya', sans-serif;
    color: #E8A24B;
    font-size: 20px;">
    <form style="background-color: #FFF0D8; padding: 20px; border: 5px solid #78341D; display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;" action="vendor/update.php" method="post">
        <input style="border: none;
    text-align: center;
    color: #E8A24B;
    background: none;
    outline: none;
    border-bottom: 2px solid #78341D;
    padding: 0;" type="hidden" name="id" value="<?= $product['id'] ?>">
    <h3 style="font-size: 40px;">Обновление позиции</h3>
        <p>Название</p>
        <input style="border: none;
    text-align: center;
    color: #E8A24B;
    background: none;
    outline: none;
    border-bottom: 2px solid #78341D;
    padding: 0;" type="text" name="title" value="<?= $product['title'] ?>">
    <p>Название изображения</p>
        <input style="border: none;
    text-align: center;
    color: #E8A24B;
    background: none;
    outline: none;
    border-bottom: 2px solid #78341D;
    padding: 0;" type="text" name="img" value="<?= $product['img'] ?>">
        <p>Описание</p>
        <textarea style="border: none;
    text-align: center;
    color: #E8A24B;
    background: none;
    outline: none;
    border-bottom: 2px solid #78341D;
    padding: 0;" name="description"><?= $product['description'] ?></textarea>
        <p>Цена</p>
        <input style="border: none;
    text-align: center;
    color: #E8A24B;
    background: none;
    outline: none;
    border-bottom: 2px solid #78341D;
    padding: 0;" type="number" name="price" value="<?= $product['price'] ?>"> <br> <br>
        <button style="margin-bottom: 30px; background: none; border: none; font-size: 30px; color: #E8A24B;" type="submit">Обновить</button>
    </form>
</body>
</html>