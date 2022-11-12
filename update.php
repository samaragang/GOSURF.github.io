<?php
require_once 'config/db.php';

$data_id = $_GET['id'];
$table_name = $_GET['table_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE_SURF-BD</title>
</head>
<body>
<style>
    body{font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
</style>

<h3>UPDATE DATA</h3>

<?php
switch ($table_name) {
    case 'resorts':
        $data = mysqli_query($connect, "SELECT * FROM `$table_name` WHERE `id` = '$data_id'" );
        $data = mysqli_fetch_assoc($data);?>
        <form action="vendor/update.php" method="post">
            <input type="hidden" name="table_name" value="resorts">
            <input type="hidden" name="id" value="<?= $data['id']?>">
            <p>COUNTRY</p>
            <input type="text" name="country" value="<?= $data['country']?>">
            <p>TITLE</p>
            <input type="text" name="title" value="<?= $data['title']?>">
            <p>SURF</p>
            <input type="text" name="surf" value="<?= $data['surf']?>">
            <p>TIDE</p>
            <input type="text" name="tide" value="<?= $data['tide']?>">
            <p>WIND</p>
            <input type="text" name="wind" value="<?= $data['wind']?>">
            <button type="submit">update data</button>
        </form>
        <?php break;
    case 'description':
        $data = mysqli_query($connect, "SELECT * FROM `$table_name` WHERE `id` = '$data_id'" );
        $data = mysqli_fetch_assoc($data); ?>
        <form action="vendor/update.php" method="post">
            <input type="hidden" name="table_name" value="description">
            <input type="hidden" name="id" value="<?= $data['id']?>">
            <p>COUNTRY</p>
            <input type="text" name="country" value="<?= $data['country']?>">
            <p>CITY</p>
            <input type="text" name="city" value="<?= $data['city']?>">
            <p>TITLE</p>
            <input type="text" name="title" value="<?= $data['title']?>">
            <p>TEXT</p>
            <textarea name="text"><?= $data['text']?></textarea>
            <p>IMG</p>
            <input type="text" name="img" value="<?= $data['img']?>">
            <p>HOTEL</p>
            <input type="text" name="hotel" value="<?= $data['hotel']?>">
            <button type="submit">update data</button>
        </form>
        <?php break;
    case 'airlines':
        $data = mysqli_query($connect, "SELECT * FROM `$table_name` WHERE `id` = '$data_id'" );
        $data = mysqli_fetch_assoc($data); ?>
        <form action="vendor/update.php" method="post">
            <input type="hidden" name="table_name" value="airlines">
            <input type="hidden" name="id" value="<?= $data['id']?>">
            <p>COUNTRY</p>
            <input type="text" name="country" value="<?= $data['country']?>">
            <p>AIRLINE</p>
            <input type="text" name="airline" value="<?= $data['airline']?>">
            <p>DISTANCE</p>
            <input type="text" name="distance" value="<?= $data['distance']?>">
            <p>TIME</p>
            <input type="text" name="time" value="<?= $data['time']?>">
            <p>PRICE</p>
            <input type="text" name="price" value="<?= $data['price']?>">
            <button type="submit">update data</button>
        </form>
       <?php break;
    case 'hotel':
        $data = mysqli_query($connect, "SELECT * FROM `$table_name` WHERE `id` = '$data_id'" );
        $data = mysqli_fetch_assoc($data); ?>
        <form action="vendor/update.php" method="post">
            <input type="hidden" name="table_name" value="hotel">
            <input type="hidden" name="id" value="<?= $data['id']?>">
            <p>COUNTRY</p>
            <input type="text" name="country" value="<?= $data['country']?>">
            <p>CITY</p>
            <input type="text" name="city" value="<?= $data['city']?>">
            <p>HOTEL</p>
            <input type="text" name="hotel" value="<?= $data['hotel']?>">
            <p>RATING</p>
            <input type="text" name="rating" value="<?= $data['rating']?>">
            <button type="submit">update data</button>
        </form>
       <?php break;
}?>

</body>
</html>