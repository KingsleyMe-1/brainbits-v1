<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Form</title>
    <link rel="stylesheet" href="SignUpStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <section class="portal">
        <form action="signUp.php" method="post" name="addUserForm">
            <div class="title">
                <h1>SIGN UP</h1>
                <p>Welcome User! Please enter your details</p>
            </div>
            <div>
                <?php if(isset($_GET['error'])) {?> 
                <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>
            </div>
            <div class="input-field">
                <input type="text" id="username" placeholder=" " name="userName" required autocomplete="off">
                <label for="username">Username</label>
            </div>
            <div class="input-field">
                <input type="password" id="password" placeholder=" " name="userPassword" required>
                <label for="password">Password</label>
            </div>
            <div class="input-field">
                <input type="password" id="password" placeholder=" " name="confirmPassword" required>
                <label for="password">Confirm Password</label>
            </div>
            <div class="input-field">
                <input type="text" id="Email" placeholder=" " name="userEmail" required>
                <label for="Email">Email</label>
            </div>
            <div class="select-field">
                <label for="select-field">What are you?</label>
                <div class="select-field-inner">
                    <div class="student-input">
                        <input type="radio" name="accessibility" id="accessibility" value="Student">Student
                    </div>   

                    <div class="others-input">
                        <input type="radio" name="accessibility" id="accessibility" value="Guest">Guest
                    </div>
                    
                </div>
            </div>
            <span>or</span>
            <button id="google-signin">
                <img src="assets/google.svg" alt="">
                Sign Up with Google
            </button>
            <input type="submit" name="Submit" value="Submit" id="signin">
        </form>
        
    </section>


    <?php
        include_once("config.php");

        if(isset($_POST['userName']) && isset($_POST['userPassword']) && isset($_POST['confirmPassword']) && isset($_POST['accessibility'])) {
                $user_kind = $_POST['accessibility'];
                $user_email = $_POST['userEmail'];


            function validate($data) {
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $user_name = validate($_POST['userName']);
            $user_password = validate($_POST['userPassword']);
            $user_confirm_password = validate($_POST['confirmPassword']);
        
            if(isset($_POST['Submit'])){

                $sql = "SELECT * FROM new_user WHERE user_name='$user_name' ";
		        $result = mysqli_query($mysqli, $sql);
    
                if($user_password !== $user_confirm_password) {
                    header("Location: signUp.php?error=The confirmation password does not match!!");
                    exit();
                }

                else if(mysqli_num_rows($result) > 0) {
                    header("Location: signUp.php?error=The username is taken!!!");
                    exit();
                }

                else {
                    $sql2 = "INSERT INTO new_user(user_name, user_password, user_email, user_kind) VALUES ('$user_name', '$user_password', '$user_email', '$user_kind')";
                    $result2 = mysqli_query($mysqli, $sql2);

                    header("Location: sucessfullyCreateAccount.php");
                }
            }
        }
        
        
    ?>
</body>
</html>