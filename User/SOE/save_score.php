<?php
// Retrieve the data from the AJAX request



include_once("config.php");

$dataToInsert = $_POST['dataToInsert'];
$specificValue = $_SESSION['user_name1'];


// Insert the data into the database
mysqli_query($mysqli,"INSERT INTO new_user(user_score) VALUES('$dataToInsert') WHERE user_name ='$specificValue'");

echo $dataToInsert;
echo $specificValue;

?>
