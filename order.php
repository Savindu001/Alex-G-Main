<?php
   
  
   $t1=0;
   $t2=0;
   $t3=0;
   $t4=0;   
   $tot=0;

   if(isset($_GET['bill']))
   {
       $lh="127.0.0.1";
      $pw="root";
      $w="";
      $db="alexg";
      $con=mysqli_connect($lh,$pw,$w,$db);
      
      $q1=$_GET['q1'];
      $q2=$_GET['q2'];
      $q3=$_GET['q3'];
      $q4=$_GET['q4'];
      
      $item1=$_GET['item1'];
      $item2=$_GET['item2'];
      $item3=$_GET['item3'];
      $item4=$_GET['item4'];
     
      $i1=0;
      $i2=0;
      $i3=0;
      $i4=0;
   
   $resultAll = mysqli_query($con, "SELECT * from item where p_name='$item1' ");
   if(!$resultAll){
       die(mysqli_error($con));
   }
   
   if (mysqli_num_rows($resultAll) > 0) {
       while($rowData = mysqli_fetch_array($resultAll)){
             $i1= $rowData["unit_price"].'<br>';
            
       }
   }
   $resultAll = mysqli_query($con, "SELECT * from item where p_name='$item2' ");
   if(!$resultAll){
       die(mysqli_error($con));
   }
   
   if (mysqli_num_rows($resultAll) > 0) {
       while($rowData = mysqli_fetch_array($resultAll)){
             $i2= $rowData["unit_price"].'<br>';
       }
   }
   $resultAll = mysqli_query($con, "SELECT * from item where p_name='$item3' ");
   if(!$resultAll){
       die(mysqli_error($con));
   }
   
   if (mysqli_num_rows($resultAll) > 0) {
       while($rowData = mysqli_fetch_array($resultAll)){
             $i3= $rowData["unit_price"].'<br>';
       }
   }
   $resultAll = mysqli_query($con, "SELECT * from item where p_name='$item4' ");
   if(!$resultAll){
       die(mysqli_error($con));
   }
   
   if (mysqli_num_rows($resultAll) > 0) {
       while($rowData = mysqli_fetch_array($resultAll)){
             $i4= $rowData["unit_price"].'<br>';
           
       }
   }
   
   
   $t1=(int)$i1*$q1;
   $t2=(int)$i2*$q2;
   $t3=(int)$i3*$q3;
   $t4=(int)$i4*$q4;
   
   $tot=$t1+$t2+$t3+$t4;
   
   
   
   $sql="INSERT into order values('$item1','$item2','$item3,'$item4','$tot')";
   $con->query($sql);
   
   } ?> 
   
   <!DOCTYPE html>
   <html>
       <head>
           <title>FOOD ORDER FORM</title>
   <link rel="stylesheet" type="text/css" href="formCssFile.css">
       
   <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
           <meta name="viewpoint" content="width=device-width,initial-scale=1">
           <link rel="stylesheet" href="header.css">
        
   <script type="text/javascript" src="scriptfile.js"> </script>
           <style>
              
           h2{
               text-align: center;
           }
           th{
               text-align:left;
               
           
           }
           label{
               background-color: #4CAF50; /* Green */
               border: none;
               color: white;
               padding: 15px 32px;
               text-align: center;
               text-decoration: none;
               display: inline-block;
               font-size: 16px;
           }
           
           
           .button {
               background-color: #4CAF50; /* Green */
               border: none;
               color: white;
               padding: 15px 32px;
               text-align: center;
               text-decoration: none;
               display: inline-block;
               font-size: 16px;
             }
           
           /*  div {
               text-align: center;
               border-style: solid;
               margin-left: 300px;
               width:60%
           }
           */
           body{
               font-size: medium;
               font-family: Georgia;
               font-size: 15pt;
                  
                   
               
           }
          
           </style>
       </head>
   
   <body>
       <h1 id="h" class=display-6 >Alex G.</h1>
       <nav >
       
           
             
             <li><a href="homee.php">Home</a></li>
             <li><a href="login.php">Log in</a></li>
             <li><a href="contact.php">Contact Us</a></li>
             <li><a href="about_us.php">About Us</a></li>
             <li><a href="order.php">Order Now</a></li>
             <li><a href="menu.php">Menus</a></li>
           
           </nav> 
       <div class="container">
       <br><h2>==========Price list==========</h2> <br>
       <div class="row ">
           <div class="col">
       <table width="74%" > 
           <tr>  
           <th>Food</th> 
           <th></th>
           <th>Price(Rs.)</th>
           </tr> 
           <tr>
           <td>BBQ Chicken</td> 
           <td> - </td>
           <td>700.00</td> 
           </tr> 
           <tr>
           <td>Chicken Pizza</td>
           <td> - </td> 
           <td>1500.00</td> 
           </tr>
           <tr> 
           <td>Speghetti</td>
           <td> - </td>  
           <td>1000.00</td>
           </tr> 
           <tr>  
           <td>Chicken Burger</td>
           <td> - </td> 
           <td>900</td> 
           </tr>  
           <tr>
           <td>Carpacio</td>
           <td> - </td> 
           <td>1700.00</td>
           </tr>
           <tr>
           <td>Italian Pasta</td>
           <td> - </td> 
           <td>800</td>
           </tr>
           <tr>
           <td>Green Salad</td>
           <td> - </td> 
           <td>800</td>
           </tr>
           <tr>
           <td>Sandwiches</td>
           <td> - </td> 
           <td>660</td>
           </tr>
           
          
           </table>
           </div>
           <div class="col">
               <table width="72%"> 
                   <tr>  
                   <th>Beverages</th> 
                   <th></th>
                   <th>Price(Rs.)</th>
                   </tr> 
                   <tr>
                   <td>Coca Cola</td> 
                   <td> - </td>
                   <td>200.00</td> 
                   </tr> 
                   <tr>
                   <td>Sprite</td>
                   <td> - </td> 
                   <td>150.00</td> 
                   </tr>
                   <tr> 
                   <td>Pepsi</td>
                   <td> - </td>  
                   <td>100.00</td>
                   </tr> 
                   <tr>  
                   <td>Milk Shake</td>
                   <td> - </td> 
                   <td>900</td> 
                   </tr>  
                   
                   </table>
           </div>
           <div class="col">
               <table width="72%" > 
                   <tr>  
                   <th>Desserts</th> 
                   <th></th>
                   <th>Price(Rs.)</th>
                   </tr> 
                   <tr>
                   <td>Chococlate Pudding</td> 
                   <td> - </td>
                   <td>800.00</td> 
                   </tr> 
                   <tr>
                   <td>Lava Cake</td>
                   <td> - </td> 
                   <td>500.00</td> 
                   </tr>
                   <tr> 
                   <td>Ice Cream</td>
                   <td> - </td>  
                   <td>300.00</td>
                   </tr> 
                   <tr>  
                   <td>Pan Cakes</td>
                   <td> - </td> 
                   <td>400</td> 
                   </tr>  
                  
                   </table>
           </div>
       </div>
      
           <br>
           <form action="#" method="GET">
       <table width="80%" >
       <tr>
       <th>Food Item</th>
       <th> </th>
       <th>Quantity</th>
       <th>Price</th> 
       </tr>
       <tr> 
       <td>Item 1:</td> 
       <td>
       <select id="item1"  name="item1">
       <option value="1">--Select Item--</option> 
       <option value="BBQ Chicken">BBQ chicken</option> 
       <option value="Chicken Pizza">Chicken Pizza</option> 
       <option value="Spaghetti">Spaghetti</option> 
       <option value="Chicken Burger">Chicken Burger</option> 
       <option value="Green Salad">Green Salad</option> 
       </select>
       </td> 
       <td><input type="number" value="0" id="q1" name="q1"></td>
       <td><input type="text" id="p1" value=" <?php echo $t1; ?>"> 
       </td>
       </tr>   
       <tr>
       <td>Item 2:</td>
       <td>
       <select id="item2" name="item2"> 
       <option value="1">--Select Item--</option> 
       <option value="1">--Select Item--</option> 
       <option value="BBQ Chicken">BBQ chicken</option> 
       <option value="Chicken Pizza">Chicken Pizza</option> 
       <option value="Spaghetti">Spaghetti</option> 
       <option value="Chicken Burger">Chicken Burger</option> 
       <option value="Green Salad">Green Salad</option>  
       </select>
       </td>
       <td><input  type="number" value="0" id="q2" name="q2"></td>  
       <td><input type="text"  id="p2" value="
       <?php echo $t2;  ?> "></td>  
       </tr> 
       <tr>
       <td>Item 3:</td>
       <td><select id="item3" name="item3">  
           <option value="1">--Select Item--</option> 
           <option value="BBQ Chicken">BBQ chicken</option> 
           <option value="Chicken Pizza">Chicken Pizza</option> 
           <option value="Spaghetti">Spaghetti</option> 
           <option value="Chicken Burger">Chicken Burger</option> 
           <option value="Green Salad">Green Salad</option>  
       </select>
       </td>
       <td><input type="number" value="0" id="q3" name="q3"></td>
       <td><input type="text"  id="p3" value="
       <?php echo $t3; ?> "></td> 
       </tr> 
       <tr>
       <td>Item 4:</td>
       <td><select id="item4" name="item4">   
           <option value="1">--Select Item--</option> 
           <option value="BBQ Chicken">BBQ chicken</option> 
           <option value="Chicken Pizza">Chicken Pizza</option> 
           <option value="Spaghetti">Spaghetti</option> 
           <option value="Chicken Burger">Chicken Burger</option> 
           <option value="Green Salad">Green Salad</option>   
       </select>
       </td>
       <td><input type="number" value="0" id="q4" name="q4"></td>
       <td><input type="text"  id="p4" value="
       <?php echo $t4; ?> "></td> 
       </tr>    
       <tr>
       <td></td> 
       <td></td> 
       <td><input type="submit" class="button" value="Create Bill" name="bill"></td>
       <td><input type="reset" class="button" value="Clear"></td>
       </tr>
       
       </table> <br>
       </form>
       <center> <label>Total </label>
       <input type="text" 
       value='<?php echo $tot; ?> ' > </center>
      
       <br> <br>
       </div>
       <div class="footer">
           <iframe src="footer.php" style="width:100% ;height:410px;"></iframe>
       </div>
        
   </body>
   
   </html>