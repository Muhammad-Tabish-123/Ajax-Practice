<?php
include "connection.php";
$selectQ="SELECT * FROM products WHERE inCart=1";
$result=mysqli_query($conn,$selectQ) or die('Error Select Query');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4698c91ecf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Cart</title>
</head>
<body>
    <div class="grid-container">
        <!-- <div w3-include-html="header.html"></div> -->
        <div class="grid-item item1">
          <div class="flex-container flex-1">
              <div class="search-container" style="flex-grow: 1;">
              <h1 style="color: white;">Phone Guys</h1>  
               </div>
              
            </div>
          
      </div>

          
          </div>
<?php if(mysqli_num_rows($result)>0){
  $total=0; 
  while($row=mysqli_fetch_assoc($result)){
    if($row['pQuantity']==0)
    $total+=$row['price'];
    else
    $total+=$row['price']*$row['pQuantity'];
  }
  ?>
          <div id="buy-container">
            <div id="heading-conatiner"><h1>Total Bill</h1></div>
            <div id="total-container">
              <h2><span>$</span><?php echo $total;?></h2>
              <form action="">
                <button class="btn" id="buy-button" disabled>Thank you for shopping with us</button>
              </form>
            </div>
          </div>

          <div id="all-list-container">
            <?php
            $result=mysqli_query($conn,$selectQ) or die('Error Select Query'); 
            while($row=mysqli_fetch_assoc($result)){
              // echo "data";
            
              ?>
          <div class="flex-container cart-list-conatainer">
            <div class="cart-list-img-conatainer">
              <!-- <p>smaswas</p> -->
              <img class="cart-list-img" src="images/produts/<?php echo $row['pimage'];?>" alt="">
            </div>
            <div>
              <p class="cart-list-ptitle"><?php echo $row['pname'];?></p>
              <p class="cart-list-ptitle-gray">some: jasnasjakawd</p>
              <!-- <p><span class="cart-list-smallbox-heading"><b>abcdsf: </b></span><span class="cart-list-smallbox">132</span><span class="cart-list-circle-heading"><b> Lieer:</b></span><span class="dot"></span></p> -->
            </div>
            <div>
              <!-- <form action=""> -->
                <!-- <button class="btn-minums">_</button> -->
                <input disabled class="quantity-box" type="text" name="" id="" value="<?php if ($row['pQuantity']>0) echo $row['pQuantity']; else echo
                1;?>">
                <!-- <button class="btn-plus">+</button> -->
              <!-- </form> -->
            </div>
            <div>
              <!-- <button class="cart-cancel-btn btn cart-cancel-btn-margin">X</button> -->
              <p class="item-price">$<?php if ($row['pQuantity']>0) echo $row['price']*$row['pQuantity']; else echo $row['price'];?></p>
            </div>
          </div>

<?php } ?>


          

         



        </div>
        <?php
      }
      else{
        echo "<h1>Nothing to show</h1>";
      }
     $updateQ="UPDATE products SET inCart = 0, pQuantity = 0";
     mysqli_query($conn,$updateQ) or die('Value removing error');
     mysqli_close($conn);
      ?>
</body>
</html>