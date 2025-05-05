<?php
include "dbconn.php";

$sql = "update Gear set Garment = ?, Size = ?, Athlete_Owner = ? where Type = ? AND Number_ID = ?";

$pkey1 = $_REQUEST["Type"];
$pkey2 = $_REQUEST["Number_ID"];
$garment = $_REQUEST["Garment"];
$size = $_REQUEST["Size"];
$owner = $_REQUEST["Athlete_Owner"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $garment, $size, $owner, $pkey1, $pkey2);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'athlete_gear.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>