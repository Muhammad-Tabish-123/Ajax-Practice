<?php
$html="";
include "connection.php";
$selectQ="SELECT * FROM products";
$result=mysqli_query($conn,$selectQ);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $html .="<div class='sub-grid-item sub-item1'>
        <div class='card'>
          <input ";
           if($row['inCart']) $html .= ' checked '; 
           $html .="type='checkbox' name='pItemId' id='pItemId' class='checkBoxes' value='";
           $html .= $row['pid'];
           $html .="'>
          <div id='card-img-container'>
          <img src='images/produts/"; 
          $html .=$row['pimage'] . '\''; 
          $html .="alt='Avatar'>
          </div>
          <div class='container'>
            <h2 style='margin:10px 0px;'><b id='price'>$";
           if($row['pQuantity']>0)
            $html .= $row['price']*$row['pQuantity'];
            else $html .= $row['price'];
            $html .="</b></h4> 
            <p>";
             $html .= $row['pname'];
            $html .="</p> 
            <select name='pItemQuantity' id='pItemQuantity' class='selectBox'>
              <option ";
                if($row['pQuantity']==0) $html .=' selected '; 
               $html .="value='0'  disabled>--Select Quantity--</option>
              <option "; 
              if($row['pQuantity']==1) $html .=' selected '; 
              $html .="value='1'>1</ >
              <option ";
               if($row['pQuantity']==2) $html .=' selected '; 
               $html .="value='2'>2</option>
              <option "; 
               if($row['pQuantity']==3) $html .=' selected '; 
              $html .="value='3'>3</option>
              <option ";
               if($row['pQuantity']==4) $html .=' selected '; 
               $html .="value='4'>4</option>
              <option "; 
              if($row['pQuantity']==5) $html .=' selected '; 
              $html .="value='5'>5</option>
              <option "; 
               if($row['pQuantity']==6) $html .=' selected '; 
               $html .="value='6'>6</option>
            </select>
          </div>
        </div>
      </div>
";
    }
}
echo $html;
mysqli_close($conn);
?>