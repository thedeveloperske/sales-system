<?php
include('index.php')
?>

<?php
include('dbconnection.php')
?>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //save book
    $adm = $_POST['admission_no'];
    $idate = $_POST['issuedate'];
    $rdate = $_POST['returndate'];
    $bkid = $_POST['bookid'];
	$finedays = $_POST['finedays'];
    $totalfine = $_POST['totalfine'];


    $insert_book = "INSERT INTO history (admission_no, issue_date, return_date, book_id) 
    values ('$adm','$idate','$rdate','$bkid')";

    if ($conn->query($insert_book) == TRUE) {
        echo "<script>alert('Book Returned Successfully');</script>";
    } else {
        echo "Error: " . 'Some Errors Found' . "<br>" . $conn->error;
    }

    $conn->db = null;

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
    <title>Return Book</title>
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
                    <h2>Book Return</h2>
                </div>

                <form method="POST" action="" class="form-horizontal" novalidate>

                    <div class="form-group">
                        <label>Admission No</label>
                        <input type="text" name="admission_no" id="admission_no" class="form-control"
                               value="<?php echo $row["admission_no"]; ?>" readonly="">
                    </div>

                    <div class="form-group ">
                        <label>Book Id</label>
                        <input type="text" name="bookid" id="bookid" class="form-control"
                               value="<?php echo $row["book_id"]; ?>" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Issue Date</label>
                        <input type="date" name="issuedate" id="issuedate" class="form-control"
                               value="<?php echo $row["issue_date"]; ?>" readonly="">
                    </div>
                    <div class="form-group ">
                        <label>Recommeded Return Date</label>
                        <input type="date" name="returndate" id="returndate" class="form-control"
                               value="<?php echo $row["return_date"]; ?>" readonly="">
                    </div>
                    <?php
                    $today = date("Y-m-d");
                    ?>

                    <div class="form-group ">
                        <label>Student Return Date</label>
                        <input type="date" name="returndate" id="returndate" class="form-control"
                               value="<?php echo $today; ?>" readonly="">
                    </div>
                    <?php

                    $date1 = strtotime($row["return_date"]);
                    $date2 = strtotime($today);

                    $days = (($date2 - $date1) / 86400)
                    ?>

                    <div class="form-group ">
                        <label>Days to pay fine for</label>
                        <input type="text" name="finedays" id="finedays" class="form-control"
                               value="<?php echo $days; ?>">
                    </div>
                    <div class="form-group ">
                        <label>Fine Per Day</label>
                        <input type="text" name="fine" id="fine" class="form-control" value="200">
                    </div>
                    <?php
                    $total = $days * 500
                    //$days = (($date1 - $date2)/86400)
                    ?>
                    <div class="form-group ">
                        <label>Total Fine</label>
                        <input type="text" name="fine" id="fine" class="form-control" value="<?php echo $total; ?>">
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" Value="Save" class="btn btn-primary">
                        <a href="issue-book.php" class="btn btn-danger" type="reset"
                           value="Reset">Close</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

