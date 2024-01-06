<?php
session_start();
include('koneksi.php');

function redirect($url)
{
   echo "<script>window.location='$url';</script>";
   exit();
}

if (isset($_POST['login'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];

   // Use prepared statement to prevent SQL injection
   $sql = "SELECT * FROM users WHERE email=?";
   $stmt = mysqli_prepare($conn, $sql);
   mysqli_stmt_bind_param($stmt, 's', $email);
   mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt);

   if (!$result) {
      die("Error: " . mysqli_error($conn));
   }

   $count = mysqli_num_rows($result);

   if ($count == 1) {
      $row = mysqli_fetch_assoc($result);
      if (password_verify($password, $row['password'])) {
         $_SESSION['email'] = $email;

         // Check the user's role and redirect accordingly
         if ($row['role'] == 1) {
            // Admin
            redirect('admin_dashboard.php');
         } elseif ($row['role'] == 2) {
            // User
            redirect('warga_dashboard.php');
         }
      } else {
         echo "<script>alert('Password Salah');</script>";
      }
   } else {
      echo "<script>alert('Email tidak ditemukan');</script>";
   }

   mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Login</title>
   <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <link rel="stylesheet" href="css/style1.css">
</head>

<body>
   <div class="center">
      <div class="container1">
         <label for="show" class="close-btn fas fa-times" title="close" onclick="window.location.href='index.php';"></label>
         <div class="text">
            Login Form
         </div>
         <form action="sign-in.php" method="post">
            <div class="data">
               <label>Email</label>
               <input type="email" name="email" required autocomplete="off">
            </div>
            <div class="data">
               <label>Password</label>
               <input type="password" name="password" required autocomplete="off">
            </div>
            <div class="button">
               <div class="inner"></div>
               <button type="submit" name="login">login</button>
            </div>
            <div class="signin-link">
               Don't have an account? <a href="sign-up.php">SignUp Now</a>
            </div>
         </form>
      </div>
   </div>
</body>

</html>