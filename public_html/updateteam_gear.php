<?php
include "dbconn.php";

$sql = "update Team_has_Gear set Team_Sport = ? where Gear_Type = ? AND Gear_NumberID = ?";

$pkey1 = $_REQUEST["Gear_Type"];
$pkey2 = $_REQUEST["Gear_NumberID"];
$sport = $_REQUEST["Team_Sport"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("sis", $sport, $pkey1, $pkey2);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'team_gear.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>