<?php
$name = $_POST['name'];
$email = $_POST['email'];
$passwd  = md5($_POST['passwd']);
$data = $_POST['data'];

 
$conexao = mysqli_connect() or print (mysqli_error($conexao));

$query = "INSERT INTO customers (name,email,passwd,data) VALUES ('$name','$email', '$passwd','$data')";

if (mysqli_query($conexao, $query)) {  
    header("Location: login.php?msg=OK");
} else {
    header("Location: login.php?msg=ERRO");
}

?>
