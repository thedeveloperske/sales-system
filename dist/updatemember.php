<?php
include('index.php')
?>

<?php
include('dbconnection.php')
?>

<?php
error_reporting(0);
?>

<?php
if (count($_POST) > 0) {
    mysqli_query($conn, "UPDATE student set  admission_no='" . $_POST['id'] . "', s_name='" . $_POST['s_name'] . "' ,gender='" . $_POST['gender'] . "',
f_name='" . $_POST['f_name'] . "', mobile_no='" . $_POST['mobile_no'] . "' ,email='" . $_POST['email'] . "', address='" . $_POST['address'] . "'  
WHERE admission_no='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";
    echo "<script>alert('Record Successfully Modified');</script>";
}


if (mysqli_query($conn,)) {
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM student WHERE admission_no='" . $id . "'");
    $row = mysqli_fetch_array($result);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Update Record</h2>
                </div>
                <p>Please edit the input values and submit to update the record.</p>
                <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                    <div class="form-group">
                        <label>Admission No</label>
                        <input type="text" name="admission_no" class="form-control"
                               value="<?php echo $row["admission_no"]; ?>" readonly="">
                    </div>
                    <div class="form-group ">
                        <label>Student Name</label>
                        <input type="text" name="s_name" class="form-control" value="<?php echo $row["s_name"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <input type="mobile" name="gender" class="form-control" value="<?php echo $row["gender"]; ?>">
                    </div>
                    <div class="form-group ">
                        <label>Fathers Name</label>
                        <input type="text" name="f_name" class="form-control" value="<?php echo $row["f_name"]; ?>">
                    </div>
                    <div class="form-group ">
                        <label>Mobile No</label>
                        <input type="text" name="mobile_no" class="form-control"
                               value="<?php echo $row["mobile_no"]; ?>">
                    </div>
                    <div class="form-group ">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>">
                    </div>
                    <div class="form-group ">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="<?php echo $row["address"]; ?>">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $row["admission_no"]; ?>"/>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="update-student.php" class="btn btn-default">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>