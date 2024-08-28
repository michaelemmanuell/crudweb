<?php
include 'proccess/connection.php';
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

// $result = mysqli_query(mysqli, "SELECT * FROM data ORDER BY id DESC")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</link>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.bootstrap5.css">

</head>
<body>
    
<!-- Navbar Start -->
<nav class="navbar navbar-light bg-white shadow">
<div class="container">
    <a class="navbar-brand" href="#">Welcome, <?php echo $_SESSION['username']; ?></a>
    <form action="proccess/logout.php" method="POST">
        <button type="submit" class="btn btn-danger btn-sm" onclick="logoutFunction()" name="logout">Logout
        </button>
    </form>
</div>
</nav>
<!-- Navbar End-->



<section id="dataTables" class="mt-3">
    <div class="container">
        <div class="addBtn my-3 text-end">
            <a href="addData.php" class="btn btn-dark btn-sm">Add Data</a>
        </div>
    <div class="card border-0 shadow mt-5">
        <div class="card-body">
        <table id="example" class="table table-striped mt-5" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Position</th>
                <!-- <th>Office</th>
                <th>Age</th> -->
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $number = 1;
                $sql = "SELECT * FROM data ORDER BY id DESC";
                $query = mysqli_query($conn, $sql);

                while($data = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$number."</td>";
                echo "<td class='text-capitalize'>".$data['name']."</td>";
                echo "<td>".$data['position']."</td>";
                echo "<td>".$data['salary']."</td>";
                
                echo "<td>";
                echo "<a href='detailData.php?id=".$data['id']."' class='btnDetail btn btn-primary btn-sm me-2'>Detail</a>";
                echo "<a href='editData.php?id=".$data['id']."' class='btnEdit btn btn-success btn-sm me-2'>Edit</a>";
                echo "<a href='proccess/delete.php?id=".$data['id']."' class='btnDelete btn btn-danger btn-sm'>Delete</a>";
                echo "</td>";

                echo "</tr>"; 
                $number++;
                }
                
            ?>
            <!-- <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td> -->
                <!-- <td>Edinburgh</td>
                <td>61</td> -->
                <!-- <td>2011-04-25</td>
                <td>$320,800</td>
                <td>
                    <a href="detailData.php" class="btnDetail  btn btn-info btn-sm">Detail</a>
                    <a href="editData.php" class="btnDetail  btn btn-success btn-sm">Edit</a>
                    <a href="#" class="btnDetail  btn btn-danger btn-sm">Delete</a>
                </td> -->
            </tr>
</tbody>
</table>
        </div>
    </div>
    </div>
</section>

<!-- DataTables HTML Start-->



<!-- Datatables HTML End -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- DataTables JS -->

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap5.js"></script>


<script type="text/javascript">
new DataTable('#example');
</script>
<script type="text/javascript">
function logoutFunction(){
    confirm("Do you want to Logout?");
}

</script>
</body>
</html>



