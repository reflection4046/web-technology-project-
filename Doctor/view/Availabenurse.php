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
                    <li><a href='./sarch.php'>sarch patient</a></li>
                    <li><a href='./Availabenurse.php' class="active">Available Nurse</a></li>
                    <li><a href='../controller/logout.php'>Logout</a></li>
                </ul>
            </td>
            <td>
             

        <h1>Nurse Detalis </h1>
      <div>
         <b> Nurse Name:</b> <span id = "name"></span><br>
         <b>Nurse phone No :</b> <span id = "phone"></span><br>
         <b>Avilable Time:</b> <span id = "time"></span>
      </div>
      <script>
         if (window.XMLHttpRequest)
         {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
         }
         else
         {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
         }
         xmlhttp.open("GET","nurseinfo.xml",false);
         xmlhttp.send();
         xmlDoc = xmlhttp.responseXML;

         document.getElementById("name").innerHTML=
            xmlDoc.getElementsByTagName("name")[0].childNodes[0].nodeValue;
         document.getElementById("phone").innerHTML=
            xmlDoc.getElementsByTagName("phone")[0].childNodes[0].nodeValue;
         document.getElementById("time").innerHTML=
            xmlDoc.getElementsByTagName("time")[0].childNodes[0].nodeValue;
      </script>


        
</body>
</html>
       