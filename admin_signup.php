<?php
  session_start();
  ob_start();
?>
<?php
$err2 = false;
$err = false;
$err1 = false;
$succ = false;

include("connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Gender = $_POST['Gender'];
    $Registration = $_POST['Registration'];
    $Cellno = $_POST['Cellno'];
    $Emailid = $_POST['Emailid'];
    $Password = $_POST['Password'];
    $VerifyPassword = $_POST['VerifyPassword'];
    $Address = $_POST['Address'];
    $State = $_POST['State'];
    $p=$_FILES["adminProfile"]["name"];
    $tname=$_FILES["adminProfile"]["tmp_name"];
    move_uploaded_file($tname,"adminprofilepicture/".$p);
    $sql = "SELECT * FROM `admin` where Emailid='".$Emailid."'";
    $result = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($result);
    if($num > 0){
        $err = true;
    }
    else{
        if($Password != $VerifyPassword){
            $err2 = true;
        }else{
           $sql = "INSERT INTO admin(adminProfile,FirstName,LastName,Gender,Registration,Cellno,Emailid,Password,Address,State) 
              VALUES('$p','$FirstName','$LastName', '$Gender', '$Registration', '$Cellno', '$Emailid', '$Password','$Address','$State')";
        
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                $succ = true;
            }
            else
            {
                $err1 = true;
            }
        }
}
}
if($err){
    
    echo '<script type="text/javascript">';
      echo ' alert("Already have a account through this gmail id on Home Decors Page")';  //not showing an alert box.
      echo '</script>';
}
elseif($succ){
   echo '<script type="text/javascript">';
      echo ' alert("You have successfull register on Customer Profile")';  //not showing an alert box.
      echo '</script>';
  header("Location:admin_login.php");
}

elseif($err2){
    echo '<script type="text/javascript">';
      echo ' alert("Password and Verify Password does not match")';  //not showing an alert box.
      echo '</script>';
  header("location: admin_signup.php");
  
}

elseif($err1){
    die ('<div style="margin: 57px auto;"><div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Error</strong> We have facing some technical issue. Plz Try again later.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div></div>');
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
        padding: 5px 20px;
        border: 1px solid transparent;
        transition: 0.6s ease;

    }

    ul li a.ex1:hover{
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
        width: 50%;
        height: 470px;
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
        color: black;
        opacity: 1; 
    }
    .pic{
        width: 300px;
        height: 20px;
        margin: 15px;
        border: solid black;
        border-width: 1px;
        padding-left: 7px;
        padding-right: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
        transition: 0.6s ease;
    }
    .pic:hover{
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
                <li><a href="home1.html" class="ex1">Home</a></li>
                <li class="active" class="ex1"><a href="admin_login.php">Admin</a></li>
                <li ><a href="customer_login.php" class="ex1">Customer</a></li>
                <li><a href="contactus.php">Contact</a></li>                
            </ul>
        </div>
    </header>

    <div class="login-box">
        <center><h3>Admin Signup</h3></center><br>
        <hr style="border:1px solid"><br>
            <center>
                <table>
                    <form action="admin_signup.php"  method="POST" enctype="multipart/form-data" >
                        <tr>
                            <td><input type="text" name="FirstName"placeholder="First Name" required></td>
                            <td><input type="text" name="Emailid" placeholder="Email Address" required></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="LastName" placeholder="Last Name" required> </td>
                            <td><input type="password" name="Password" placeholder="Create a Password" required></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="Gender"  placeholder="Gender" required></td>
                            <td><input type="password" name="VerifyPassword" placeholder="Verify Password" required></td>
                        </tr>
                        <tr>
                            <td><input type="varchar" name="Registration"  placeholder="Registration Number" required></td>
                            <td><input type="text" name="Address"  placeholder="Address" required></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="Cellno"  placeholder="Phone Number" required></td>
                            <td><input type="text" name="State"  placeholder="State" required></td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><label name="adminProfile" for="adminProfile" class="pic"> Profile Picture</label><input name="adminProfile" id="adminProfile" type="file" accept="image/*" onchange="showPreview(event);" hidden required></td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><button name="submit" class="btn1" type="submit">Submit</button><br></td>
                        </tr>
                    </form>
                </table>
            </center>   
        <br>
        <center><a href="admin_login.php" class="hp1" >Already have an account?</a></center>
        
    </div>
    <script>
        function showPreview(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("default-btn-preview");
                preview.src = src;
                preview.width="300";
                preview.style.display = 'center';
            }
        }
    </script>
</body>
</html>