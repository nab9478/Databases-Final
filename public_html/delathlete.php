<?php
include "dbconn.php";

$sql = "delete from Athlete where NetID=?";
$netid = $_REQUEST["NetID"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $netid);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'athletes.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>