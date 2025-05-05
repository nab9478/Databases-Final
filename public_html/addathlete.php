<?php
include "dbconn.php";

var_dump($_REQUEST);
$sql = "insert into Athlete (NetID, firstName, lastName, Year, Team_Sport) VALUES (?,?,?,?,?)";

$netid = $_REQUEST["NetID"];
$fname = $_REQUEST["firstName"];
$lname = $_REQUEST["lastName"];
$year = $_REQUEST["Year"];
$sport = $_REQUEST["Team_Sport"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssis", $netid, $fname, $lname, $year, $sport);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'athletes.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>