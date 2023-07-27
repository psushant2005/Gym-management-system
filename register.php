<?php
session_start();
// header('location:index.php');
// include 'config1.php';

$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config1.php';
    $username = $_POST["username"];
    $email=$_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `email`,`password`) VALUES ('$username', '$email' ,'$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
            echo "<script>
                alert(\" success\");
                window.location = \"index.php\"
              </script>";
        }
    }
    else{
        $error[] = 'password not matched!';
    }
    // $result = mysqli_query($conn,$sql);
    // $num = mysqli_num_rows($result);
    // if ($num == 1) {
    //     header('location:index.php');
    // } else {
    //     header('location:login.php');
    // }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> USER REGISTRATION</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="register.css">
   <style>
        *{
            margin:0
            padding:0;
        }
        body{
            background:url("images/register.jpeg") center no-repeat;
            height:80vh;
            background-size:cover

        }
        
    </style>

</head>
<body>
<?php require '_nav1.php' ?>
   
<div class="form-container">

   <form action="" method="post">
      <h3 style="color: #f734cd"> USER REGISTER</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="username" required placeholder="Set user name" style="background:  hsla(206, 20%, 93%, 0.5);">
      <input type="email" name="email" required placeholder="Enter your email" style="background:  hsla(206, 20%, 93%, 0.5);">
      <input type="password" name="password" required placeholder="Set password" style="background:  hsla(206, 20%, 93%, 0.5);">
      <input type="password" name="cpassword" required placeholder="Confirm password" style="background:  hsla(206, 20%, 93%, 0.5);">
      
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p style="color: white;">already registered ? <a href="payment.php"  style="color:#f734cd;">Become member</a></p>
   </form>

</div>

</body>
</html>