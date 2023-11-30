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
    mysqli_query($conn, "UPDATE book set book_name='" . $_POST['book_name'] . "' ,author='" . $_POST['author'] . "',
publisher='" . $_POST['publisher'] . "', department='" . $_POST['department'] . "' WHERE idx='" . $_POST['idx'] . "'");
    $message = "Record Modified Successfully";
	echo "<script>alert('Record Successfully Modified');</script>";

}
if (mysqli_query($link, $sql)) {
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

if (isset($_GET['idx'])) {
    $id = $_GET['idx'];
    $result = mysqli_query($conn, "SELECT * FROM book WHERE idx='" . $id . "'");
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
                        <label>Book Code</label>
                        <input type="text" name="idx" class="form-control" value="<?php echo $row["idx"]; ?>"
                               readonly="">
                    </div>
                    <div class="form-group ">
                        <label>Book Name</label>
                        <input type="text" name="book_name" class="form-control"
                               value="<?php echo $row["book_name"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Book Author</label>
                        <input type="mobile" name="author" class="form-control" value="<?php echo $row["author"]; ?>">
                    </div>
                    <div class="form-group ">
                        <label>Book Publisher</label>
                        <input type="text" name="publisher" class="form-control"
                               value="<?php echo $row["publisher"]; ?>">
                    </div>
                    <div class="form-group ">
                        <label>Department</label>
                        <input type="text" name="department" class="form-control"
                               value="<?php echo $row["department"]; ?>">
                    </div>

                    <input type="hidden" name="idx" value="<?php echo $row["idx"]; ?>"/>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="update-book.php" class="btn btn-default">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>