<?php
include('index.php')
?>

<?php
include('dbconnection.php')
?>

<style>
    body {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-color: #D1C4E9;
        background-repeat: no-repeat
    }

    .container {
        margin: 200px auto
    }

    fieldset {
        display: none
    }

    fieldset.show {
        display: block
    }

    select:focus,
    input:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #2196F3 !important;
        outline-width: 0 !important;
        font-weight: 400
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0
    }

    .tabs {
        margin: 2px 5px 0px 5px;
        padding-bottom: 10px;
        cursor: pointer
    }

    .tabs:hover,
    .tabs.active {
        border-bottom: 1px solid #2196F3
    }

    a:hover {
        text-decoration: none;
        color: #1565C0
    }

    .box {
        margin-bottom: 10px;
        border-radius: 5px;
        padding: 10px
    }

    .modal-backdrop {
        background-color: #64B5F6
    }

    .line {
        background-color: #CFD8DC;
        height: 1px;
        width: 100%
    }

    @media screen and (max-width: 768px) {
        .tabs h6 {
            font-size: 12px
        }
    }

    .modal-content {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 0.3rem;
        outline: 0;
    }

    .modal-dialog-full-width2 {
        width: 80% !important;
        height: 100% !important;
        margin: 10 !important;
        padding: 5px !important;
        max-width: none !important;
        position: absolute;
        margin-left: 18%;
    }

</style>

<div class="page-content pt-2">

    <form id="showmembers">

        <div class="card-body">

            <input type="text" id="myInput" class="form-control1" onkeyup="myFunction()"
                   placeholder="Search by Admission No..">


            <div class="table-responsive">

                <br>

                <?php

                if (isset($_GET['corp_id']))

                    $corp_id = $_GET['corp_id'];
                $sql = "SELECT * from book";

                $result = $conn->query($sql);


                ?>

                <div class='inner'>
                    <?php
                    $query = "SELECT * from book";
                    //$query = "SELECT * FROM member_info";
                    $results = mysqli_query($conn, $query);
                    $row_count = mysqli_num_rows($results); // style='display:none'


                    echo "<table border='3'  class='table-wrapper-scroll-y my-custom-scrollbar' id='myTable' cellspacing='0' width='100%'> <tr>												
								<th>Book Code</th>
								<th>Book Name</th>
								<th>Book Author</th>
								<th>Book Publisher</th>
								<th>Department</th>
								
							</tr>";

                    while ($row = mysqli_fetch_array($results)) {
                        $adm = $row["idx"];
                        $nme = $row["book_name"];
                        $gender = $row["author"];
                        $mobno = $row["publisher"];
                        $email = $row["department"];


                        $sql = "SELECT * FROM book WHERE idx ='$adm'";
                        if ($stmt = $conn->prepare($sql)) {
                            $stmt->execute();
                            $stmt->store_result();
                        }

                        echo "<tr><td style='text-transform: uppercase;'>" . ($adm) . "</td> 
							<td>" . ($nme) . "</td>
							<td>" . ($gender) . "</td>
							<td>" . ($mobno) . "</td>
							<td>" . ($email) . "</td>
							
						
							</tr>";
                    }
                    echo "</table>";
                    mysqli_query($conn, $query);
                    mysqli_close($conn);


                    ?>


                </div>

            </div>

        </div>
</div>
</div>
</form>
</div>

<?php
include('footer.php')
?>

<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    $(document).ready(function () {
        $(".tabs").click(function () {
            $(".tabs").removeClass("active");
            $(".tabs h6").removeClass("font-weight-bold");
            $(".tabs h6").addClass("text-muted");
            $(this).children("h6").removeClass("text-muted");
            $(this).children("h6").addClass("font-weight-bold");
            $(this).addClass("active");
            current_fs = $(".active");
            next_fs = $(this).attr('id');
            next_fs = "#" + next_fs + "1";
            $("fieldset").removeClass("show");
            $(next_fs).addClass("show");
            current_fs.animate({}, {
                step: function () {
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'display': 'block'
                    });
                }
            });
        });
    });
</script>

