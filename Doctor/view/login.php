<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" media="screen" href='style.css'/>

    <title> Doctor Log In</title>
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
        <form name="loginform" action='../controller/logincheck.php' onsubmit="return validateForm()" method="POST">
            <fieldset>
                <legend>
                    <b>LOG IN</b>
                </legend>
                <table align="center">
                    <tr>
                        <td align="right">User Name:</td>
                        <td><input type='text' name='username' id='username' onkeyup="checkName()" onblur="checkName()"/></td>
                        <td align="right"><span align="right" id="nameErr"></span></td>
                    </tr>
                    <tr>
                        <td align="right">Password:</td>
                        <td><input type='password' name='password' id='password' onkeyup="checkPass()" onblur="checkPass()"/></td>
                        <td align="right"><span align="right" id="passErr"></span></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="left"><input type='submit' value="Submit"></td>
                        <td align="left"><a href="./forgotpass.php">Forgot Password</a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <?php include('./footer.php'); ?>
    <?php include('../resources/login.js'); ?>

</body>
</html>