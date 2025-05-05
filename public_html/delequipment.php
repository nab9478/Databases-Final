<?php
include "dbconn.php";

$sql = "delete from equipment where equipment_id=?";
$netid = $_REQUEST["equipment_id"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $netid);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'equipment.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>