<!DOCTYPE html>
<html>
<head>
</head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" media="screen" href='style.css'/>
<?php include('./header.php'); ?>

<body>


				
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
                    <li><a href='./profile.php' >View Profile</a></li>
                    <li><a href='./editprofile.php'>Edit Profile</a></li>
                    <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                    <li><a href='./changepass.php'>Change Password</a></li>
                    <li><a href='./Add Patient.php'>Add Patient</a></li>
                    <li><a href='./view-patient.php'>view-patient</a></li>
                    <li><a href='./showallpatient.php'>Show all patient</a></li>
                    <li><a href='./sarch.php' class="active">sarch patient</a></li>
                    <li><a href='../controller/logout.php'>Logout</a></li>
                </ul>
            </td>
            <td>



                <h3>Sarch Patient:</h3>

         <form action=""> 
           Patient Name: <input type="text" id="txt1" onkeyup="showHint(this.value)">
          </form>
          <p>Suggestions: <span id="txtHint"></span></p>
          <script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "Add patientjs.php?q="+str, true);
  xhttp.send();   
}
</script>

</body>
</html>
       