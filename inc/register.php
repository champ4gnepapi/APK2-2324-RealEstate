<?php
 @session_start();
 require_once 'functions.php';

// if (@$_SESSION['email']) {
//   if (@!$_SESSION['level']=="Admin") {
//     header("location:../inc/register.php");
//   } else {
//     if (@!$_SESSION['level']=="Petugas") {
//       header("location:../petugas/index.php");      
//     } elseif (@!$_SESSION['level']=="Penyewa") {
//       header("location:../penyewa/index.php");}
//       elseif (@!$_SESSION['level']=="Karyawan") {
//         header("location:../karyawan/index.php");}
//         elseif (@!$_SESSION['level']=="Owner") {
//           header("location:../owner/index.php");}
   
//   }
//   } 



if (isset($_POST["registrasi"])){
  if(registrasi($_POST)>0){
   echo "<script>
   alert('User baru berhasil ditambahkan!!!');
   document.location.href='login.php'</script>";

  }else {
    echo mysqli_error($KONEKSI);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Rumah123</title>
    <style>
        /* Mengatur body agar memiliki latar belakang gambar dan konten di tengah */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://img.lovepik.com//photo/40018/2122.jpg_860.jpg'); /* Ganti dengan URL gambar latar belakang Anda */
            background-size: cover; /* Membuat gambar menutupi seluruh latar belakang */
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Container untuk form register */
        .login-container {
            background-color: rgba(255, 255, 255, 0.9); /* Efek transparan di latar belakang form */
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Gaya untuk logo */
        .logo img {
            width: 150px;
            margin-bottom: 20px;
        }

        /* Judul halaman register */
        h2 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }

        /* Label dan input text */
        label {
            display: block;
            font-size: 14px;
            text-align: left;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Tombol register */
        button {
            width: 100%;
            padding: 12px;
            background-color: rgb(0, 0, 0);
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ffc451;
        }

        /* Footer dengan link login */
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .footer a {
            color: #ffc451;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

<div class="login-container">
    <div class="logo">
        <img src="../images/logo/logoo.png" alt="Logo Rumah123">
    </div>
    <h2>Create an Account</h2>
    <form action="dashboard.html" method="POST">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Create a password" required>

        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>

        <button type="submit">Register</button>
    </form>

    <div class="footer">
        <p>Already have an account? <a href="register.php">Login here</a></p>
    </div>
</div>

</body>
</html>
