<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        align-content:center;
        height: 90vh;
    }
    form {
       
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<h1>PASSWORD</h1>
<form action="checking.php" method="post">
    <input name="input_PW" type="password">
    <button type="submit">enter</button>
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

