<?php   
 include 'dbconnection.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `book` WHERE idx = '$id'";  
     
 if(mysqli_query($conn, $query)){
  // echo "<script>alert('New Student Successfully registered');</script>";
	header('location:delete-book.php'); 
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
// Close connection
mysqli_close($conn);
?>