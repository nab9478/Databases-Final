<?php
include "dbconn.php";

$sql = "delete from Laundry_Loop where Athlete_NetID=?";
$netid = $_REQUEST["Athlete_NetID"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $netid);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'loops.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>