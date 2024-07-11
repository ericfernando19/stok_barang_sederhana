<?php
  require 'function.php';

//cek login terdaftar
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
//cek dengan database
  $cekdatabase = mysqli_query($conn,"SELECT * FROM login where email='$email' and password='$password'");
//hitung jumlah data
  $hitung = mysqli_num_rows($cekdatabase);

  if($hitung>0){
    $_SESSION['log'] = 'True';
    header('location:index.php');
  }else{
    header('location:login.php');
  };
};
if(!isset($_SESSION['log'])){

}else{
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
      }
      .background-image {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
      }
      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        position: relative;
        z-index: 1;
      }
      .card {
        background: rgba(255, 255, 255, 0.4); /* Transparansi pada card */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        overflow: hidden;
        width: 100%;
        max-width: 350px; /* Lebar card diubah menjadi lebih kecil */
        margin: 20px;
      }
      .card-header {
        background: rgba(247, 247, 247, 0.5); /* Transparansi pada header card */
        border-bottom: 1px solid #ddd;
        padding: 20px;
        text-align: center;
      }
      .card-header h3 {
        margin: 0;
      }
      .card-header img {
        border-radius: 50%;
        margin-top: 15px;
      }
      .card-body {
        padding: 20px; /* Mengurangi padding pada card body */
      }
      .form-group {
        margin-bottom: 15px; /* Mengurangi margin bawah pada form group */
      }
      .form-group label {
        margin-bottom: 10px;
        display: block;
        font-size: 14px;
        color: #333;
      }
      .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        box-sizing: border-box;
      }
      .btn-success {
        background: #28a745;
        border: none;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
      }
      .btn-success:hover {
        background: #218838;
      }
    </style>
  </head>
  <body>
    <img src="image/bg pantai.jpg" class="background-image" alt="Background Image">
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h3 class="font-weight-light">Login</h3>
          <img src="image/logo1.jpg" alt="Gambar di dalam lingkaran" height="100" width="100">
        </div>
        <div class="card-body">
          <form method="post">
            <div class="form-group">
              <label for="inputEmailAddress">Email</label>
              <input
                class="form-control"
                name="email"
                id="inputEmailAddress"
                type="email"
                placeholder="Enter email address"
              />
            </div>
            <div class="form-group">
              <label for="inputPassword">Password</label>
              <input
                class="form-control"
                name="password"
                id="inputPassword"
                type="password"
                placeholder="Enter password"
              />
            </div>
            <button class="btn btn-success" name="login">Login</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
