<?php
include('db.php');

if(isset($_POST['edit'])){
    $item = $_POST['nameItem'];
    $valor = $_POST['priceItem'];
    $desc = $_POST['descItem'];

    $sql = "UPDATE itens set itens = '$item', valor = '$valor', descricao = '$desc'";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('Location: sistema.php');
    } else {
        echo 'error';
    }
}
 
?>
