<?php
include('db.php');

if(isset($_POST['delete'])){
    $item = $_POST['item'];

    $sql = "DELETE FROM itens where itens = '$item'";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('Location: sistema.php');
    } else {
        echo 'error';
    }
}

?>
