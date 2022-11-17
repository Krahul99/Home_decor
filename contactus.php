<?php
  session_start();
  ob_start();
?>
<?php
include("connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Emailid = $_POST['Emailid'];
    $Phoneno = $_POST['Phoneno'];
    $Country = $_POST['Country'];
    $Message = $_POST['Message'];
    $sql = "INSERT INTO `contactus`(`FirstName`, `LastName`,`Emailid`,`Phoneno`, `Country`, `Message`) VALUES ('$FirstName','$LastName','$Emailid','$Phoneno','$Country','$Message')";
        
    $result = mysqli_query($conn, $sql);
    if($result)
    {
      echo '<script type="text/javascript">';
      echo ' alert("You will be contact soon")';  
      echo '</script>';
      header('location:home1.html');
      
    }
    else
    {
      echo '<script type="text/javascript">';
      echo ' alert("Some error have occured")';  //not showing an alert box.
      echo '</script>';
     }
}
?>
<!DOCTYPE html>
<html>
<head>

  <title>Contact Us</title>
  <link rel="stylesheet" href="style.css">

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
        
        top: 50%;
        left: 50%;
        width: 30%;
        height: 420px;
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
    select{

        width: 300px;
        height: 30px;
        margin: 5px;
        border: solid black;
        border-width: 1px;
        padding-left: 7px;
        padding-right: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
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
 
</head>
<body>
  <header>
    <div clas="main">
      <div class="logo1">
        <img src="logo1.png">
      </div>
      <ul>
        
        <li><a href="home1.html">Home</a></li>
        <li><a href="admin_login.php">Admin</a></li>
        <li><a href="customer_login.php">Customer</a></li>
        <li class="active"><a href="contactus.php">Contact</a></li>
          
      </ul>
    </div>
    
   
     <!--------------------end of nav bar --------------------->

<div class="login-box" >

  <table>

      <form action="contactus.php" method="POST">
        <tr>
        <td><label for="FirstName">First Name</label></td>
        <td><input type="text" id="FirstName" name="FirstName" placeholder="First Name" required></td>
        </tr>
        <tr>
        <td><label for="LastName">Last Name</label></td>
        <td><input type="text" id="LastName" name="LastName" placeholder="Last Name" required></td>
      </tr>
      <tr>
        <td><label for="Emailid">Email Id</label></td>
        <td><input type="text" id="Emailid" name="Emailid" placeholder="Email"  required></td>
      </tr>
      <tr>
        <td><label for="Phoneno">Phone Number </label></td>
        <td><input type="text" id="Phoneno" name="Phoneno" placeholder="Phone number"  required></td>
      </tr>
      <tr>
        <td><label for="Country">Country</label></td>
        <td><select id="Country" name="Country" required>
          <option disabled hidden selected>Select any one</option>
          <option >India</option>
          <option>Nepal</option>
          <option >Afghanistan</option>
          <option >Bangladesh</option>
          <option>Bhutan</option>
          <option >Maldives</option>
          <option >Pakistan</option>
          <option>Sri Lanka</option>
        </select></td>
      </tr>
      <tr>
       <td> <label for="Message">Message</label></td>
        <td><textarea id="Message" name="Message" placeholder="For any customization or complaints. Write to us...." style="width: 295px;height: 150px;" required></textarea></td>
      </tr>
      <tr>
        
        <td colspan="2"><br><center><button class="btn1" type="submit"  name="submit">Submit</button></center></td>

      </tr>

      </form>
    </table>
  
   
</div>
</body>
</html>
