<?php
include('index.php')
?>
<?php
include('dbconnection.php')
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //save scheme
    $username=$_POST['username'];
    $fullnames=$_POST['fullnames'];
    $userpass=$_POST['password'];
    $conpass=$_POST['confirmpassword'];


    $insert_user="INSERT INTO login (username,password,fullnames) 
values ('$username','$userpass','$fullnames')";

    if($conn->query($insert_user) == TRUE ){
        echo"<script>alert('New User Successfully registered');</script>";
    }
    else{
        echo "Error: " . 'Some Errors Found' . "<br>" . $conn->error;
    }

    $conn->db = null;

}

?>

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
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h4 class="text-center font-weight-light my-4">Create User Account</h4></div>
                                    <div class="card-body">
                                        <form method="POST" action="" class "form-horizontal" novalidate>
                                            <div class="form-row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Username</label>
                                                        <input class="form-control" id="username" name="username" type="text" placeholder="Enter Username" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="fullnames">Full Names</label>
                                                        <input class="form-control" id="fullnames" name="fullnames" type="text"  placeholder="Enter Full Names" />
                                                    </div>
                                                </div>
                                            </div >
											
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="password">Password</label>
                                                        <input class="form-control" id="password" name="password" type="password" placeholder="Enter password" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="confirmpassword">Confirm Password</label>
                                                        <input class="form-control" id="confirmpassword" name="confirmpassword" type="password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                            </div>

                                        <div class="text-center">
                                            <input type="submit" name="submit" Value="Save" class="btn btn-primary">
                                            <a href="dashboard.php" class="btn btn-danger" type="reset" value="Reset">Close</a>
                                        </div>
									   </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
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



