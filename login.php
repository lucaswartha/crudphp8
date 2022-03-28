<?php
session_start();

if(isset($_POST['login'])){
    include('db.php');
    if(empty($_POST['email']) || empty($_POST['password'])){
        header('Location: index.php');
        exit();
    }
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $query = "SELECT id, email FROM usuarios where email = '$email' and senha = '$password'";
    $result = mysqli_query($conn, $query);
    
    $row = mysqli_num_rows($result);

    // $selectUser = "SELECT nomeusuario from usuarios where email = '$email' and senha = '$password'";
    


    if($row == 1) {
        $_SESSION['email'] = $email;
        header('Location: sistema.php');
        exit();
    } else {
        header('Location: index.php');
        exit();
    }
}
?>