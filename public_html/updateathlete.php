<?php
include "dbconn.php";

$sql = "update Athlete set firstName = ?, lastName = ?, Year = ?, Team_Sport = ? where NetID = ?";

$pkey = $_REQUEST["NetID"];
$firstName = $_REQUEST["firstName"];
$lastName = $_REQUEST["lastName"];
$year = $_REQUEST["Year"];
$sport = $_REQUEST["Team_Sport"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssiss", $firstName, $lastName, $year, $sport, $pkey);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'athletes.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>