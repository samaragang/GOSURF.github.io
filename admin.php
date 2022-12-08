<?php
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN_SURF-BD</title>
</head>
<body>

<style>
    body{font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
    .table {
        width: 1600px;
        margin-bottom: 20px;
        border: 15px solid #4af6cd;
        border-top: 5px solid #4af6cd;
        border-collapse: collapse; 
        text-align:center;
    }
    .table th {
        font-weight: bold;
        padding: 5px;
        background: #4af6cd;
        border: none;
        border-bottom: 5px solid #4af6cd;
    }
    .table td {
        width: 200px;
        padding: 1rem;
    }

    .text {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        line-height: 1.3em;
        height: 3.9em;
    }

    .form {
        display: flex;
    }

    .form__item {
        width: 230px;
        height: 100px;
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-left: 30px;

       
    }

    .form__item input {
        height: 30px;
        margin-left: 10px;
    }

</style>

<table class="table">
    <h1><?= $table_name = 'description';?></h1>
    <thead>
        <tr>
	        <th>ID</th>
            <th>COUNTRY</th>
            <th>CITY</th>
            <th>TITLE</th>
            <th>TEXT</th>
            <th>IMG</th>
            <th>HOTEL</th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($description as $data) {?>
            <tr>
                <td><?=$data['id'];?></td>
                <td><?=$data['country'];?></td>
                <td><?=$data['city'];?></td>
                <td><?=$data['title'];?></td>
                <td class="text"><?=$data['text'];?></td>
                <td><?=$data['img'];?></td>
                <td><?=$data['hotel'];?></td>
                <td><a href="update.php?id=<?=$data['id'];?>&table_name=<?=$table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?=$data['id'];?>&table_name=<?=$table_name;?>">delete</td>
            </tr>
        <?php }?>
    </tbody>
</table>
<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?=$table_name;?>">
    <div class="form__item">
        <p>COUNTRY</p>
        <input type="text" name="country">
    </div>
    <div class="form__item">
        <p>CITY</p>
        <input type="text" name="city">
    </div>
    <div class="form__item">
        <p>TITLE</p>
        <input type="text" name="title">
    </div>
    <div class="form__item">
        <p>TEXT</p>
        <textarea name="text"></textarea>
    </div>
    <div class="form__item">
        <p>IMG</p>
        <input type="text" name="img">
    </div>
    <div class="form__item">
        <p>HOTEL</p>
        <input type="text" name="hotel">
    </div>
    <div class="form__item">
        <button type="submit">add new data</button>
    </div>
</form>
    



<table class="table">
    <h1><?= $table_name = 'resorts';?></h1>
    <thead>
        <tr>
	        <th>ID</th>
            <th>COUNTRY</th>
            <th>TITLE</th>
            <th>SURF</th>
            <th>TIDE</th>
            <th>WIND</th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resorts as $data) {?>
            <tr>
                <td><?= $data['id'];?></td>
                <td><?= $data['country'];?></td>
                <td><?= $data['title'];?></td>
                <td><?= $data['surf'];?></td>
                <td><?= $data['tide'];?></td>
                <td><?= $data['wind'];?></td>
                <td><a href="update.php?id=<?= $data['id'];?>&table_name=<?= $table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?= $data['id'];?>&table_name=<?= $table_name;?>">delete</td>
            </tr>
        <?php }?>
    </tbody>
</table>
<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?= $table_name;?>">
    <div class="form__item">
        <p>COUNTRY</p>
        <input type="text" name="country">
    </div>
    <div class="form__item">
        <p>TITLE</p>
        <input type="text" name="title">
    </div>
    <div class="form__item">
        <p>SURF</p>
        <input type="text" name="surf">
    </div>
    <div class="form__item">
        <p>TIDE</p>
        <input type="text" name="tide">
    </div>
    <div class="form__item">
        <p>WIND</p>
        <input type="text" name="wind">
    </div>
    <div class="form__item">
        <button type="submit">add new data</button>
    </div>
</form>




