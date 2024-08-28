<?php
    include ('connection.php');
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: ../index.php");
        exit();
    }

    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = hash('sha256', $_POST['password']);
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: ../index.php");
            exit();
        }else{
            echo "<script>alert('Username atau Password yang anda masukkan salah!')</script>";
            header("Location: ../login.php");
        }
    }
?>