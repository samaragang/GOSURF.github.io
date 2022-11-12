<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'surf');

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$db = new PDO("mysql:host=localhost;dbname=surf","root","");
if (!$db) {
    die('erroe connect do database!');
}

/*====RESORTS====*/ 
$resorts = [];    
if ($query = $db->query("SELECT * FROM `resorts`")) {
    $resorts = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

/*====DESCRIPTION====*/ 
$description = [];
if ($query = $db->query("SELECT * FROM `description`")) {
    $description = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

/*====AIRLINES====*/ 
$airlines = [];
if ($query = $db->query("SELECT * FROM `airlines`")) {
$airlines = $query->fetchAll(PDO::FETCH_ASSOC); 
} else {
    print_r($db->errorInfo());
}

/*====HOTEL====*/ 
$hotel = [];
if ($query = $db->query("SELECT * FROM `hotel`")) {
    $hotel = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

/*====SHOP====*/ 
$shop = [];
if ($query = $db->query("SELECT * FROM `shop`")) {
    $shop = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

/*====AIRLINES+DESCRIPTION====*/ 
$airlines_JOIN_description = [];
if ($query = $db->query("SELECT a.*, d.country, d.city, d.title FROM `airlines` a JOIN `description` d ON a.id = d.id WHERE city != 'CALIFORNIA'")) { 
    $airlines_JOIN_description = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

/*====HOTEL+DESCRIPTION====*/ 
$hotel_JOIN_description = [];
if ($query = $db->query("SELECT h.*, d.city FROM `hotel` h JOIN `description` d ON h.id = d.id")) {
    $hotel_JOIN_description = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}













?>