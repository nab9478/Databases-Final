<?php
include "dbconn.php";

var_dump($_REQUEST);
$sql = "insert into Team_has_Equipment (Sport,equipment_id,Type, Location) VALUES(?,?,?,?)";

$sport = $_REQUEST["Sport"];
$id = $_REQUEST["equipment_id"];
$type = $_REQUEST["Type"];
$location = $_REQUEST["Location"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("siss", $sport, $id, $type, $location);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'team_equipment.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>