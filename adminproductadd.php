<?php
  session_start();
  ob_start();
?>
<?php
include("connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $ProductID = $_POST['ProductID'];
    $ProductName = $_POST['ProductName'];
    $ProductPrice = $_POST['ProductPrice'];
    $Productdescription = $_POST['Productdescription'];
    $p=rand(1000,10000).".".$_FILES["Img"]["name"];
    $tname=$_FILES["Img"]["tmp_name"];
    move_uploaded_file($tname,"productname/".$p);
    $sql = "INSERT INTO product(Img,ProductID,ProductName,ProductPrice,Productdescription) VALUES ('$p','$ProductID','$ProductName','$ProductPrice','$Productdescription')";
        
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo '<script type="text/javascript">';
        echo ' alert("Product Added to Database")';  
        echo '</script>';
        header('location:adminproductadd.php');
    }
    else
    {
      echo '<script type="text/javascript">';
      echo ' alert("Some error have occured")';  //not showing an alert box.
      echo '</script>';
     }
}
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
    .login-box{
        background-color: white;
        width: 400px;
        height: 400px;
        border: 3px solid #333333;
        padding: 40px 50px;
        opacity: .6;
        margin-right: 50px;
        display: inline-block;
        vertical-align: middle;
        transition-delay:.6s;

    }
    .login-box:hover{
        opacity: .8;
        transition-delay:0s ;
    }
    .main2{
        position: absolute;
        width: 1500px;
        margin-top: 150px;
        align-items: center;
        margin-left: 20px;
    }
    .pic-box{
        background-color: white;
        width: auto;
        min-width: 450px;
        height: 400px;
        border: 3px solid #333333;
        padding: 40px;
        opacity: .6;
        display: inline-block;
        vertical-align: middle;
        transition-delay:.6s ;

    }
    .pic-box:hover{
        opacity: .9;
        transition-delay:0s ;
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
    textarea{
        margin: 5px;
        border: solid black;
        border-width: 1px;
        width: 300px;
        height: 50px;
        padding-left: 7px;
        padding-right: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
        resize: none;
    }
    td{
        align-items: center;
    }
    .pic-label{
        width: 300px;
        height: 20px;
        margin-top: 100px;
        margin: 5px;
        border: 1px solid black;
        padding-left: 7px;
        padding-right: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    .btn1{
        width: 100px;
        height: 33px;
        border: solid black;
        border-width: 1px;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        background-color: #fff;
        color: #000;        
    }
    .btn1:hover{
        background-color: #54575c;
        color: #fff;
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
                <li ><a href="adminpage.php">Admin Home</a></li>   
                <li class="active"><a href="adminproductadd.php">Add Product</a></li>  
                <li><a href="adminproductdetail.php">Product Detail</a></li>
                <li><a href="customerdetail.php">Customer Detail</a></li>
                <li><a href="adminlogout.php">Logout</a></li>               
            </ul>
        </div>
    
    <div class="main2" >
        <center>
            <div class="login-box">
                <center><h3>Add Product</h3></center><br>
                <hr style="border:1px solid"><br>
                
                <form action="adminproductadd.php"  method="POST" enctype="multipart/form-data" >
                    <center>
                        <table>
                            <tr>
                                <td><input type="text" name="ProductID" placeholder="ProductID" required></td>
                                
                            </tr>
                            <tr>
                                <td><input type="text" name="ProductName"  placeholder="ProductName" required></td>
                               
                            </tr>
                            <tr>
                                <td><input type="text" name="ProductPrice"  placeholder="Product Price" required></td>
                               
                            </tr>
                            <tr>
                                <td><textarea type="varchar" name="Productdescription" placeholder="Product Description" required></textarea></td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>
                                    <center>
                                        <label name="Img" for="Img" type="file" class="pic-label">Product Picture</label>
                                        <input name="Img" id="Img" type="file" accept="image/*" onchange="showPreview(event);" hidden>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td><center><button id="sub" class="btn1" type="submit" formaction="adminproductadd.php">Submit</button></center> </td>
                            </tr>
                        </table> 
                    </center>  
                </form>
            </div>
            <div class="pic-box">
                <img id="default-btn-preview" height="400px" src="default.png" style="max-width: 700px;">
            </div>
        </center>    
    </div>

    <script>
        function showPreview(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("default-btn-preview");
                preview.src = src;
                preview.height="380";
                preview.style.display = 'center';
            }
        }
    </script>
</body>
</html>