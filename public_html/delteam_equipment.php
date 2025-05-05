<?php
include "dbconn.php";

$sql = "delete from Team_has_Equipment where Sport=? AND equipment_id=?";
$sport = $_REQUEST["Sport"];
$id = $_REQUEST["equipment_id"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $sport, $id);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'team_equipment.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>