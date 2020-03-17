<?php
$host="localhost";
$user="root";
$password="";
$con=mysqli_connect('localhost',$user,$password,"practise") or die("Unable to connect");
if($con)
{
$db=mysqli_select_db($con,"practise");
}
?>
<!DOCTYPE html>
<head>
<title>CUSTOMER SEARCH</title>
</head>
<body>
<?php
$sql="SELECT * FROM customer WHERE customer_id=$_POST[c_id]";
$result=mysqli_query($con,$sql);
?>
<table bgcolor="red">

<tr>
<th>Customer_id</th>
<th>First name</th>
<th>Last name</th>
<th>Gender</th>
<th>Address</th>
<th>Age</th>
<th>Email id</th>
<th>City</th>
</tr>
<?php
while($row=mysqli_fetch_array($result))
{echo
"<tr>
<td>{$row['customer_id']}</td>
<td>{$row['Firstname']}</td>
<td>{$row['Lastname']}</td>
<td>{$row['gender']}</td>
<td>{$row['address']}</td>
<td>{$row['age']}</td>
<td>{$row['email']}</td>
<td>{$row['city']}</td>
</tr>";
}
?>
</table>
</body>
</html>

<?php
mysqli_close($con);
?>