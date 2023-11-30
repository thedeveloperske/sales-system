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


    $insert_book = "INSERT INTO history (admission_no, issue_date, return_date, book_id) 
    values ('$adm','$idate','$rdate','$bkid')";

    if ($conn->query($insert_book) == TRUE) {
        echo "<script>alert('Book Issued Successfully');</script>";
    } else {
        echo "Error: " . 'Some Errors Found' . "<br>" . $conn->error;
    }

    $conn->db = null;

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
        <title>Issue Book</title>
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
                        <h2>Issue Book</h2>
                    </div>

                    <form method="POST" action="" class="form-horizontal" novalidate>
                        <div class="form-group">
                            <label>Admission No</label>
                            <input type="text" name="admission_no" id="admission_no" class="form-control"
                                   value="<?php echo $row["admission_no"]; ?>" readonly="">
                        </div>
                        <div class="form-group ">
                            <label>Student Name</label>
                            <input type="text" name="s_name" class="form-control" value="<?php echo $row["s_name"]; ?>" readonly="">
                        </div>
                        <div class="form-group ">
                            <label>Book Id</label>
                            <input type="text" name="bookid" id="bookid" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Issue Date</label>
                            <input type="date" name="issuedate" id="issuedate" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label>Return Date</label>
                            <input type="date" name="returndate" id="returndate" class="form-control">
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

<?php
include('footer.php')
?>