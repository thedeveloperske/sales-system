<?php
include('index.php')
?>
<?php
include('dbconnection.php')
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //save scheme
    $admno = $_POST['admno'];
    $name = $_POST['fullnames'];
    $sgender = $_POST['gender'];
    $fname = $_POST['fname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];


    $insert_student = "INSERT INTO student (admission_no,s_name,gender,f_name,mobile_no, email, address) 
values ('$admno','$name','$sgender','$fname','$contact','$email','$address')";

    if ($conn->query($insert_student) == TRUE) {
        echo "<script>alert('New Student Successfully registered');</script>";
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
                <li class="breadcrumb-item active">Add User</li>
            </ol>

            <body class="bg-primary">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <main>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                   
                                        <div class="card-header"><h4 class="text-center font-weight-light my-4"><i><b>Add
                                                        New Student</b></i></h4></div>
                                        <div class="card-body">
                                            <form method="POST" action="" class
                                            "form-horizontal" novalidate>
                                            <div class="form-row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Admission
                                                            No</label>
                                                        <input class="form-control" id="admno" name="admno"
                                                               type="text" placeholder="Enter Username"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="fullnames">Student Name</label>
                                                        <input class="form-control" id="fullnames" name="fullnames"
                                                               type="text" placeholder="Enter Full Names"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="gender">Gender</label>
                                                        <input type="radio" name="gender" id="gender"
                                                            <?php if (isset($gender) && $gender == "female") echo "checked"; ?>
                                                               value="female">Female
                                                        <input type="radio" name="gender"
                                                            <?php if (isset($gender) && $gender == "male") echo "checked"; ?>
                                                               value="male">Male
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="department">Fathers Name</label>
                                                        <input type="text" name="fname" id="fname" class="form-control"
                                                               placeholder="Enter Fathers Name">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="email">Contact No</label>
                                                        <input class="form-control" id="contact" name="contact"
                                                               type="text"
                                                               aria-describedby="emailHelp"
                                                               placeholder="Enter Contact No"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="password">Email Id</label>
                                                        <input class="form-control" id="email" name="email"
                                                               type="email" placeholder="Enter Email"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="address">Address</label>
                                                        <input class="form-control" id="address"
                                                               name="address" type="text"
                                                               placeholder="Enter Address"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <input type="submit" name="submit" Value="Save" class="btn btn-primary">
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



