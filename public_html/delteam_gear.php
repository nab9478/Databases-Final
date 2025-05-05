<?php
include "dbconn.php";

$sql = "delete from Team_has_Gear where Team_Sport=? AND Gear_Type=? AND Gear_NumberID = ?";
$sport = $_REQUEST["Team_Sport"];
$type = $_REQUEST["Gear_Type"];
$id = $_REQUEST["Gear_NumberID"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $sport, $type, $id);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'team_gear.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>