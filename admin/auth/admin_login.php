<?php 
require "../config/db.php";
session_start();
$email=$password="";
$loginerr="";
function santization($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
if($_SERVER['REQUEST_METHOD']=="POST"){
    $email=santization($_POST['email']);
    $password=$_POST['password'];
   $sql="SELECT * FROM admin WHERE email = ? AND status = 1";
   $stmt=mysqli_prepare($conn,$sql);
   if($stmt){
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    $user=mysqli_fetch_assoc($result);
    if($user&&password_verify($password,$user['password'])){
        session_regenerate_id(true);

            $_SESSION['admin_id'] = $user['admin_id'];
            $_SESSION['admin_email'] = $user['email'];
            $_SESSION['admin_name'] = $user['first_name'];

            header("Location: ../index.php");
            exit();
    }
    else{
        $loginerr="Invalid Email or Password";
    }
      mysqli_stmt_close($stmt);
   }else {
        $loginerr = "Something went wrong. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login</title>

    <link rel="stylesheet" href="../assests/css/admin_login.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <div class="admin-login-card">

        <h1>Admin Area Login</h1>

        <p class="subtitle">
            Enter <strong>Account Email Address</strong>
            and <strong>Password</strong>
        </p>

        <form method="POST" class="login-form">

            <p class="login-error">
                <?php echo htmlspecialchars($loginerr); ?>
            </p>

            <input
                type="email"
                name="email"
                placeholder="Enter Email Address"
                value="<?php echo htmlspecialchars($email); ?>"
                required
            >
<div class="password-field">

    <input
        type="password"
        name="password"
        id="password"
        placeholder="Enter Password"
        required
    >

    <i class="fa-solid fa-lock toggle-password"
       id="toggleIcon"
       onclick="togglePassword()"></i>

</div>

            <button type="submit">Log In Now</button>

            <a href="#">Forgot Password? Click to Reset</a>

        </form>

    </div>

<script>
function togglePassword() {

    let password = document.getElementById("password");
    let icon = document.getElementById("toggleIcon");

    if (password.type === "password") {

        password.type = "text";

        icon.classList.remove("fa-lock");
        icon.classList.add("fa-lock-open");

    } else {

        password.type = "password";

        icon.classList.remove("fa-lock-open");
        icon.classList.add("fa-lock");

    }
}
</script>
</body>

</html>