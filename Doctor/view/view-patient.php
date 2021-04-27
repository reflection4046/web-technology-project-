<!DOCTYPE html>
<html>
<head>
</head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" media="screen" href='style.css'/>
<?php include('./header.php'); ?>

<body>


				<?php 

                $data = file_get_contents("patient.json");
                $data = json_decode($data, true);
                foreach($data as $row){}

                ?>
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
                    <li><a href='./view-patient.php'class="active">view-patient</a></li>
                    <li><a href='./changepass.php'>Change Password</a></li>
                    <li><a href='../controller/logout.php'>Logout</a></li>
                </ul>
            </td>
            <td>
       
			<table border="1" class="table table-bordered">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:red">
 Patient Details</td></tr>

    <tr>
    <th scope>Patient Name</th>
    <th><?php  echo $row['name'];?></th>
    </tr>
    <tr>
    <th scope>Patient Email</th>
    <td><?php  echo $row['email'];?></td>
  </tr>
  <tr>
    <th scope>Patient phoneNo</th>
    <th><?php  echo $row['phoneNo'];?></th>
  </tr>
    <tr>
    <th> Patient Gender</th>
    <td><?php  echo $row['gender'];?></td>
  </tr>
  <tr>
    <th>Patient Age</th>
    <td><?php  echo $row['Age'];?></td>
  </tr>
  <tr>
    <th>Appoinment Date </th>
    <td><?php  echo $row['Date'];?></td>
    
  </tr>
  <tr>
    <th>Medical History</th>
    <td><?php echo $row['Medical'];?></td>
  </tr>
  
		</table>
		<hr/>
			
	</form>

</body>
</html>



