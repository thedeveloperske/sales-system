<?php
include("dbconnection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($conn, $_POST['username']);
    $mypassword = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT idx FROM login WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //$active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        ("myusername");
        $_SESSION['login_user'] = $myusername;

        header("location: dashboard.php");
    } else {
        $error = "Your Login UserName or Password is invalid";
    }
}
?>
<html>

<head>
    <title>Library System</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.jpg"/>

    <link rel="stylesheet" href="css/loginstyle.css">

</head>


<?php
error_reporting(0);
?>

<?php
$backGround = "img/lib.jpg";
?>

<body style='background-image: url("<?php echo $backGround; ?>")'>>

<div align="center">
    <div style="width:570px; border: solid 1px #333333; " align="left">
        <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

        <div style="margin:30px">

            <form action="" method="post">

                <div class="imgcontainer">
                    <img src='img/logo.jpg'" alt="Avatar" class="avatar">
                </div>
                <label>UserName :</label><input type="text" name="username" class="box"/>
                <label>Password :</label><input type="password" name="password" class="box"/>

                <button class="submit-btn" type="submit" name="btnLogin">Log In</button>
            </form>

            <div style="font-size:18px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

        </div>

    </div>

</div>

</body>
</html>