<?php
include('index.php')
?>
<?php
include ('dbconnection.php')
?>
<style>
.card{
  text-align: center;
}

</style>

<div class="page-content pt-2">
    <main>
        <div class="container-fluid">
           
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><h2>Library Managemeny System</h2></li>
            </ol>
			
			 <h1 class="mt-4">Dashboard</h1>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Registered Students</div>
						<div class="stat-panel text-center">
						 <h2 class="d-flex align-items-center mb-0">
                               <?php
								$sql = "SELECT count(*) FROM student ";
								$result = $conn->query($sql);
								  
								// Display data on web page
								while($row = mysqli_fetch_array($result)) {
									echo "". $row['count(*)'];
									echo "<br />";
								}
								   
								$conn->close();
								  
								?>
                            </h2>
						</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="registered_students.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
				 <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Total Books Registered</div>
						 <h2 class="d-flex align-items-center mb-0">
						 <?php
							    include ('dbconnection.php');
								$sql = "SELECT count(*) FROM book";
								$result = $conn->query($sql);
								  
								// Display data on web page
								while($row = mysqli_fetch_array($result)) {
									echo "". $row['count(*)'];
									echo "<br />";
								}
								   
								$conn->close();
								  
								?>
								</h2>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="registered-books.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Books Issued</div>
						 <h2 class="d-flex align-items-center mb-0">
                               <?php
							    include ('dbconnection.php');
								$sql = "SELECT count(*) FROM history where book_returned <> 1 ";
								$result = $conn->query($sql);
								  
								// Display data on web page
								while($row = mysqli_fetch_array($result)) {
									echo "". $row['count(*)'];
									echo "<br />";
								}
								   
								$conn->close();
								  
								?>
                            </h2>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="book-issued.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Fines</div>
						 <h2 class="d-flex align-items-center mb-0">
						 <?php
							    include ('dbconnection.php');
								$sql = "SELECT count(*) FROM history where total_fine > 0 ";
								$result = $conn->query($sql);
								  
								// Display data on web page
								while($row = mysqli_fetch_array($result)) {
									echo "". $row['count(*)'];
									echo "<br />";
								}
								   
								$conn->close();
								  
								?>
								</h2>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="payfines.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
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