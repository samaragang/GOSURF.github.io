<?php

require_once '../config/db.php';

$id = $_POST['id'];
$table_name = $_POST['table_name'];
$country = $_POST['country'];
$city = $_POST['city'];
$title = $_POST['title'];
$text = $_POST['text'];
$img = $_POST['img'];
$hotel = $_POST['hotel'];
$surf = $_POST['surf'];
$tide = $_POST['tide'];
$wind = $_POST['wind'];
$airline = $_POST['airline'];
$distance = $_POST['distance'];
$time = $_POST['time'];
$price = $_POST['price'];
$hotel = $_POST['hotel'];
$rating = $_POST['rating'];


switch ($table_name) {
    case 'resorts':
        mysqli_query($connect, "UPDATE `resorts` SET `country` = '$country', `title` = '$title', `surf` = '$surf', `tide` = '$tide', `wind` = '$wind' WHERE `resorts`.`id` = '$id'");
        break;
    case 'description':
        mysqli_query($connect, "UPDATE `description` SET `country` = '$country', `city` = '$city', `title` = '$title', `text` = '$text', `img` = '$img', `hotel` = '$hotel' WHERE `description`.`id` = '$id'");
        break;
    case 'airlines':
        mysqli_query($connect, "UPDATE `airlines` SET `country` = '$country', `airline` = '$airline', `distance` = '$distance', `time` = '$time', `price` = '$price' WHERE `airlines`.`id` = '$id'");
        break;
    case 'hotel':
        mysqli_query($connect, "UPDATE `hotel` SET `country` = '$country', `city` = '$city', `hotel` = '$hotel', `rating` = '$rating',  WHERE `hotel`.`id` = '$id'");
        break;
}

header('Location: ../admin.php');
?>