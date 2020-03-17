<?php
$host="localhost";
$user="root";
$password="";
$con=mysqli_connect('localhost',$user,$password,"practise");
if($con)
{echo "Connected to mysql";
$db=mysqli_select_db($con,"practise");
$sql="INSERT INTO customer(Firstname,Lastname,gender,address,age,email,city) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[gender]','$_POST[add]','$_POST[age]','$_POST[eid]','$_POST[city]')";
mysqli_query($con,$sql);
echo "1 record added";
mysqli_close($con);}
else
{echo "mysql server is not connected";
}
?>