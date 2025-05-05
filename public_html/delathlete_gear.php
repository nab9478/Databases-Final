<?php
include "dbconn.php";

$sql = "delete from Gear where Type=? AND Number_ID=?";
$type = $_REQUEST["Type"];
$Number_ID = $_REQUEST["Number_ID"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $type, $Number_ID);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'athlete_gear.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>