<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Dhanny Hidayat Wijaya  Portofolio</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
  

</head>
<body class="bg-dark">
  <?php
                            
                            // include 'database.php';
                          
                            // $sql="select * from ['photo']";
                            // $hasil=mysqli_query($kon,$sql);
                            // $data=mysqli_fetch_array($hasil)
                            
                            ?>
<!-- partial:index.partial.html -->
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-light mt-5" style="font-family: poppins; font-weight: bold;">Dhanny</h2>
        <div class="text-center mb-5 text-light"style ="font-family: poppins;">Portofolio</div>
        <div class="card my-5">

          <form action="" method="POST" class="card-body cardbody-color1 p-lg-5">

            <div class="text-center">
              <img src="img/profile.svg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control " type="text" name="username" placeholder="Username atau email">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control " type="password" name="password" placeholder="Password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color1 px-5 mb-5 w-100" name="login" value="Masuk">Login</button></div>
          </form>
        </div>

      </div>
    </div>
  </div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.min.js'></script>
</body>
</html> 