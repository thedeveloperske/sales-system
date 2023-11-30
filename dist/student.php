<?php
include('index.php')
?>

    <div class="page-content pt-2">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4" style="text-align: center;"><i>Student</i></h1>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Add</div>

                            <img class="img-responsive img-rounded" src="img/add.png" alt="User picture">
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="add-student.php">Click to add</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Delete</div>
                            <img class="img-responsive img-rounded" src="img/user_delete.png" alt="User picture">
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="delete-student.php">Click to Delete</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Update</div>
                            <img class="img-responsive img-rounded" src="img/update_member.png" alt="User picture">
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="update-student.php">Click to Update</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Search</div>
                            <img class="img-responsive img-rounded" src="img/search_member.png" alt="User picture">
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="search-student.php">Click to Search</a>
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