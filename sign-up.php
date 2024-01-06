<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $name = $_POST['nama'];
   $email = $_POST['email'];
   $status = $_POST['status'];
   $role = $_POST['role'];

   // Hash the password for security
   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   // Use prepared statement to prevent SQL injection
   $sql = "INSERT INTO users (username, password, nama, email, status, role) VALUES (?, ?, ?, ?, ?, ?)";

   $stmt = $conn->prepare($sql);
   $stmt->bind_param("ssssii", $username, $hashedPassword, $name, $email, $status, $role);

   if ($stmt->execute()) {
      echo "<script>alert('Pendaftaran berhasil');</script>";

      // Check the role and redirect accordingly
      if ($role == 1) {
         // Admin
         echo "<script>window.location='admin_dashboard.php';</script>";
      } elseif ($role == 2) {
         // User
         echo "<script>window.location='warga_dashboard.php';</script>";
      }
   } else {
      echo "Error: " . $stmt->error;
   }

   $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Register</title>
   <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <link rel="stylesheet" href="css/style1.css">
</head>

<body>
   <div class="center">
      <div class="container">
         <label for="show" class="close-btn fas fa-times" title="close" onclick="window.location.href='index.php';"></label>
         <div class="text">
            Register form
         </div>
         <form action="sign-up.php" method="post">
            <div class="data">
               <label>Username</label>
               <input type="username" name="username" required autocomplete="off">
            </div>
            <div class="data">
               <label>Password</label>
               <input type="password" name="password" required autocomplete="off">
            </div>
            <div class="data">
               <label>Name</label>
               <input type="name" name="nama" required autocomplete="off">
            </div>
            <div class="data">
               <label>Email</label>
               <input type="email" name="email" required autocomplete="off">
            </div>
            <div class="data">
               <label class="form-label d-block">Status</label>
               <div class="form-check form-check-inline mb-3">
                  <input class="form-check-input" type="radio" name="status" value="1" />
                  <label class="form-check-label">Active</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" value="2" />
                  <label class="form-check-label text-nowrap">Non Active</label>
               </div>

               <label class="form-label d-block">Role</label>
               <div class="form-check form-check-inline mb-3">
                  <input class="form-check-input" type="radio" name="role" value="1" />
                  <label class="form-check-label">Admin</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="role" value="2" />
                  <label class="form-check-label">User</label>
               </div>
               <div class="button">
                  <div class="inner"></div>
                  <button type="submit" name="register">Register</button>
               </div>
               <div class="signup-link">
                  Already have an account? <a href="sign-in.php">Login Now</a>
               </div>
            </div>
         </form>
      </div>
   </div>
</body>

</html>