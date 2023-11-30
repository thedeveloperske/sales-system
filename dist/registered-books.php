<?php
include('index.php')
?>

<?php
include('dbconnection.php')
?>

<head>
	<link rel="stylesheet" href="css/schemestyle.css">
</head>

<style>
th {
    background-color: LightGreen;
    color: white;
	text-align: center;
	position: sticky;
  top: 0;
} 

a:hover{
    opacity: .7;
}
.imgcontainer {
  text-align: center;
  margin: 1px 0 12px 0;
}


img.avatar {
  width: 100%;
  border-radius: 0%;
}
.background {
  background-image: url('img/bgimg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 70% 70%;
 background-position: center;
 opacity: 10;
}
</style>


<?php
//include 'dbconnection.php';

$sql = 'select *
 from book';

$result = $conn->query($sql);

// get all publishers
//$result = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="page-content pt-2">
<div class="background">


<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
			<li class="breadcrumb-item active">Summary of All Registered Books</li>
		</ol>
			

   
		<div class="row">
			<div class="col-md-12">
				
				
				<div class="card-body">
					 <div class="table-responsive"  id="printdata">
					
						<div class="imgcontainer" >
							<div class="logo" style = "text-align: center;">
								
															
							</div>
							
						</div>
						
						<div class="page-header">
							<h3>Summary of all Registered Books</h3>
						</div>
					
				<div class='inner' > 
				
					<div class="table-wrapper-scroll-y my-custom-scrollbar">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						  <thead>
							<tr>
							  <th scope="col">Book Id</th>
							  <th scope="col">Book Name</th>
							  <th scope="col">Book Author</th>
							  <th scope="col">Book Publisher</th>
							  <th scope="col">Department</th>
							
							</tr>
						  </thead>
						  <tbody>
						   
						   
						 
							
							<?php if ($result) {
								// show the corporates
								foreach ($result as $corporate) {?>
								<tr>
								<td scope="row"><?php echo $corporate['idx'];?></td>
								<td><?php echo $corporate['book_name'];?></td>
								<td><?php echo $corporate['author'];?></td>
								<td><?php echo $corporate['publisher'];?></td>
								<td><?php echo $corporate['department'];?></td>
								
							</tr>
								<?php
								}
							}
							else{	
								echo'No Data Found';
							}
								?>
								
								
						
						  </tbody>
						</table>
					</div>
				</div>
			</div>
					
							<br />
						<button onclick="exportData()">
							<span class="glyphicon glyphicon-download"></span>
							Export
						</button>
						
						 <p>
							<input type="button" value="Print" 
							id="btPrint" onclick="createPDF()" />
						</p>
				</div>
			</div>        
		</div>
		
	


 
			<?php
		include('footer.php');
	?>	
               
  
			</div>
        </div>
		
		
       
	<script>	
	function exportData(){
    /* Get the HTML data using Element by Id */
    var table = document.getElementById("dataTable");

    /* Declaring array variable */
    var rows =[];

      //iterate through rows of table
    for(var i=0,row; row = table.rows[i];i++){
        //rows would be accessed using the "row" variable assigned in the for loop
        //Get each cell value/column from the row
        column1 = row.cells[0].innerText;
        column2 = row.cells[1].innerText;
        column3 = row.cells[2].innerText;
        column4 = row.cells[3].innerText;
        column5 = row.cells[4].innerText;
		column6 = row.cells[5].innerText;
		column7 = row.cells[6].innerText;
		


    /* add a new records in the array */
        rows.push(
            [
                column1,
                column2,
                column3,
                column4,
                column5,
				column6,
				column7
            ]
        );

        }
        csvContent = "data:text/csv;charset=utf-8,";
         /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
        rows.forEach(function(rowArray){
            row = rowArray.join(",");
            csvContent += row + "\r\n";
        });

        /* create a hidden <a> DOM node and set its download attribute */
        var encodedUri = encodeURI(csvContent);
        var link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "All Registered Books.csv");
        document.body.appendChild(link);
         /* download the data file named "Stock_Price_Report.csv" */
        link.click();
}
		
	</script>

<script>
    function createPDF() {
        var sTable = document.getElementById('printdata').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<title>All Registered Books</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close(); 	// CLOSE THE CURRENT WINDOW.

        win.print();    // PRINT THE CONTENTS.
    }
</script>	
 



