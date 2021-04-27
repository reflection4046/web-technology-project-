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
                     <li><a href='./sarchAllnurse.php'>Sarch Nurse</a></li>
                     <li><a href='./showallnurse.php'class="active">showallnurse</a></li>
                     <li><a href='./changepass.php'>Change Password</a></li>
                    <li><a href='../controller/logout.php'>Logout</a></li>
                </ul>
            </td>
            <td>










<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","data.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
    <form>
<select name="users" onchange="showUser(this.value)">
<option value="">Select a person:</option>
<option value="1">Nabila</option>
<option value="2">Nahid</option>
<option value="3">Kakon</option>


</select>
</form>
<br>
<div id="txtHint"><b>Nurse info will be listed here.</b></div>

</body>

</html>