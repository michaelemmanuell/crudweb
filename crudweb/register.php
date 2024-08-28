<?php
include 'proccess/connection.php';
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
<div class="container justify-content-center">
    <a class="navbar-brand " href="#">Register Page</a>
</div>
</nav>
<!-- Navbar End-->

<!-- Register Start -->
<section id="register" mt-5>
    <div class="container">
        <div class="row d-flex flex-align-center justify-content-center">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="card" shadow>
                    <daiv class="card-body">
                        <form action="proccess/register.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" class="username" placeholder="Put your username">
                            </div>

                            <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" class="email" placeholder="Put your email">
                            </div>

                            <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Put your password">
                            </div>
                            <div class="mb-3">
                            <label for="Retype_password" class="form-label">Retype Password</label>
                            <input type="password" class="form-control" id="Retype_password" name="retype_password" placeholder="Put your Retype password">
                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn btn-dark btn-md w-100" name="register">
                                    Register
                                </button>
                            </div>
                            <p class="m-0 text-center">
                                Already have an account? <a href="login.php">Login</a>
                            </p>
                        </form>
                    </daiv>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Register End -->


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
</body>
</html>



