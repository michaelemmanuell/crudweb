<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

<!-- Add Data Form Start -->
<section id="addData" class="mt-5">
    <div class="container">
    <a href="index.php" class=btn btn-dark btn-sm>Back</a>
        <div class="card border-0 shadow">
            <div class="card-body">
                <form action="proccess/create.php" method="POST">
                    <!-- name -->
                                    <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <!-- position -->
                    <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" class="form-control" id="position" name="position" placeholder="Position" required>
                    </div>
                    <!-- Office -->
                    <div class="mb-3">
                    <label for="office" class="form-label">office</label>
                    <input type="text" class="form-control" id="office" name="office" placeholder="office" required>
                    </div>
                    <!-- age -->
                    <div class="mb-3">
                    <label for="age" class="form-label">age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="age" required>
                    </div>
                    <!-- Salary -->
                    <div class="mb-3">
                    <label for="salary" class="form-label">salary</label>
                    <input type="text" class="form-control" id="salary" name="salary" placeholder="salary" required>
                    </div>


                    <!-- card body end -->
                    
                    <!-- Submit Button -->
                    <div class="btnSubmit text-end">
                        <button type="submit" name="submit" class="btn btn-dark btn-md text-end">Submit</button>
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



