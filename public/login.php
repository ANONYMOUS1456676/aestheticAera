<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AESTHETIC AERA : Log In </title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <img src="images/loader.gif" class="loader" alt="">

    <div class="alert-box">
        <img src="images/error.png" class="alert-img" alt="">
        <p class="alert-msg">Error message</p>
    </div>

    <div class="container">
        <img src="images/logo.png" class="logo" alt="">
        <div>
            <form action="login.php" method="POST">
            <input type="text"  name="name" placeholder="User Name">
            <input type="password" name="pass" placeholder="password">
            <input type="submit" name="sent" class="submit-btn" value="Log In">
        </form>
    </div>
        <a href="signup.php" class="link">Don't have an account? Create one </a>
    </div>

    <script src="js/form.js"></script>
    <script src="js/token.js"></script>
    
    
</body>
</html>
<?php


$conn = mysqli_connect("localhost", "root","","shop");
if($_SERVER["REQUEST_METHOD"]=="POST")
if(isset($_POST['sent'])){
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    if($name == "admin" && $pass=="admin" ){
        echo "<script>
        alert('Wecome Admin');
        window.location.href='main.php';
        </script>";

     }else{
    
    $_SESSION['Name']=$name;
    $_SESSION['password']=$pass;
  $sql = "SELECT * FROM sign where Name ='$name' and password='$pass'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count>0){
        echo "<script>
        alert('Welcome '.concat('".$_SESSION['Name']."'));
        
        window.location.href='index.php';
        </script>";
    }else{
        echo "<script>
        alert('Incorrect Usernme/Password');
        window.location.href='login.php';
        </script>";
    }
   
}
}
?>
