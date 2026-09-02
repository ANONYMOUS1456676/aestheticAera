<?php session_start() ?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELYS1UM : Create Account</title>

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
            <form action="signup.php" method="POST">
            <input type="text"  name="sname" placeholder="name" >
            <input type="text" name="semail" placeholder="email" >
            <input type="password" name="spass" placeholder="password" >
            <input type="text" name="number" placeholder="number" >
            <input type="checkbox" checked class="checkbox" id="terms-and-cond" >
            <label for="terms-and-cond">agree to our <a href="">terms and conditions</a></label>
            <br>
            <input type="checkbox" class="checkbox" id="notification">
            <label for="notification">recieve upcoming offers and events mails</a></label>
            <input type="submit" name="ssent" class="submit-btn" value="create account">
       </form> </div>
        <a href="login.php" class="link">already have an account? Log in here</a>
    </div>

    <script src="js/form.js"></script>
    <script src="js/token.js"></script>
</body>

</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['sname'];
    $email = $_POST['semail'];
    $pass = $_POST['spass'];
    $num= $_POST['number'];
    $_SESSION['Name']=$name;
    $_SESSION['Email']=$email;
    $_SESSION['password']=$pass;
  echo "<script>
                        alert('Welcome '.concat('".$_SESSION['Name']."'));
                        window.location.href='index.php';
                        </script>";

                        $conn = mysqli_connect("localhost", "root","","shop");
//     	$sql_query = "CREATE TABLE sign
// (Name varchar(20),
// Email varchar(30),
// Password varchar(20),
//  ContactNumber varchar(14))";
// mysqli_query($conn, $sql_query);

$sql_query="INSERT INTO `sign`
(`Name`, `Email`, `Password`,`ContactNumber`) 
VALUES 
('$name','$email','$pass','$num')";
 mysqli_query($conn, $sql_query);

}
?>