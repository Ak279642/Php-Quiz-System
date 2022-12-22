<?php
include "header.php";
include "navbar.php";
if(isset($_SESSION["teacher_name"])){
    echo "<script>window.location.href='Dashboard.php';</script>";
    exit;
}
if(isset($_POST["login"])){
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $pass = mysqli_real_escape_string($conn, $_POST["pass"]);
  $sql = "SELECT * FROM teacher WHERE email='$email' AND pass='$pass'";
  $qry = mysqli_query($conn,  $sql);
  if($qry && $qry->num_rows > 0){
    $data = mysqli_fetch_assoc($qry);
    $_SESSION["teacher_name"] = $data["name"];
    echo "<script>window.location.href='Dashboard.php';</script>";
  }else{
    echo "<script>alert('Invalid Credentials');</script>";
  }
}
?>
 <div class="box">
 <form action="" method="POST">
     <h5 class="text-center text-uppercase">Teacher Login</h5>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="pass"  placeholder="Password" required>
  </div>

  <button type="submit" name="login" class="btn">Login</button>
</form>

 </div>
 <?php
include "footer.php";
?>