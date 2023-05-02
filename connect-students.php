<?php
$con = mysqli_connect('localhost', 'root', '','project_database');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$school = $_POST['school'];
$sport = $_POST['sport'];
$dob = $_POST['dob'];
$year = $_POST['year'];

do{
    $id = rand(100000, 999999);
    $result = $con->query("SELECT * FROM students WHERE id = '$id'");
}
while($result->num_rows > 0);

$sql = "INSERT INTO `students` (`fname`,`lname`,`phone`,`email`,`school`,`sport`,`dob`,`year`,`id`) VALUES ('$fname', '$lname', '$phone','$email','$school','$sport','$dob','$year','$id')";


$enterData = mysqli_query($con, $sql);

if ($enterData){
    echo("Data inserted succesfully");

}

?>

