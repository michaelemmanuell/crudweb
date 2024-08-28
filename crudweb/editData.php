<?php
    include('proccess/connection.php');
    session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

    // cek apakah ada id atau tidak
    if(!isset($_GET['id'])){
        echo "ID tidak ditemukan";
    }

    // program di bawahnya tidak dijalankan (return false)
    // return false;


    // mendapatkan id melalui URL

    $id = $_GET['id']; 

    //program proses memilih data dari tabel berdasarkan id

    $sql = "SELECT * FROM data WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    $employee = mysqli_fetch_assoc($query);

    // cek apakah ada data di dalam tabel

    if(mysqli_num_rows($query) < 1){
        die("Data tidak ditemukan");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</link>
</head>
<body>
    
<!-- Navbar Start -->
<nav class="navbar navbar-light bg-white shadow">
<div class="container">
    <a class="navbar-brand" href="#">Management Dashboard</a>
</div>
</nav>
<!-- Navbar End-->

<!-- Edit Data Form Start -->
<section id="editData" class="mt-5">
    <div class="container">
    <a href="index.php" class=btn btn-dark btn-sm>Back</a>
        <div class="card border-0 shadow">
            <div class="card-body">
                <form action="proccess/update.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $employee['id'];?>">
                    <!-- name -->
                                    <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value = "<?php echo $employee['name']; ?>" placeholder="Your Name" required>
                    </div>
                    <!-- position -->
                    <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" class="form-control" id="position" name="position" 
                    value = "<?php echo $employee['position']; ?>"
                    placeholder="Position" required>
                    </div>
                    <!-- Office -->
                    <div class="mb-3">
                    <label for="Office" class="form-label">Office</label>
                    <input type="text" class="form-control" id="Office" name="office" 
                    value = "<?php echo $employee['office']; ?>"
                    placeholder="Office" required>
                    </div>
                    <!-- Age -->
                    <div class="mb-3">
                    <label for="Age" class="form-label">Age</label>
                    <input type="text" class="form-control" id="Age" name="age" 
                    value = "<?php echo $employee['age']; ?>"
                    placeholder="Age" required>
                    </div>
                    <!-- Salary -->
                    <div class="mb-3">
                    <label for="Salary" class="form-label">Salary</label>
                    <input type="text" class="form-control" id="Salary" name="salary" 
                    value = "<?php echo $employee['salary']; ?>"
                    placeholder="Salary" required>
                    </div>


                    <!-- card body end -->
                    
                    <!-- Submit Button -->
                    <div class="btnSubmit text-end">
                        <button type="submit" name="update" class="btn btn-dark btn-md text-end">Update</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Add Data Form End -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- DataTables JS -->

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap5.js"></script>

</body>
</html>



