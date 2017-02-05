<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<div class="viewbody">


		
				<table cellspacing="3" border="1" cellpadding="5">
				<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Date Of Birth</th>
				<th>Age</th>
				<th>Course</th>
				<th>Year</th>
				<th>Address</th>
				<th>Citizenship</th>
				<th>Status</th>
				<th>Blood Type</th>
				<th>Update</th>
				<th>Delete</th>
				<tr>

</div>
</body>
</html>


<?php
//$con=mysqli_connect("localhost","root","","score"); //connection to database
include"config.php";
$sql="Select * From infotbl";
$result=mysqli_query($conn,$sql);
while($row=$result->fetch_assoc())
{
	echo "<tr>";
	echo "<td>".$row['FirstName']."</td>";
	echo "<td>".$row['LastName']."</td>";
	echo "<td>".$row['Gender']."</td>";
	echo "<td>".$row['Dateofbirth']."</td>";
	echo "<td>".$row['Age']."</td>";
	echo "<td>".$row['Course']."</td>";
	echo "<td>".$row['Year']."</td>";
	echo "<td>".$row['Address']."</td>";
	echo "<td>".$row['Citizenship']."</td>";
	echo "<td>".$row['Status']."</td>";
	echo "<td>".$row['BloodType']."</td>";
	echo "<td>".'<a class="btndelup" href="update.php?id='.$row['ID'].'" >Update</a>'."</td>";
	echo "<td>".'<a class="btndelup" href="view.php?delete='.$row['ID'].'">Delete</a>'."</td>";
}


//Process pag mag delete og data
if(isset($_GET["delete"])){ 
		$sql="DELETE FROM infotbl WHERE ID=".$_GET["delete"]; //query for deleting
		if($conn->query($sql));
			header("Location: view.php"); 
	}
?>

