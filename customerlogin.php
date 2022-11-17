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
        padding: 5px 20px;
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
        position: absolute;
        top: 50%;
        left: 50%;
        width: 30%;
        height: 290px;
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
    .d{
        color: white; 
        background-color:#405e7b; 
        width:70px; 
        height:30px; 
        font-weight: bold; 
        font-size: 23px;
        border: 0px;
        word-spacing: 12px;
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

</style>

 <?php

include 'connection.php';
if(isset($_POST['save']))
{
    extract($_POST);
    $result=mysqli_query($conn,"SELECT * FROM customer WHERE Emailid='".$_POST["Emailid"]."'and Password='".$_POST["Password"]."'");
    $row=mysqli_fetch_array($result);
   if(is_array($row))
    {
        session_start();
        $_SESSION['start_login'] = true;
        $_SESSION["Emailid"]=$row['Emailid']; 
        header("Location:customerpage.php");

    }
    else
    {
        echo '<script type="text/javascript">';
      echo ' alert("Invalid Email Id/Password")';  //not showing an alert box.
      echo '</script>';
    }
}

?>
    <header>
        <div clas="main">
            <div class="logo1">
                <img src="logo1.png">
            </div>
         <div class="heading">
            
        </div>
            <ul>   
                <li><a href="home1.html" >Home</a></li>
                <li ><a href="admin_login.php">Admin</a></li>
                <li class="active"><a href="customer_login.php" >Customer</a></li>                
            </ul>
        </div>
    </header>
    <div class="login-box">
        <center><h3>Customer Login </h3></center><br>
        <hr style="border:1px solid"><br><br>
        <form action="customer_login.php"  method="POST" enctype="multipart/form-data" >
            <center><strong></strong>
                <input type="text" name="Emailid" placeholder="Email Address"><br><br><strong></strong>
                <input type="password" name="Password" placeholder="Password"><br><br>
                <button name="save" class="btn1" style="">Login</button>
            </center>   
        </form>
        <button class="btn2" onclick="go_to_signup()">Sign up</button>
    </div>
    <script type="text/javascript">
        function go_to_signup(){
            window.location.replace("customer_signup.php");
        }
    </script>
</body>
</html>