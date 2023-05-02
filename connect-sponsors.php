<?php
$con = mysqli_connect('localhost', 'root', '','project_database');

$username = $_POST['username'];
$password = $_POST['password'];
$companyname = $_POST['companyname'];
$email = $_POST['email'];
$sport1 = $_POST['sport1'];
$sport2 = $_POST['sport2'];
$sport3 = $_POST['sport3'];

do{
    $id = rand(100000, 999999);

    $result = $con->query("SELECT * FROM sponsors WHERE id = '$id'");
}
while($result->num_rows > 0);

$sql = "INSERT INTO `sponsors` (`username`, `password`,`companyname`,`email`,`sport1`,`sport2`,`sport3`, `id`) VALUES ('$username', '$password', '$companyname', '$email', '$sport1', '$sport2', '$sport3', '$id')";



$enterData = mysqli_query($con, $sql);

if ($enterData){
    echo("Account Created! Login using username and password.");
}   


?>

