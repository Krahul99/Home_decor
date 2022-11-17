<?php
  session_start();
  ob_start();
?>
<?php
$qty=$_POST['qty'];
$id=$_GET['id'];
include('connection.php');
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y');
$email=$_SESSION['Emailid'];

$sql="select *from product where id='".$id."'";
$result = mysqli_query($conn , $sql);
while($row = mysqli_fetch_assoc($result)){
	$name=$row["ProductName"];
	$price=$row["ProductPrice"];
}
$sql="INSERT INTO `cart`(`Emailid`, `ProductName`, `Quantity`, `date`, `Price`, `Status`) VALUES ('".$email."','".$name."',".$qty.",'".$date."',".$price.",'Pending')";
$result = mysqli_query($conn , $sql);
if($result)
    {
        $succ = true;
        header("Location: customerproductdetail.php");  
    }
    else
    {
        $err1 = true;
        header("Location: customerproductdetail.php");      
    }
	
?>