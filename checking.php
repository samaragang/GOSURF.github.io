<?php 

$input_PW = $_POST['input_PW'];
$password = 'admin';



if($password == $input_PW ) {
    header('Location: ../admin.php');
} else {
    header('Location: ../password.php');
}
?>