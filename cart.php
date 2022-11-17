<?php
  session_start();
  ob_start();
?>
<!Doctype html>
<html>
<head>
    <title>Let's Decor</title>
    
</head>
<style type="text/css">
    *{
        margin: 0;
        padding: 0;
        font-family: Century Gothic;
        font-size: 17px;
    }

    header{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(sy.jpg);
        height: 100vh;
        background-size: cover;
        background-position: center;
    }

    ul{
        float: right;
        list-style-type: none;
        margin-top: 25px;
        padding-right: 25px;
    }

    ul li{
        display: inline-block;
    }

    ul li a{
        text text-decoration: none;
        color: #fff;
        padding: 5px 10px;
        border: 1px solid transparent;
        transition: 0.6s ease;

    }

    ul li a:hover{
        background-color: #fff;
        color: #000;
    }
    ul li.active a{
        background-color: #fff;
        color: #000;
    }
    .ex1{

    }
    .logo1 img{
        padding-top: 10px;
        padding-left: 10px;
        float: left;
        width: 60px;
        height: auto;
    }

    .title{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }

    .title h1{
        color: #fff;
        font-size: 70px;
    }
    .heading{
        position: absolute;
        top: 12%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: ;
    }

    .heading h1{
        color: #fff;
        font-size: 50px;
        
    }

    .button{
        position: absolute;
        top: 62%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
    .btn{
        border: 1px solid #fff;
        padding: 10px 30px;
        color: #fff;
        text-decoration: none;
        transition: 0.6s ease;
    }
    .btn1:hover{
        background-color: #54575c;
        color: #fff;
    }
    .btn2:hover{
        background-color: #54575c;
        color: #fff;
    }
    .login-box{
        background-color: white;
        
        top: 50%;
        left: 50%;
        width: 50%;
        height: auto;
        position: absolute;
        transform: translate(-50%,-50%);
        border: 3px solid #333333;
        padding: 40px;
        opacity: .6;
        padding-bottom: 50px;
        transition-delay:2s;

    }
    .login-box:hover{
        opacity: .8;
        transition-delay:0s ;
    }
    .btn1{
        width: 100px;
        height: 33px;
        border: solid black;
        border-width: 1px;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block; 
        position: absolute;
        margin-top: 10px; 
        margin-left: -105px;  
        background-color: #fff;
        color: #000;
        font-weight: bold;
    }
    .btn2{
        width: 100px;
        height: 33px;
        border: solid black;
        border-width: 1px;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block; 
        position: absolute;
        margin-top: 10px; 
        margin-left: 240px; 
        background-color: #fff;
        color: #000;   
         font-weight: bold;     
    }
    input{
        width: 300px;
        height: 20px;
        margin: 5px;
        border: solid black;
        border-width: 1px;
        padding-left: 7px;
        padding-right: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    p{
        color: black;
    }
    h3{
        font-size: 30px;
    }
    ::placeholder { 
        color: black;
        opacity: 1; 
    }
    td{
        text-align: center;
    }

</style>
<body>
    <header>
        <div clas="main">
            <div class="logo1">
                <img src="logo1.png">
            </div>
         <div class="heading">
      
        </div>
            <ul>   
                <li ><a href="customerpage.php">Customer Home</a></li>   
                <li><a href="customerproductdetail.php">Product Detail</a></li>
                <li class="active"><a href="cart.php">Cart</a></li>
                <li><a href="customerlogout.php">Logout</a></li>               
            </ul>
        </div>
    </header>
    <div class="login-box">
        <center><h3>Cart</h3></center><br>
        <hr style="border:1px solid"><br><br>
        <table>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <?php
                $sum=0;
                include('connection.php');
                $sql = "SELECT * FROM cart where Emailid='".$_SESSION["Emailid"]."'";
                $result = mysqli_query($conn , $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $total=$row["Price"]*$row["Quantity"];
                    $sum+=$total;
                    echo '<tr>
                            <td width="200px">'.$row["ProductName"].'</td>
                            <td width="200px">'.$row["Price"].'</td>
                            <td width="200px">'.$row["Quantity"].'</td>
                            <td width="200px">'.$total.'</td>
                        </tr>';
                }
                echo '<tr><td><br></td></tr><tr><td colspan="4"><hr style="border:1px solid"></td></tr><tr><td><br></td></tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><strong>Grand Total</strong></td>
                        <td>'.$sum.'</td>
                    </tr>';
            ?>

        </table>
        
    </div>
</body>
</html>