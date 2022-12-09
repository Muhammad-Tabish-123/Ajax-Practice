<?php
include "connection.php";
$pid=$_POST['p_id'];
$pdata=$_POST['p_quantity'];
$selectQ="SELECT * FROM products WHERE pid={$pid}";
$result=mysqli_query($conn,$selectQ);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        if($row['inCart']==1){
          $updateQ="UPDATE products SET pQuantity = {$pdata} WHERE pid={$pid};";
            if(mysqli_query($conn,$updateQ)){
            echo 1;
            }else{
                echo 2;
            }
}
else{
        echo 0;
    }
}}
mysqli_close($conn);
?>