<table class="table">
    <h1><?= $table_name = 'airlines';?></h1>
    <thead>
        <tr>
	        <th>ID</th>
            <th>COUNTRY</th>
            <th>AIRLINE</th>
            <th>DISTANCE</th>
            <th>TIME</th>
            <th>PRICE</th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($airlines as $data) { ?>
            <tr>
                <td><?= $data['id'];?></td>
                <td><?= $data['country'];?></td>
                <td><?= $data['airline'];?></td>
                <td><?= $data['distance'];?></td>
                <td><?= $data['time'];?></td>
                <td><?= $data['price'];?></td>
                <td><a href="update.php?id=<?= $data['id'];?>&table_name=<?= $table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?= $data['id'];?>&table_name=<?= $table_name;?>">delete</td>
            </tr>
            <?php }?>

            <tr>
                <th>total:</th>
                <th colspan="4"></th>
                <th>
                    <?php foreach ($sum_price_airlines as $data) {?><?= $data['SUM(`price`)'];?>$ <?php }?>
                </th>
                <th colspan="4"></th>
            </tr>
            <tr>
                <th>the biggest price:</th>
                <th>
                    <?php foreach ($max_price_country_airlines as $data) {?><?= $data['country'];?><?php }?>
                </th>
                <th colspan="3"></th>
                <th>
                    <?php foreach ($max_price_airlines as $data) {?><?= $data['price'];?>$<?php }?>
                </th>
                <th colspan="4"></th>
            </tr>
            <tr>
                <th>the smallest price:</th>
                <th>
                    <?php foreach ($min_price_country_airlines as $data) {?><?= $data['country'];?><?php }?>
                </th>
                <th colspan="3"></th>
                <th>
                    <?php foreach ($min_price_airlines as $data) {?><?= $data['price'];?>$<?php }?>
                </th>
                <th colspan="4"></th>
            </tr>
            <form class="form" action="config/db.php" method="post">
                <input type="radio" name="sort" value="ASC">
                <label>ASC</label>
                <input type="radio" name="sort" value="DESC">
                <label>DESC</label>
                <input type="radio" name="sort" value="DEFAULT">
                <label>DEFAULT</label>
                <button type="submit">SORTING</button>
            </form>
    </tbody>
</table>

<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?= $table_name;?>">
    <div class="form__item">
        <p>COUNTRY</p>
        <input type="text" name="country">
    </div>
    <div class="form__item">
        <p>AIRLINE</p>
        <input type="text" name="airline">
    </div>
    <div class="form__item">
        <p>DISTANCE</p>
        <input type="text" name="distance">
    </div>
    <div class="form__item">
        <p>TIME</p>
        <input type="text" name="time">
    </div>
    <div class="form__item">
        <p>PRICE</p>
        <input type="text" name="price">
    </div>
    <div class="form__item">
        <button type="submit">add new data</button>
    </div>
</form>




<table class="table">
    <h1><?= $table_name = 'hotel';?></h1>
    <thead>
        <tr>
	        <th>ID</th>
            <th>COUNTRY</th>
            <th>CITY</th>
            <th>HOTEL</th>
            <th>RATING</th>
            <th colspan="4"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($hotel as $data) {?>
            <tr>
                <td><?= $data['id'];?></td>
                <td><?= $data['country'];?></td>
                <td><?= $data['city'];?></td>
                <td><?= $data['hotel'];?></td>
                <td><?= $data['rating'];?></td>
                <td></td>
                <td></td>
                <td><a href="update.php?id=<?= $data['id'];?>&table_name=<?= $table_name;?>">update</a></td>
                <td><a href="vendor/delete.php?id=<?= $data['id'];?>&table_name=<?= $table_name;?>">delete</td>
            </tr>
        <?php }?>
    </tbody>
</table>
<h3>ADD NEW DATA</h3>
<form class="form" action="vendor/create.php" method="post">
    <input type="hidden" name="table_name" value="<?= $table_name;?>">
    <div class="form__item">
        <p>COUNTRY</p>
        <input type="text" name="country">
    </div>
    <div class="form__item">
        <p>CITY</p>
        <input type="text" name="city">
    </div>
    <div class="form__item">
        <p>HOTEL</p>
        <input type="text" name="hotel">
    </div>
    <div class="form__item">
        <p>RATING</p>
        <input type="text" name="rating">
    </div>
    <div class="form__item">
        <button type="submit">add new data</button>
    </div>
</form>








<script>
        let flag = false;
        document.onkeydown = function(event) {
            if (event.code == 'AltLeft') flag = true;
            if (event.code == 'KeyA' && flag){
                flag = false;
                window.location.href = 'index.php';
            };
        }
</script>


</body>
</html>




