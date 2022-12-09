<?php
include "connection.php";
$pid=$_POST['p_id'];
$pdata=$_POST['p_value'];
$updateQ="UPDATE products SET inCart = {$pdata} WHERE pid={$pid};";
$updateQ2="UPDATE products SET pQuantity = 0 WHERE pid={$pid};";
if(mysqli_query($conn,$updateQ) && mysqli_query($conn,$updateQ2)){
    echo 1;
}else{
    echo 0;
}
mysqli_close($conn);
?>