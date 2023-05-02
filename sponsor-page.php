<?php
# Grab Sponsor Username and Password From HTML Form Submission
$username = $_POST["username"];
$password = $_POST["password"];

#Connect to Database
$con = mysqli_connect('localhost', 'root', '', 'project_database');

#Pull Sponsor Data From Table
$sponsorQuery = "SELECT * FROM sponsors WHERE username = '$username' AND password = '$password'";

$sponsorResult = mysqli_query($con, $sponsorQuery);

$sponsorRow = mysqli_fetch_assoc($sponsorResult);

#Define Variables for Sports
$sportOne = $sponsorRow["sport1"];
$sportTwo = $sponsorRow["sport2"];
$sportThree = $sponsorRow["sport3"];

#Pull Matching Students From Student Table
$sportOneQuery = "SELECT * FROM students WHERE sport = '$sportOne'";
$sportTwoQuery = "SELECT * FROM students WHERE sport = '$sportTwo'";
$sportThreeQuery = "SELECT * FROM students WHERE sport = '$sportThree'";

$sportOneResult = mysqli_query($con, $sportOneQuery);
$sportTwoResult = mysqli_query($con, $sportTwoQuery);
$sportThreeResult = mysqli_query($con, $sportThreeQuery);

#Create Associative Array Object With Student Info
$sportOneRow = mysqli_fetch_assoc($sportOneResult);
$sportTwoRow = mysqli_fetch_assoc($sportTwoResult);
$sportThreeRow = mysqli_fetch_assoc($sportThreeResult);

echo "<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: #F56D6D;
}
tr:nth-child(odd) {
    background-color: #ffcccc;
}
th {
    background-color: #A50303;
    color: white;
}
header {
    color: black;
    background-color: white;
    font-size: larger;
}
</style>";

echo "<header> First Choice Sport </header>";
#Create Array Containg Unique ID's and Output Tables With Student Info if Student ID Has Not Already Been Outputted
$uniqueIDs = array();
while ($sportOneRow) {
    if (!in_array($sportOneRow["id"], $uniqueIDs)) {
        $uniqueIDs[] = $sportOneRow["id"];
        echo "<table>";
        echo "<tr><th>First Name</th><td>" . $sportOneRow["fname"] . "</td></tr>";
        echo "<tr><th>Last Name</th><td>" . $sportOneRow["lname"] . "</td></tr>";
        echo "<tr><th>Phone</th><td>" . $sportOneRow["phone"] . "</td></tr>";
        echo "<tr><th>Email</th><td>" . $sportOneRow["email"] . "</td></tr>";
        echo "<tr><th>School</th><td>" . $sportOneRow["school"] . "</td></tr>";
        echo "<tr><th>Sport</th><td>" . $sportOneRow["sport"] . "</td></tr>";
        echo "<tr><th>Date of Birth</th><td>" . $sportOneRow["dob"] . "</td></tr>";
        echo "<tr><th>Year</th><td>" . $sportOneRow["year"] . "</td></tr>";
        echo "</table>";
    }
    $sportOneRow = mysqli_fetch_assoc($sportOneResult);
}

echo "<header> Second Choice Sport </header>";

while ($sportTwoRow) {
    if (!in_array($sportTwoRow["id"], $uniqueIDs)) {
        $uniqueIDs[] = $sportTwoRow["id"];
        echo "<table>";
        echo "<tr><th>First Name</th><td>" . $sportTwoRow["fname"] . "</td></tr>";
        echo "<tr><th>Last Name</th><td>" . $sportTwoRow["lname"] . "</td></tr>";
        echo "<tr><th>Phone</th><td>" . $sportTwoRow["phone"] . "</td></tr>";
        echo "<tr><th>Email</th><td>" . $sportTwoRow["email"] . "</td></tr>";
        echo "<tr><th>School</th><td>" . $sportTwoRow["school"] . "</td></tr>";
        echo "<tr><th>Sport</th><td>" . $sportTwoRow["sport"] . "</td></tr>";
        echo "<tr><th>Date of Birth</th><td>" . $sportTwoRow["dob"] . "</td></tr>";
        echo "<tr><th>Year</th><td>" . $sportTwoRow["year"] . "</td></tr>";
        echo "</table>";
    }
    $sportTwoRow = mysqli_fetch_assoc($sportTwoResult);
}

echo "<header> Third Choice Sport </header>";
while ($sportThreeRow) {
    if (!in_array($sportThreeRow["id"], $uniqueIDs)) {
        $uniqueIDs[] = $sportThreeRow["id"];
        echo "<table>";
        echo "<tr><th>First Name</th><td>" . $sportThreeRow["fname"] . "</td></tr>";
        echo "<tr><th>Last Name</th><td>" . $sportThreeRow["lname"] . "</td></tr>";
        echo "<tr><th>Phone</th><td>" . $sportThreeRow["phone"] . "</td></tr>";
        echo "<tr><th>Email</th><td>" . $sportThreeRow["email"] . "</td></tr>";
        echo "<tr><th>School</th><td>" . $sportThreeRow["school"] . "</td></tr>";
        echo "<tr><th>Sport</th><td>" . $sportThreeRow["sport"] . "</td></tr>";
        echo "<tr><th>Date of Birth</th><td>" . $sportThreeRow["dob"] . "</td></tr>";
        echo "<tr><th>Year</th><td>" . $sportThreeRow["year"] . "</td></tr>";
        echo "</table>";
    }
    $sportThreeRow = mysqli_fetch_assoc($sportTwoResult);
}



?>