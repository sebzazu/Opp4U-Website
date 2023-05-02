<?php
$username = $_POST["username"];
$password = $_POST["password"];

$con = mysqli_connect('localhost', 'root', '', 'project_database');

$result = $con->query("SELECT * FROM sponsors WHERE username = '$username' AND password = '$password'");

if ($result->num_rows==1){
    $response = array("submit"=>true);
}
else {
    $response = array("submit"=>false);
}

echo json_encode($response);

?>
