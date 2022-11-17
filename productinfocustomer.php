<?php
  session_start();
  ob_start();
?>

<?php
    $temp=$_GET['id'];
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
        background-position: center
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
    .btn1{
        width: 200px;
        height: 33px;
        border: solid black;
        border-width: 1px;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block; 
        background-color: #fff;
        color: #000;        
    }
    .btn1:hover{
        background-color: #54575c;
        color: #fff;
    }
    .btn2{
        width: 150px;
        height: 33px;
        border: solid black;
        border-width: 1px;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block; 
        background-color: #fff;
        color: #000;        
    }
    .btn2:hover{
        background-color: #54575c;
        color: #fff;
    }
    .login-box{
        background-color: white;

        width: 400px;
        height: 290px;
        border: 3px solid #333333;
        padding: 40px 40px;
        opacity: .6;
        margin-right: 50px;
        display: inline-block;
        vertical-align: middle;
        transition-delay:2s;

    }
    .login-box:hover{
        opacity: .8;
        transition-delay:0s ;
    }
    .main2{
        position: absolute;
        width: 1500px;
        margin-top: 200px;
        align-items: center;
        margin-left: 20px;
    }
    .pic-box{
        background-color: white;
        width: auto;
        height: 290px;
        border: 3px solid #333333;
        padding: 40px;
        opacity: .6;
        display: inline-block;
        vertical-align: middle;
        transition-delay:2s ;

    }
    .pic-box:hover{
        opacity: .8;
        transition-delay:0s ;
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
    input{
        width: 150px;
        height: 20px;
        margin: 5px;
        border: solid black;
        border-width: 1px;
        padding-left: 7px;
        padding-right: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
    } 

</style>
<body>
    <header>
        <div class="main">
            <div class="logo1">
                <img src="logo1.png">
            </div>
            <ul>            
                <li><a href="customerpage.php">Customer Home</a></li>   
                <li  class="active"><a href="customerproductdetail.php">Product Detail</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="customerlogout.php">Logout</a></li>
            </ul>
        </div>
        <div class="main2" >
            <center>
            <div class="login-box"><br>
                <center><h3>Product Details</h3></center><br><br>
                <table>
                    <?php
                    include('connection.php');

                        $sql = "SELECT * FROM product where id='".$_GET['id']."'";
                        $result = mysqli_query($conn , $sql);
                        while($row = mysqli_fetch_assoc($result)){
                           echo '<tr>
                                    <td width="150px">Product Name</td> 
                                    <td style="padding: 0px 10px">:</td> 
                                    <td>'.$row["ProductName"].'</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td style="padding: 0px 10px">:</td>
                                    <td>'.$row["ProductPrice"].'</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td style="padding: 0px 10px">:</td>
                                    <td>'.$row["Productdescription"].'</td>
                                </tr>';
                        }
                    ?>
                    <tr>
                        <td><br><br></td>
                    </tr>
                    <tr>
                        <form action="addtocart.php?id=<?php echo $temp;?>" method="POST">
                        <td colspan="1"><input type="number" name="qty" id="qty" placeholder="Quantity"  min="1" value="1" max="10000" style="text-align: center;"></td>
                        <td></td>
                        <td colspan="1"><button id="addtocart" class="btn1" >Add to Cart</button></td>
                        </form>
                    </tr>
                </table>
            </div>
            <div class="pic-box">
                <?php
                    
                    $sql = "SELECT * FROM product where id='".$temp."'";
                    $result = mysqli_query($conn , $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        echo ' <img src="productname/'.$row['Img'].'" height="290px">';
                    }
                ?>
            </div>
        </center>
        </div>
    </header>
    <script type="text/javascript">
        function addtocart($temp) {
            window.location.replace("addtocart.php?tid="+$temp);
        }
    </script>
</body>
</html>