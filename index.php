<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <center><h1>STUDENT INFORMATION</h1></center> <br>
 	<center><a href="form.php">
    	<button class="btnform"><b>Add Students</b></button></center><!--BUTTON GOING TO THE FORM-->
			</a>
			<br>
			<br>
	<center><a href="view.php">
    	<button class="btnview"><b>UPDATE/DELETE Students</b></button></center><!--VIEW BUTTON for VIEWING STUDENT LIST-->
			</a>
			<br>
			<br>


	

		<div class="searchbutton">
		<form action="index.php" method="get"> <!--SEARCH BUTTON-->
			<input 	type="text" name="search" placeholder="Search..."><input type="submit" value="search">
		</form><br /><br /><br /><br />
		</div>

		
<?php
   //Process for searching
        include 'config.php';//include database connection
		$where="";//set as no value
		if(isset($_GET["search"])){ //process GET of the submitted form 

			$where=" WHERE FirstName LIKE '".$_GET["search"]."%' OR LastName LIKE'".$_GET["search"]."%' 
			OR Gender LIKE'".$_GET["search"]."%' OR Dateofbirth LIKE'".$_GET["search"]."%' 
			OR Age LIKE'".$_GET["search"]."%' OR Course LIKE'".$_GET["search"]."%'OR Year LIKE'".$_GET["search"]."%' 
			OR Address LIKE'".$_GET["search"]."%' OR Citizenship LIKE'".$_GET["search"]."%' 
			OR Status LIKE'".$_GET["search"]."%' OR BloodType LIKE'".$_GET["search"]."%'"; //data being search will be assign in $where variable
		}

		$sql="SELECT * FROM infotbl ".$where; // query to find the values of $where being search in the database table
		$result=$conn->query($sql); //$result object method
		if($result->num_rows >0){ //checking $result ?>
			<center><table border="1">
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
				</tr>
				<?php
					while ($row=$result->fetch_assoc()) { ?>
						<tr>
							<td><?php echo $row["FirstName"] ?></td>
							<td><?php echo $row["LastName"] ?></td>
							<td><?php echo $row["Gender"] ?></td>
							<td><?php echo $row["Dateofbirth"] ?></td>
							<td><?php echo $row["Age"] ?></td>
							<td><?php echo $row["Course"] ?></td>
							<td><?php echo $row["Year"] ?></td>
							<td><?php echo $row["Address"] ?></td>
							<td><?php echo $row["Citizenship"] ?></td>
							<td><?php echo $row["Status"] ?></td>
							<td><?php echo $row["BloodType"] ?></td>
						</tr>
		<?php		}
				?>
			</table><br /><br />
		<?php
		}
	?>
	</body>
</html>
