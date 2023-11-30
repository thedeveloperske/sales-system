<?php   
 include 'dbconnection.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `student` WHERE admission_no = '$id'";  
     
 if(mysqli_query($conn, $query)){
  // echo "<script>alert('New Student Successfully registered');</script>";
	header('location:delete-student.php'); 
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
// Close connection
mysqli_close($conn);
?>
 
 
