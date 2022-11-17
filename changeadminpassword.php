<?php
  session_start();
  ob_start();
?>
<?php
    $err2 = false;
    $err = false;
    $err1 = false;
    $succ = false;
    $query="update admin set ";
    $count=0;
    include("connection.php");
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $Password = $_POST['Password'];
        $VerifyPassword = $_POST['VerifyPassword'];
        $sql = "SELECT * FROM admin where Emailid='".$_SESSION["Emailid"]."'";
        $result = mysqli_query($conn , $sql);
        while($row = mysqli_fetch_assoc($result)){
            if($row["Password"]==$_POST['current_password']){
                if($Password == $VerifyPassword){
                    $query='update admin set Password="'.$Password.'" where Emailid="'.$_SESSION["Emailid"].'"';
                }
            }
        }
        $result = mysqli_query($conn, $query);
        if($result)
        {
            header("location: admin_login.php");
            echo "<script>alert('Password Changed Successfully');</script>";
            
        }
        else
        {
            $err1 = true;
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
        background-repeat: repeat-x;
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

    .login-box{
        background-color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        width: 25%;
        height: 280px;
        transform: translate(-50%,-45%);
        border: 3px solid #333333;
        padding: 30px;
        opacity: .6;
        margin-bottom: 50px;
        transition-delay:2s;
    }
    .login-box:hover{
        opacity: .8;
        transition-delay:0s ;
    }
    .btn1{
        width: 80px;
        height: 33px;
        border: solid black;
        border-width: 1px;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;   
        background-color: #fff;
        color: #000;
        font-weight: bold;
        transition: 0.6s ease;
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
    .hp1{
        text-decoration: none;
    }
    h3{
        font-size: 30px;
    }
    .tbl1{
        border: none;
    }
    ::placeholder { 
        color: grey;
        opacity: 1; 
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
                <li><a href="adminpage.php">Admin Home</a></li>   
                <li><a href="adminproductadd.php">Add Product</a></li>  
                <li><a href="adminproductdetail.php">Product Detail</a></li>
                <li><a href="customerdetail.php">Customer Detail</a></li>
                <li><a href="adminlogout.php">Logout</a></li>             
            </ul>
        </div>
    </header>
    <div class="login-box">
        <center><h3>Change Password</h3></center><br>
        <hr style="border:1px solid"><br><br>
            <center>
                <table>
                    <form action="changeadminpassword.php"  method="POST" enctype="multipart/form-data" >
                        
                        <tr>                            
                            <td><input type="password" name="current_password" placeholder="Enter Current Password" required></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="Password" placeholder="New Password" required> </td>
                        </tr>
                        <tr>
                            <td><input type="password" name="VerifyPassword" placeholder="Verify Password" required></td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><button name="submit" class="btn1" type="submit">Submit</button><br></td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                    </form>
                </table>
            </center>   
    </div>
</body>
</html>