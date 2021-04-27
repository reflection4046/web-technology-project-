<!DOCTYPE html>
<html>
<head>
</head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" media="screen" href='style.css'/>

<body>
<?php include('./header.php'); ?>

<br>
    </fieldset>
    <table border="1px solid black" width='100%'>
        <tr>
            <td>
                <label>Menu</label>
                <br>
                <hr>
                <ul>
                    <li><a href='./dashboard.php'>Dashboard</a></li>
                    <li><a href='./profile.php'>View Profile</a></li>
                    <li><a href='./editprofile.php'>Edit Profile</a></li>
                    <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                    <li><a href='./Add Patient.php'>Add Patient</a></li>
                     <li><a href='./view-patient.php'>view-patient</a></li>
                     <li><a href='./Add Nurse.php'>Add Nurse</a></li>
                     <li><a href='./sarchAllnurse.php'class="active">Sarch Nurse</a></li>
                     <li><a href='./changepass.php'>Change Password</a></li>
                    <li><a href='../controller/logout.php'>Logout</a></li>
                </ul>
            </td>
            <td>






<?php


    
	
	
	$conn = mysqli_connect('localhost', 'root', '', 'mydb1');
	$sql = "select * from user ";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=2>
					<tr>
						<td>id</td>
						<td>Name</td>
						<td>Email</td>
						<td>phoneNo</td>
						<td>Gender</td>
						<td>Date Of BIRTH</td>
						
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= "	<tr>
							<td>{$row['id']}</td>
							<td>{$row['name']}</td>
							<td>{$row['email']}</td>
							<td>{$row['phoneNo']}</td>
							<td>{$row['gender']}</td>
							<td>{$row['dob']}</td>
							
						</tr>";
	}

	$response .= "</table>";

	echo $response;
?>
