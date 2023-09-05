<!DOCTYPE html>
<html>
    <head>
        <title>FOOD ORDER FORM</title>
<link rel="stylesheet" type="text/css" href="formCssFile.css">
<link rel="stylesheet" href="css\bootstrap.css">
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
        
        body{
        font-size: 20pt;
        
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
            font-family: Garamond;
          
                background-color: rgb(233, 241, 236);
                
            
        }
       
        </style>
    </head>

<body>
    <h1 id="h" class=display-6 >Alex G.</h1>
    <nav >
    
        
          
          <li><a href="homee.html">Home</a></li>
          <li><a href="login.html">Log in</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="about_us.html">About Us</a></li>
          <li><a href="online order.html">Order Now</a></li>
          <li><a href="menu.html">Menus</a></li>
        
        </nav> 
    <div class="container">
    <h2>==========Price list==========</h2> 
    <div class="row ">
        <div class="col">
    <table width="60%" > 
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
            <table width="60%"> 
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
            <table width="60%" > 
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
    <select id="item1">
    <option value="1">--Select Item--</option> 
    <option value="BBQ">BBQ chicken</option> 
    <option value="Chicken Pizza">Chicken Pizz</option> 
    <option value="Spaghetti">Spaghetti</option> 
    <option value="Burger">Chicken Burger</option> 
    <option value="salad">Green Salad</option> 
    </select>
    </td> 
    <td><input type="number" value="0" id="q1"></td>
    <td><input type="text" id="p1"></td>
    </tr>   
    <tr>
    <td>Item 2:</td>
    <td>
    <select id="item2"> 
    <option value="1">--Select Item--</option> 
    <option value="1">--Select Item--</option> 
    <option value="BBQ">BBQ chicken</option> 
    <option value="Chicken Pizza">Chicken Pizz</option> 
    <option value="Spaghetti">Spaghetti</option> 
    <option value="Burger">Chicken Burger</option> 
    <option value="salad">Green Salad</option>  
    </select>
    </td>
    <td><input  type="number" value="0" id="q2"></td>  
    <td><input type="text"  id="p2"></td>  
    </tr> 
    <tr>
    <td>Item 3:</td>
    <td><select id="item3">  
        <option value="1">--Select Item--</option> 
        <option value="BBQ">BBQ chicken</option> 
        <option value="Chicken Pizza">Chicken Pizz</option> 
        <option value="Spaghetti">Spaghetti</option> 
        <option value="Burger">Chicken Burger</option> 
        <option value="salad">Green Salad</option>  
    </select>
    </td>
    <td><input type="number" value="0" id="q3"></td>
    <td><input type="text"  id="p3"></td> 
    </tr> 
    <tr>
    <td>Item 4:</td>
    <td><select id="item4">   
        <option value="1">--Select Item--</option> 
        <option value="BBQ">BBQ chicken</option> 
        <option value="Chicken Pizza">Chicken Pizz</option> 
        <option value="Spaghetti">Spaghetti</option> 
        <option value="Burger">Chicken Burger</option> 
        <option value="salad">Green Salad</option>   
    </select>
    </td>
    <td><input type="number" value="0" id="q4"></td>
    <td><input type="text"  id="p4"></td> 
    </tr>    
    <tr>
    <td></td> 
    <td></td> 
    <td><input type="submit" class="button" value="Create Bill" onclick=createBill()></td>
    <td><input type="reset" class="button" value="Clear"></td>
    </tr>
    </table>
    
    
    </div>
    <div class="footer">
        <iframe src="footer.html" style="width:100% ;height:410px;"></iframe>
    </div>
    
</body>
</html>
