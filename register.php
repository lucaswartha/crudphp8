<?php 
session_start();
include("db.php");

$nome = mysqli_real_escape_string($conn, trim($_POST['username']));
$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$password = mysqli_real_escape_string($conn, trim(md5($_POST['password'])));
        
$sql = "SELECT count(*) as total from usuarios where nomeusuario = '$nome'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: registrar.php');
    exit;
}

$sql = "INSERT INTO usuarios(nomeusuario, email, senha) values ('$nome','$email','$password')";

if($conn->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conn->close();
header('Location: index.php');
exit;

?>