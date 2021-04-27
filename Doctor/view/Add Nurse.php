
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
                     <li><a href='./Add Nurse.php'class="active">Add Nurse</a></li>
                     <li><a href='./changepass.php'>Change Password</a></li>
                    <li><a href='../controller/logout.php'>Logout</a></li>
                </ul>
            </td>
            <td>

          
    </fieldset>

    <div width='100px'>
        <form action='../controller/addrursecheck.php' method="POST">
            <fieldset>
                <legend>
                    <b> REGISTRATION</b>
                </legend>
                <table align="center">
                    <tr>
                        <td align="right">Name:</td>
                        <td><input type='text' name='name'/></td>
                    </tr>
                    <tr>
                        <td align="right">Email:</td>
                        <td><input type='text' name='email'/></td>
                    </tr>
                    <tr>
                        <td align="right">Phone No:</td>
                        <td><input type='text' name='phoneNo'/></td>
                    </tr>
                    

                    <tr>
                        <td align="right">Gender:</td>
                        <td>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Other</label>
                        </td>
                    </tr>

                    <tr>
                        <td align="right">Date of Birth:</td>
                        <td><input type='date' name='dateOfBirth'/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='submit' name = 'submit' value="Confirm Registration"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='reset' value="Reset"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <?php include('./footer.php'); ?>
    
</body>
</html>



