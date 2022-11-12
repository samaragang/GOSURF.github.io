<?php
require_once '../config/db.php';

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
        mysqli_query($connect, "INSERT INTO `resorts` (`id`, `country`, `title`, `surf`, `tide`, `wind`) VALUES (NULL, '$country', '$title', '$surf', '$tide', '$wind')");
        break;
    case 'description':
        mysqli_query($connect, "INSERT INTO `description` (`id`, `country`, `city`, `title`, `text`, `img`, `hotel`) VALUES (NULL, '$country', '$city', '$title', '$text', '$img', '$hotel')");
        break;
    case 'airlines':
        mysqli_query($connect, "INSERT INTO `airlines` (`id`, `country`, `airline`, `distance`, `time`, `price`) VALUES (NULL, '$country', '$airline', '$distance', '$time', '$price')");
        break;
    case 'hotel':
        mysqli_query($connect, "INSERT INTO `hotel` (`id`, `country`, `city`, `hotel`, `rating`) VALUES (NULL, '$country', '$city', '$hotel', '$rating')");
        break;
}

header('Location: ../admin.php');
?>