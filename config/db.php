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







if ($query = $db->query("SELECT * FROM `airlines` ORDER BY `distance` ASC")) {
    $airlines = $query->fetchAll(PDO::FETCH_ASSOC); 
} else {
    print_r($db->errorInfo());
}

    // case 'DESC':
    //     if ($query = $db->query("SELECT * FROM `airlines` ORDER BY `distance` DESC")) {
    //         $airlines = $query->fetchAll(PDO::FETCH_ASSOC); 
    //     } else {
    //         print_r($db->errorInfo());
    //     }
    //     // header('Location: ../admin.php');
    //     break;
    // case 'DEFAULT':
    //     if ($query = $db->query("SELECT * FROM `airlines`")) {
    //         $airlines = $query->fetchAll(PDO::FETCH_ASSOC); 
    //     } else {
    //         print_r($db->errorInfo());
    //     }
    //     // header('Location: ../admin.php');
    //     break;





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







/*====SUM_PRICE_AIRLINES====*/ 
$sum_price_airlines = [];
if ($query = $db->query("SELECT SUM(`price`) from `airlines`")) {
    $sum_price_airlines = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}
/*====MAX_PRICE_AIRLINES====*/ 
$max_price_airlines = [];
if ($query = $db->query("SELECT `price` FROM `airlines` WHERE `price` = (SELECT MAX(`price`) FROM `airlines`)")) {
    $max_price_airlines = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

/*====MAX_PRICE_COUNTRY_AIRLINES====*/ 
$max_price_country_airlines = [];
if ($query = $db->query("SELECT `country` FROM `airlines` WHERE `price`= (SELECT MAX(`price`) FROM `airlines`) GROUP BY `country`")) {
    $max_price_country_airlines = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

/*====MIN_PRICE_AIRLINES====*/ 
$min_price_airlines = [];
if ($query = $db->query("SELECT  `price` FROM `airlines` WHERE `price` = (SELECT MIN(`price`) FROM `airlines`)")) {
    $min_price_airlines = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

/*====MIN_PRICE_COUNTRY_AIRLINES====*/ 
$min_price_country_airlines = [];
if ($query = $db->query("SELECT `country` FROM `airlines` WHERE `price`= (SELECT MIN(`price`) FROM `airlines`) GROUP BY `country`")) {
    $min_price_country_airlines = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

//SELECT * FROM Sumproduct WHERE (Product = 'Bikes' OR Product = 'Skates') AND Month= 'March'
//SELECT * FROM Sumproduct WHERE Amount BETWEEN 1000 AND 2000











?>