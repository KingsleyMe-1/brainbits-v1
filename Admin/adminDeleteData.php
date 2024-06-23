<?php
    include_once("config.php");
    $id = $_GET['user_id'];

    $result = mysqli_query($mysqli, "DELETE FROM new_user WHERE user_id='$id'");

    header("Location: adminUserManagement.php");
?>