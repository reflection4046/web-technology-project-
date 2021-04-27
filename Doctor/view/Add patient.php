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
                    <li><a href='./Add Patient.php'class="active">Add Patient</a></li>
                     <li><a href='./view-patient.php'>view-patient</a></li>
                    <li><a href='./changepass.php'>Change Password</a></li>
                    <li><a href='../controller/logout.php'>Logout</a></li>
                </ul>
            </td>
            <td>

<?php
$flag=1;
$nameErr = $emailErr= $genderErr =  $AgeErr=  $phoneNoErr= $datewErr= $medicalErr = $name = $email= $phoneNo = $Age=  $date=  $medical = $gender = "";
$message = '';  
$error = ''; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $flag=0;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) {
      $nameErr = "Only letters white space, period & dash allowed";
      $name ="";
      $flag=0;
    }
    else if (str_word_count($name)<2) {
      $nameErr = "At least two words needed";
      $name ="";
      $flag=0;
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email ="";
      $flag=0;
    }
  }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }

if (empty($_POST["phoneNo"])) {
    $phoneNoErr = "";
    $flag=0;
  } else {
    $phoneNo = test_input($_POST["phoneNo"]);
  }
  

  

if (empty($_POST["Age"])) {
    $AgeErr = "Age is required";
    $flag=0;
  } else {
    $Age = test_input($_POST["Age"]);
  }

if (empty($_POST["Date"])) {
    $dateErr = "Date is required";
    $flag=0;
  } else {
    $date = test_input($_POST["Date"]);
  }

if (empty($_POST["Medical"])) {
    $medicalErr = "Medical is required";
    $flag=0;
  } else {
    $medical = test_input($_POST["Medical"]);
  }



 if ($flag==1) {
  if(isset($_POST["submit"]))  
    {
  if(file_exists('Patient.json'))
    {
      $current_data = file_get_contents('Patient.json');  
            $array_data = json_decode($current_data, true);  
            $extra = array(  
                 'name'               =>     $_POST['name'],
                 'email'          =>     $_POST["email"],
                 'gender'          =>     $_POST["gender"],
                 'phoneNo'       =>      $_POST["phoneNo"],
                 'Age'        =>     $_POST["Age"],
                 'Date'        =>     $_POST["Date"],
                 'Medical'        =>     $_POST["Medical"]

                 
                 );  
            $array_data[] = $extra;  
            $final_data = json_encode($array_data);  
            if(file_put_contents('patient.json', $final_data))  
            {  
                 $message = "<h2>saved Successfully</h2>";  
            }  
        }  
        else  
        {  
           $error = 'JSON File not exits';  
        }  
    }
 }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
    <legend align="center" style="font-size: 3.0em">Add patient</legend>
   <table align="center">
    <tr>
   <td align="right">Patient Name:</td>
   <td> <input type="text" name="name"></td>
   <td><span class="error">* <?php echo $nameErr;?></span></td>
   <br></tr>
   <tr>
   <td align="right">E-mail:</td>
   <td> <input type="text" name="email"></td>
   <td><span class="error">* <?php echo $emailErr;?></span></td>
   <br></tr>
   <tr>
  <td align="right"> Phone No:</td>
  <td><input type="text" name="phoneNo"></td>
   <td><span class="error">*<?php echo $phoneNoErr;?></span></td>
   <br></tr>
   <tr>
  <td align="right"> Gender:</td>
 
 <td> <input type="radio" name="gender" value="female">Female</td>
 <td> <input type="radio" name="gender" value="male">Male</td>
 <td> <input type="radio" name="gender" value="other">Other</td>
  <td><span class="error">* <?php echo $genderErr;?></span></td>
  <br></tr>
 <tr>
 <td align="right"> Age: </td>
  <td><input type="text" name="Age"></td>
  <td><span class="error">*<?php echo $AgeErr;?></span></td>
  <br><br></tr>
<tr>
 <td align="right"> Appointment Time:</td>
 <td> <input type="Date" name="Date"></td>
  <td><span class="error">* <?php echo $datewErr;?></span></td>
  <br><br></tr>
  <tr>
 <td align="right"> Medical History:</td>
  <td><input type="text" name="Medical"></td>
  <td><span class="error">*<?php echo $medicalErr;?></span></td>
  <br><br></tr>
 
  <tr>
                        <td align="center" colspan="2"><input type='submit' name = 'submit' value="Confirm Registration"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='reset' value="Reset"></td>
                    </tr></table>
</form>

<?php
echo $error;
echo "<br>";
echo $message;
echo "<br>";
?>
<?php include('./footer.php'); ?>
</body>
</html>