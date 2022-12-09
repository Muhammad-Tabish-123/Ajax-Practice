<?php 
include 'connection.php';
$selectQ="SELECT * FROM products";
$result=mysqli_query($conn,$selectQ);
if(mysqli_num_rows($result)>0){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4698c91ecf.js" crossorigin="anonymous"></script>
    <title>products</title>
</head>
<body>  
  <!-- <form action="cart.html" method="get"> -->

    <div class="grid-container">
      <!-- <div w3-include-html="header.html"></div> -->
      <div class="grid-item item1">
        <div class="flex-container flex-1">
            <div class="search-container" style="flex-grow: 1;">
            <h1 style="color: white;">Phone Guys</h1>  
             </div>
            <div class="cart-container">
              <a href="cart.php">
              <span class="fa-layers fa-fw" >
                <!-- <input style="font-family: FontAwesome; cursor: pointer;" class="fas fa-cart-plus fa-lg icon btn-transparent" type="submit" value="&#xf217"> -->
                <i class="fas fa-cart-plus fa-lg icon"></i>
                <!-- <span class="fa-layers-counter" style="background:Tomato">10</span> -->
              </span>
              </a>
            </div>

            
          </div>
        
    </div>
        
        <div class="grid-item item3"></div>  
        <div class="grid-item item4">
          
          <div class="sub-grid-container">
          <?php 
          while($row=mysqli_fetch_assoc($result)){
          ?>
          <div class="sub-grid-item sub-item1">
              <div class="card">
                <input <?php if($row['inCart']) echo "checked";?> type="checkbox" name="pItemId" id="pItemId" class="checkBoxes" value="<?php echo $row['pid'];?>">
                <div id="card-img-container">
                <img src="images/produts/<?php echo $row['pimage'];?>" alt="Avatar">
                </div>
                <div class="container">
                  <h2 style="margin:10px 0px;"><b id="price">$<?php if($row['pQuantity']>0)echo $row['price']*$row['pQuantity'];else echo $row['price'];?></b></h4> 
                  <p><?php echo $row['pname'];?></p> 
                  <select name="pItemQuantity" id="pItemQuantity" class="selectBox">
                    <option <?php if($row['pQuantity']==0) echo"selected";?> value="0"  disabled>--Select Quantity--</option>
                    <option <?php if($row['pQuantity']==1) echo"selected";?> value="1">1</option>
                    <option <?php if($row['pQuantity']==2) echo"selected";?> value="2">2</option>
                    <option <?php if($row['pQuantity']==3) echo"selected";?> value="3">3</option>
                    <option <?php if($row['pQuantity']==4) echo"selected";?> value="4">4</option>
                    <option <?php if($row['pQuantity']==5) echo"selected";?> value="5">5</option>
                    <option <?php if($row['pQuantity']==6) echo"selected";?> value="6">6</option>
                  </select>
                </div>
              </div>
            </div>
            <?php 
            }
             ?>
          

            
           
                    
            
          </div>
          
      </div>
        <!-- <div class="grid-item">5</div>
        <div class="grid-item">6</div>  
        <div class="grid-item">7</div>
        <div class="grid-item">8</div>
        <div class="grid-item">9</div>   -->
      </div>
      

    <!-- </form> -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">

      function loadData() {
          $.ajax({
            url:"ajax-load.php",
            type: "POST",
            success: function(data){
              $(".sub-grid-container").html(data);
            }
          })
        }
        function ajaxUpdateCheckBox(pid,value) {
          $.ajax({
            url:"ajax-update-checkbox.php",
            type: "POST",
            data:{p_id:pid,p_value:value},
            success: function(data){
              if(data==1){
                loadData();
              }else{
                alert(`can not update TO ${value}`);
              }
            }
          })
        }
      $(document).ready(function(){

        loadData();

      });
      $(document).on('change',".checkBoxes",function(e){
        // console.log("Dynamic data");
          let pid=e.target.value;

          if(e.target.checked) {
            // console.log("Is chhecked");
            ajaxUpdateCheckBox(pid,1);
        }
        else {
          // console.log("Not chhecked");
          ajaxUpdateCheckBox(pid,0);
        }
      });

      $(document).on('change',".selectBox",function(e){
        // console.log("Dynamic data");
        // console.log(e.target);
        let pQuantity=e.target.value;
        const parentWithClass = e.target.closest('.card'); 
        // console.log(parentWithClass);
        let pid=parentWithClass.querySelector('#pItemId').value;

        $.ajax({
            url:"ajax-update-quantity.php",
            type: "POST",
            data:{p_id:pid,p_quantity:pQuantity},
            success: function(data){
              if(data==1){
                loadData();
              }else if(data==2){
                alert(`Upadate error`);
              }
              else{
                alert(`Please Select item first`);
              }
            }
          })

      });
    </script>
</body>
</html>
<?php 
}
mysqli_close($conn);
 ?>