<?php
session_start();
$a=$_SESSION['check'];

if(!$a=="yes")
{
    header("location: index.php?error=login_first");
    exit();
}
?> 
<?php
include_once 'includes/dbh.inc.php';
$sql = "SELECT *FROM  bikepass WHERE permit='decline' OR permit='Not_Yet_Given';";
$res = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<title>Document</title>
	<style>
    #pass {
        width: auto;
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        margin-bottom: auto;
        border: 1px ;
        padding: auto;
        margin: left;
        margin: auto;
    }
</style>
</head>

<body class="w3-content" style="max-width:1400px">

    <div class=" w3-blue-grey w3-container " style="height:800px">
        <div class="w3-padding-64 w3-center">
            <h2>Request Details </h2>
            <div id="pass">

	<form class=" w3-container " method="post">
		<center>  
			
			<?php
			echo "<div style='overflow-x:auto;'>";

		echo "<table border='1'>
		<tr>
		<th>Rollno</th>
		<th>Name</th>
		<th>student/staff</th>
		<th>age</th>
		<th>mobile</th>
		<th>licenceno</th>
		<th>bikerc</th>

		<th>permit</th>
		<th>Reason</th>


		</tr>";
		
		while ($row = mysqli_fetch_array($res)) {
			echo "<tr>";
			echo "<td>" . $row['rollno'] . "</td>";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['forr'] . "</td>";
			echo "<td>" . $row['age'] . "</td>";
			echo "<td>" . $row['mobileno'] . "</td>";			
			echo "<td>" . $row['licenceno'] . "</td>";
			echo "<td>" . $row['bikerc'] . "</td>";
			echo "<td>" . $row['permit'] . "</td>";
			echo "<td>" . $row['Reason'] . "</td>";



			echo "</tr>";
		}
		echo "</table>";
		echo "</div>";
		?><br>
		<button onclick="window.print()">Print this page</button>
		
		<input type="submit" formaction="busadmin.php" value="Home"></button>
	</center>
	</form>
    <br><br>
	<form method="post">
    Enter the Rollno to Get Image:
	<input type="text" name="getimage" value="">
	<input type="submit" name="rn"formaction="test12.php" value="get"></button>




	</form>
			</div>
		</div>
	</div>

</body>

</html>