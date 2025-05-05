<?php
include "dbconn.php";

var_dump($_REQUEST);
$sql = "call assign_compitem(?,?,?,?,?);";

$type = $_REQUEST["Type"];
$id = $_REQUEST["Number_ID"];
$garment = $_REQUEST["Garment"];
$size = $_REQUEST["Size"];
$owner = $_REQUEST["Athlete_Owner"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssiss", $owner, $type, $id, $garment, $size);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'athlete_gear.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>