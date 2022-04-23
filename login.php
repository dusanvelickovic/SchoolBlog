<?php
  include 'includes/init.php';
  include 'includes/header.php';
  include 'includes/navigation.php';
?>
<div class="login-form">
  <div class="container">
    <div class="header">
      <h1>Prijava</h1>
    </div>
    <div class="form">
      <form action="login.php" method="post">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="submit" value="Prijavite se">
      </form>
      <?php
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $email = mysqli_real_escape_string($connection, $email);
            $password = mysqli_real_escape_string($connection, $password);

            $query = "SELECT * FROM `users` WHERE user_email = '$email'";

            $result = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($result)){
                $user_id = $row['user_id'];
                $user_email = $row['user_email'];
                $user_pwd = $row['user_pwd'];
                $user_uid = $row['user_uid'];
                $user_admin = $row['user_admin'];
                $user_image = $row['user_image'];
            }
            if($user_email == $email && password_verify($password, $user_pwd) && $user_admin == 1){
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_uid'] = $user_uid;
                $_SESSION['user_admin'] = $user_admin;
                $_SESSION['user_image'] = $user_image;
                header("Location: admin/index.php");
              }
              else if($user_email == $email && password_verify($password, $user_pwd) && $user_admin == 0){
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_uid'] = $user_uid;
                $_SESSION['user_admin'] = $user_admin;
                $_SESSION['user_image'] = $user_image;
                header("Location: index.php");
            } 
            else{
                echo "<h2 style='text-align:center'>Neuspešna prijava</h2>";
            }
        }
        ?>
  </div>
</div>   
</div>
</body>
</html>