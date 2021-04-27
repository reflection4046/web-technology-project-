<?php
require '../model/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" media="screen" href='style.css'/>
    <title>Add a new user</title>
</head>
<body>
    <?php include('./header.php'); ?>
    
    <fieldset class="topnav">
    <table align="right">
    <tr>
        <td>
            <nav>
                <a href="./index.php" class="button">Home</a> ||
                <a href="./login.php" class="button">Log in</a> ||
                <a href="./registration.php" class="button">Registration</a>
            </nav>
        </td>
    </tr>        
    </table>
    </fieldset>

    <div width='100px'>
        <form name="loginform" action='../controller/regcheck.php' onsubmit="return validateForm()" method="POST">
            <fieldset>
                <legend>
                    <b>REGISTRATION</b>
                </legend>
                <table align="center">
                    <tr>
                        <td align="right">Name:</td>
                        <td><input type='text' name='name' id="name" onkeyup="checkName()" onblur="checkName()"/></td>
                        <td><span id="nameErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">Email:</td>
                        <td><input type='text' name='email' id="email" onkeyup="checkEmail()" onblur="checkEmail()"/></td>
                        <td><span id="emailErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">User Name:</td>
                        <td><input type='text' name='username' id="username" onkeyup="checkUN()" onblur="checkUN()"/></td>
                        <td><span id="unErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">Password:</td>
                        <td><input type='password' name='password' id="password" onkeyup="checkPass()" onblur="checkPass()"/></td>
                        <td><span id="passErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">Confirm Password:</td>
                        <td><input type='password' name='confirmpassword' id="confirmpassword" onkeyup="checkPassC()" onblur="checkPassC()"/></td>
                        <td><span id="passErrC"></span></td>
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
                        <td><input type='date' name='dateOfBirth' id="dateOfBirth" onkeyup="dob()" onblur="dob()"/></td>
                        <td><span id="dobErr"></span></td>
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
    <?php include('../resources/registration.js'); ?>
</body>
</html>