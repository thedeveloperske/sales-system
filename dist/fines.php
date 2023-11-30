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
    mysqli_query($conn, "UPDATE history set  admission_no='" . $_POST['admission_no'] . "', book_id='" . $_POST['bookid'] . "' ,
 date_returned='" . $_POST['sdate'] . "' ,fine_days='" . $_POST['sfine'] . "', total_fine='" . $_POST['totalf'] . "',book_returned = '1'  
WHERE admission_no='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";
	echo "<script>alert('Record Updated Successfully');</script>";
}


if (mysqli_query($conn,)) {
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM history WHERE admission_no='" . $id . "'");
    $row = mysqli_fetch_array($result);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Returned Book</title>
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
                    <h2>Return Book</h2>
                </div>
                <p><h4><b>If fine is applicable kindly make sure its paid before submitting.</b></h4></p>
                <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                    <div class="form-group">
                        <label>Admission No</label>
                        <input type="text" name="admission_no" id="admission_no" class="form-control"
                               value="<?php echo $row["admission_no"]; ?>" readonly="">
                    </div>
                    <div class="form-group ">
                        <label>Book Id</label>
                        <input type="text" name="bookid" id="bookid" class="form-control" value="<?php echo $row["book_id"]; ?>" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Issue Date</label>
                        <input type="date" name="issuedate" id="issuedate" class="form-control" value="<?php echo $row["issue_date"]; ?>" readonly="">
                    </div>
                    <div class="form-group ">
                        <label>Recommeded Return Date</label>
                        <input type="date" name="returndate" id="returndate" class="form-control" value="<?php echo $row["return_date"]; ?>" readonly="">
                    </div>
					 <?php
                    $today = date("Y-m-d");
                    ?>
                    <div class="form-group ">
                        <label>Student Return Date</label>
                        <input type="date" name="sdate" id="sdate" class="form-control"
                               value="<?php echo $today; ?>" readonly="">
                    </div>
					<?php

                    $date1 = strtotime($row["return_date"]);
                    $date2 = strtotime($today);

                    $days = (($date2 - $date1) / 86400)
                    ?>
					
					<?php
					
					if($days < 0){
						$days = 0;
					} else{
						$days = $days;
					}
					?>

                    <div class="form-group ">
                        <label>Days to pay Fine</label>
                        <input type="text" name="sfine" id="sfine" class="form-control" value="<?php echo $days; ?>" readonly="">
                    </div>
                    <div class="form-group ">
                        <label>Fine per day</label>
                        <input type="text" name="perday" id="perday" class="form-control" value="200" readonly="">
                    </div>
					   <?php
                    $total = $days * 200
                    ?>
					 <div class="form-group ">
                        <label>Total Fine</label>
                        <input type="text" name="totalf" id="totalf" class="form-control" value="<?php echo $total; ?>" readonly="">
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