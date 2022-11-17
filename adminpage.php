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
    .btn2:hover{
        background-color: #54575c;
        color: #fff;
    }
    .login-box{
        background-color: white;

        width: 500px;
        height: 290px;
        border: 3px solid #333333;
        padding: 40px 50px;
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

</style>
<body>
    <header>
        <div class="main">
            <div class="logo1">
                <img src="logo1.png">
            </div>
            <ul>            
                <li class="active"><a href="adminpage.php">Admin Home</a></li>   
                <li><a href="adminproductadd.php">Add Product</a></li>  
                <li><a href="adminproductdetail.php">Product Detail</a></li>
                <li><a href="customerdetail.php">Customer Detail</a></li>
                <li><a href="adminlogout.php">Logout</a></li>
            </ul>
        </div>
        <div class="main2" >
            <center>
            <div class="login-box">
                <center><h3>Account Details</h3></center><br>
                <table>
                    <?php
                    include('connection.php');

                        $sql = "SELECT * FROM admin where Emailid='".$_SESSION["Emailid"]."'";
                        $result = mysqli_query($conn , $sql);
                        while($row = mysqli_fetch_assoc($result)){
                           echo '<tr>
                                    <td>Registration</td>
                                    <td style="padding: 0px 10px">:</td> 
                                    <td>'.$row['Registration'].' </td>
                                </tr>
                                <tr>
                                    <td>Name</td> 
                                    <td style="padding: 0px 10px">:</td> 
                                    <td>'.$row["FirstName"].' '.$row["LastName"].'</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td style="padding: 0px 10px">:</td>
                                    <td>'.$row["Gender"].'</td>
                                </tr>
                                <tr>
                                    <td>Email ID</td>
                                    <td style="padding: 0px 10px">:</td>
                                    <td>'.$row["Emailid"].'</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td style="padding: 0px 10px">:</td>
                                    <td>'.$row["Address"].'</td>
                                </tr> 
                                <tr>
                                    <td>State</td>
                                    <td style="padding: 0px 10px">:</td>
                                    <td>'.$row["State"].'</td>
                                </tr> 
                                <tr>
                                    <td>Phone No.</td>
                                    <td style="padding: 0px 10px">:</td>
                                    <td>'.$row["Cellno"].'</td>
                                </tr> ';
                        }
                    ?>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td colspan="1"><center><button id="editprofile" class="btn1" onclick="editprofile()">Edit Profile</button><a href="editadminprofile.php"></a></center></td>
                        <td colspan="2"><center><button id="editprofile" class="btn2" onclick="changepassword()">Change Password</button><a href="changeadminpassword.php"></a></center></td>
                    </tr>
                </table>
            </div>
            <div class="pic-box">
                <?php
                    $sql = "SELECT * FROM admin where Emailid='".$_SESSION["Emailid"]."'";
                    $result = mysqli_query($conn , $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        echo ' <img src="adminprofilepicture/'.$row['adminProfile'].'" height="290px">';
                    }
                ?>
            </div>
        </center>
        </div>
    </header>
    <script type="text/javascript">
        function editprofile() {
            window.location.replace("editadminprofile.php");
        }
        function changepassword() {
            window.location.replace("changeadminpassword.php");
        }
    </script>
</body>
</html>