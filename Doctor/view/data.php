<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','mydb1');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"mydb1");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table border=2>
<tr>
<th>id</th>
<th>Name</th>
<th>Email</th>
<th>phoneNo</th>
<th>Gender</th>
<th>Date of Birth</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phoneNo'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>