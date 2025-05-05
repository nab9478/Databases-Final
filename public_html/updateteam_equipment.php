<?php
include "dbconn.php";

$sql = "update Team_has_Equipment set Sport = ?, Location = ? where Type = ? AND equipment_id = ?";

$pkey1 = $_REQUEST["Type"];
$pkey2 = $_REQUEST["equipment_id"];
$sport = $_REQUEST["Sport"];
$location = $_REQUEST["Location"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $sport, $location, $pkey1, $pkey2);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'team_equipment.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>