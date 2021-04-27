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
                   <li><a href='./dashboard.php' class="active">Dashboard</a></li>
                    <li><a href='./profile.php' >View Profile</a></li>
                    <li><a href='./editprofile.php'>Edit Profile</a></li>
                    <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                    <li><a href='./changepass.php'>Change Password</a></li>
                    <li><a href='./Add Patient.php'>Add Patient</a></li>
                    <li><a href='./view-patient.php'>view-patient</a></li>
                    <li><a href='./showallpatient.php'>Show all patient</a></li>
                    <li><a href='../controller/logout.php'>Logout</a></li>
                </ul>
            </td>
            <td>
       

       <table >
                                        <thead>
                                            <tr>
                                                <th class="center">#</th>
                                                <th class="hidden-xs">Patient Name</th>
                                                <th>Patient Email</th><br>
                                                <th>Patient phoneNo</th><br>
                                                <th>Patient Gender  </th>
                                                <th>Patient Age  </th>
                                                <th>Appoinment Date</th>
                                                <th>Medical History</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>


                                               <th class="center">#</th>
                                               <td ><?php  echo $row['name'];?></td>
                                                <td><?php  echo $row['email'];?></td>
                                                <td><?php  echo $row['phoneNo'];?></td>
                                                <td><?php  echo $row['gender'];?></td>
                                                <td><?php  echo $row['Age'];?></td>
                                                <td><?php  echo $row['Date'];?></td>
                                                <td><?php echo $row['Medical'];?></td>


                 










   </body>
</html>                                         