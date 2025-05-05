<?php
include "dbconn.php";

var_dump($_REQUEST);
$sql = "insert into Team_has_Gear (Team_Sport, Gear_Type, Gear_NumberID) VALUES (?,?,?)";

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