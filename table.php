<?php
include("data_connection.php");
connection();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>universtiy Roll</th>
		</tr>
		</thead>
<tbody>
	<?php
	

	global $con;
	$sql="SELECT* FROM data_form";
	$rec = array();
	$result=mysqli_query($con,$sql);

	while($record = mysqli_fetch_assoc($result))
	{

		
	echo "<tr>";
	echo "<td>".$record['id']."</td>";
	echo "<td>".$record['name']."</td>";
	echo "<td>".$record['email']."</td>";
	echo "<td>".$record['university']."</td>";
	echo "<td><a href='new_form.php?uid=".$record['id']."'><button>update</button></a></td>";
	echo "<td><a href='new_form2.php'><<button>delete</button></a></td>";
	echo "</tr>";
	}
//print_r($data);
	


?>
</tbody>
</table>
</body>
</html>