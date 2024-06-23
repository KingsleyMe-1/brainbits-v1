<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="loginStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&display=swap" rel="stylesheet">

    

</head>
<body>
    <section class="portal">
        <form action="login.php" method="post" name="addUserForm">
            <div class="title">
                <h1>LOG IN</h1>
                <p>Welcome back! Please enter your details.</p>
            </div>
            <div>
                <?php if(isset($_GET['error'])) {?> 
                <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>
            </div>
            <button id="google-signin">
                <img src="assets/google.svg" alt="">
                Log in with Google
            </button>
            <span>or</span>
            <div class="input-field">
                <input type="text" id="username" placeholder=" " name="userName" required autocomplete=off>
                <label for="username">Username</label>
            </div>
            <div class="input-field">
                <input type="password" id="password" placeholder=" " name="userPassword" required>
                <label for="password">Password</label>
            </div>
            <a href="#" id="forgot-pass">Forgot Password</a>
            <input id="signin" type="submit" name="Submit" value="Login">
            <p id="signup">
                Don't have an account?
                <a href="signUp.php">Sign up here</a>
            </p>
        </form>
    </section>

    <?php
        include_once("config.php");

        if(isset($_POST['userName']) && isset($_POST['userPassword'])) {

            function validate($data) {
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $login_name = validate($_POST['userName']);
            $login_password = validate($_POST['userPassword']);
    
        
            if(isset($_POST['Submit'])){

                $sql = "SELECT * FROM new_user WHERE user_name='$login_name' AND user_password='$login_password'";
                $sqlAdmin = "SELECT * FROM admin WHERE admin_name='$login_name' AND admin_password='$login_password'";
                

                $result = mysqli_query($mysqli, $sql);
                $resultAdmin = mysqli_query($mysqli, $sqlAdmin);
                

                if (mysqli_num_rows($result) === 1) {
                    $row = mysqli_fetch_assoc($result);
                    if ($row['user_name'] == $login_name && $row['user_password'] == $login_password) {
                        session_start();
                        $_SESSION['user_name1'] = $row['user_name'];
                        header("Location: ./User/userDashboardMain.php");
                    }
                    else{
                        header("Location: login.php?error=Incorect Username or password!");
                    }
                }
                else if (mysqli_num_rows($resultAdmin) === 1) {
                    $row = mysqli_fetch_assoc($resultAdmin);
                    if ($row['admin_name'] == $login_name && $row['admin_password'] == $login_password) {
                        session_start();
                        $_SESSION['admin_name'] = $row['admin_name'];
                        header("Location: ./Admin/adminDashboardMain.php");
                    }
                    else{
                        header("Location: login.php?error=Incorect Username or password!");
                    }
                }
                else{
                    header("Location: login.php?error=Incorect User name or password");
                }
            }
        } 
    ?>
</body>
</html>