<?php
include("db.php");

if(isset($_POST['insert'])){
    $nameItem = $_POST['nameItem'];
    $priceItem = $_POST['priceItem'];
    $descItem = $_POST['descItem'];    

    $sql = "INSERT INTO itens(itens,valor,descricao) values ('$nameItem','$priceItem','$descItem')";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('Location: sistema.php');
    } else {
        die(mysqli_error($conn));
    }


}

?>