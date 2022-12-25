<?php
// Подключение к БД 
$data_base = new PDO('mysql:host=localhost;dbname=uzi_plus', 'root', '');

// Запросы к БД 
// Получаем список категорий для детей
$sql_cat = "SELECT * FROM `service_category` WHERE `for-children` IS NOT NULL";
$result_cat = $data_base->query($sql_cat);
$category_children = $result_cat->fetchAll(PDO::FETCH_ASSOC);

// Получаем список категорий для взрослых
$sql_cat = "SELECT * FROM `service_category` WHERE `for-children` IS NULL";
$result_cat = $data_base->query($sql_cat);
$category_adult = $result_cat->fetchAll(PDO::FETCH_ASSOC);



?>