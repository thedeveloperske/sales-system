<?php
include('index.php')
?>
<?php
include('dbconnection.php')
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //save book
    $bkname = $_POST['bookname'];
    $author = $_POST['author'];
    $department = $_POST['department'];
    $publisher = $_POST['publisher'];
    $dateentered = $_POST['de'];

    $insert_book = "INSERT INTO book (book_name, author, department, publisher, date_entered) 
    values ('$bkname','$author','$department','$publisher','$dateentered')";

    if ($conn->query($insert_book) == TRUE) {
        echo "<script>alert('New Book Successfully Added');</script>";
    } else {
        echo "Error: " . 'Some Errors Found' . "<br>" . $conn->error;
    }

    $conn->db = null;

}

?>

<style>
.bg-primary {
    background-color: white!important;
}
</style>

<div class="page-content pt-2">
    <main>
        <div class="container-fluid">

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Book</li>
            </ol>

            <body class="bg-primary">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <main>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                   
                                        <div class="card-header"><h4 class="text-center font-weight-light my-4"><i><b>Add
                                                        New Book</b></i></h4></div>
                                        <div class="card-body">
                                            <form method="POST" action="" class="form-horizontal" novalidate>
                                                <div class="form-row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="inputLastName">Book Code
                                                            </label>
                                                            <input class="form-control" id="code" name="code"
                                                                   type="text"  readonly=""/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="fullnames">Book Name</label>
                                                            <input class="form-control" id="bookname" name="bookname"
                                                                   type="text" placeholder="Enter Book Name"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="author">Author</label>
                                                            <input type="text" name="author" id="author"
                                                                   class="form-control" placeholder="Enter Author">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="dep">Department</label>
                                                            <input class="form-control" id="department"
                                                                   name="department" type="text"
                                                                   placeholder="Enter Department"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="Publisher">Publisher</label>
                                                            <input class="form-control" id="publisher" name="publisher"
                                                                   type="text" placeholder="Enter Publisher"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="de">Date Entered</label>
                                                            <input class="form-control" id="de"
                                                                   name="de" type="date"
                                                                   placeholder="Enter date"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <input type="submit" name="submit" Value="Save"
                                                           class="btn btn-primary">
                                                    <a href="dashboard.php" class="btn btn-danger" type="reset"
                                                       value="Reset">Close</a>
                                                </div>
                                            </form>
                                        </div>
                                  
                                </div>
                            </div>
                        </div>
                    </main>
                </div>

                <?php
                include('footer.php')
                ?>
            </div>

            </body>
        </div>



