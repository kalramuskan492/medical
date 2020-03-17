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
<title>MEDICINE SEARCH</title>
</head>
<body>
<?php
$sql="SELECT * FROM medicine WHERE medicine_id=$_POST[m_id]";
$result=mysqli_query($con,$sql);
?>
<table>
<thead>
<tr>
<th>Medicine_id</th>
<th>Medicine name</th>
<th>Manufacture</th>
<th>Expiry</th>
<th>Rack Number</th>
</tr>
</thead>
<tbody>
<?php
while($row=mysqli_fetch_array($result))
{echo
"<tr>
<td>{$row['medicine_id']}</td>
<td>{$row['medicine_name']}</td>
<td>{$row['manufacture']}</td>
<td>{$row['expiry']}</td>
<td>{$row['rack_number']}</td>
</tr>";
}
?>
</tbody>
</table>
</body>
</html>

<?php
mysqli_close($con);
?>