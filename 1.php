<?php
  session_start();
  ob_start();
?>
<?php
    // include('connection.php');
    // if($_SERVER['REQUEST_METHOD'] == "POST"){
    //     $search = $_POST['search'];
    //     $sql = "select * from customer where FirstName='".$search."'"; 
    //     $result = mysqli_query($conn, $sql);
    //     $num = mysqli_num_rows($result);
    //     if($num>0)
    //     {
    //         while($row = mysqli_fetch_assoc($result)){
    //             echo '<script type="text/javascript">
    //                 document.getElementById("display").innerHTML="<tr>
    //                                 <td>'.$row["ID"].'</td>
    //                                 <td>'.$row["FirstName"].'</td>
    //                                 <td>'.$row["LastName"].'</td>
    //                                 <td>'.$row["Gender"].'</td>
    //                                 <td>'.$row["DOB"].'</td>
    //                                 <td>'.$row["Cellno"].'</td>
    //                                 <td>'.$row["Emailid"].'</td>
    //                                 <td>'.$row["Address"].'</td>
    //                                 <td>'.$row["State"].'</td>
    //                                 <td><img src="customerprofile/'.$row['customerProfile'].'"  width="100px"></td>
    //                            </tr>";
    //             </script>';
    //         }
    //     }
    //     else{
    //         echo '<script type="text/javascript">
    //                 document.getElementById("display").innerHTML="NO Records Found";
    //             </script>';
    //     }
    //   
    //}
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

    body {
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(sy.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% ;

  }

    /*header{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(sy.jpg);
        background-repeat: repeat-y;
        height: 100vh;
        background-size: cover;
        background-position: center;
    }*/

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
        width: 80%;
        height: auto;
        transform: translate(-50%,-240px);
        border: 3px solid #333333;
        padding: 30px;
        opacity: .6;
        margin-bottom: 100px;
        transition-delay:2s;
        padding-bottom: 50px;
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
        width: 200px;
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
    table{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 80%;
        height: auto;
        transform: translate(-50%,-240px);
        border-spacing : 40px;

    }
    tr{
        margin: 20px;
    }
  /*  td{
        width: 300px;
        height: 400px;
        border: 3px solid #333333;
        background-color: white;
        opacity:  .8;
        transition: box-shadow .3s;

        
    }*/
    td {
        position: relative;
        width: 300px;
        height: 400px;
        background-color: #fff;
        border-radius: 2px;
        opacity: .7;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }
    td::after {
        border-radius: 5px;
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        opacity: .7;
        -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }
    td:hover {
        -webkit-transform: scale(1.1, 1.1);
        transform: scale(1.1, 1.1);
        opacity: .95;
    }

    td:hover::after {
        opacity: .95;
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
                <li><a href="adminproductadd.php">Add Product</a></li>  
                <li class="active"><a href="adminproductdetail.php">Product Detail</a></li>
                <li ><a href="customerdetail.php">Customer Detail</a></li>
                <li><a href="adminlogout.php">Logout</a></li>             
            </ul>
        </div>
        <div>
            <table>
                <tr>
                <?php
                    include('connection.php');
                    $sql = "select * from product";
                    $result = mysqli_query($conn, $sql);
                    $count=0;
                    while($row = mysqli_fetch_assoc($result)){

                        if ($count<3){
                            echo '<td >
                                    <center>
                                        <img src="productname/'.$row['Img'].'" style="max-width:300px; height:250px;" onclick="gotopage('.$row["id"].')"><br><br>
                                        '.$row["ProductName"].'<br>Rs. 
                                        '.$row["ProductPrice"].'
                                        <br><br>
                                    </center>
                                </td>';
                            $count++;
                        }
                        else{
                            echo '</tr><tr><td>
                                    <center>
                                        <img src="productname/'.$row['Img'].'" style="max-width:300px;height:250px;" onclick="gotopage('.$row["id"].')"><br><br>
                                        '.$row["ProductName"].'<br>Rs. 
                                        '.$row["ProductPrice"].'
                                        <br><br>
                                    </center>
                                </td>';
                            $count=1;
                        }
                    }
                ?>
                </tr>



             
            </table>
        </div>
    </header>
    <script>
        function gotopage($temp){
            window.location.replace("customerproduct.php?id="+$temp);
        }
    </script>

    <br>
    <br>
    <br>
</body>
</html>