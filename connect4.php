<?php
$host="localhost";
$user="root";
$password="";
$con=mysqli_connect('localhost',$user,$password,"practise");
if($con)
{echo "Connected to mysql";
$db=mysqli_select_db($con,"practise");
$sql="INSERT INTO medicine(medicine_name,manufacture,expiry,rack_number) VALUES ('$_POST[Mname]','$_POST[Mdate]','$_POST[Edate]','$_POST[rack]')";
mysqli_query($con,$sql);
echo "1 record added";
mysqli_close($con);}
else
{echo "mysql server is not connected";
}
?>