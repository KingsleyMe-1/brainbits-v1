<?php
    include_once("config.php");

    if(isset($_POST['update'])) {
        $id = $_POST['user_id'];
        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];
        $user_email = $_POST['user_email'];
        $user_kind = $_POST['user_kind'];
        $user_score = $_POST['user_score'];
        
        $result = mysqli_query($mysqli, "UPDATE new_user SET user_name='$user_name', user_password='$user_password', user_email='$user_email', user_kind='$user_kind', user_score='$user_score'  WHERE user_id='$id'");

        header("Location: adminUserManagement.php");
    }

    $id = $_GET['user_id'];

    $result = mysqli_query($mysqli, "SELECT user_name,user_password,user_email,user_kind,user_score FROM new_user WHERE user_id='$id'");

    while($user_data = mysqli_fetch_array($result)){
        $user_name = $user_data['user_name'];
        $user_password = $user_data['user_password'];
        $user_email = $user_data['user_email'];
        $user_kind = $user_data['user_kind'];
        $user_score = $user_data['user_score'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User Data</title>
    <link rel="stylesheet" href="adminEditData.css">
</head>
<body>
    <a href="adminUserManagement.php">Back</a>
    <br><br>

    <form method="post" action="adminEditData.php" class="formClass">
        <table border="0" >
            <tr>
                <td>Username:</td>
                <td><input type="text" name="user_name" style="width: 20em;" value=<?php echo $user_name;?>></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="text" name="user_password" style="width: 20em;" value=<?php echo $user_password;?>></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="user_email" style="width: 20em;" value=<?php echo $user_email;?>></td>
            </tr>

            <tr>
                <td>User:</td>
                <td><input type="text" name="user_kind" style="width: 20em;" value=<?php echo $user_kind;?>></td>
            </tr>

            <tr>
                <td>Score:</td>
                <td><input type="number" name="user_score" style="width: 20em;" value=<?php echo $user_score;?>></td>
            </tr>

            <tr>
                <td><input type="hidden" name="user_id" value=<?php echo $_GET['user_id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
