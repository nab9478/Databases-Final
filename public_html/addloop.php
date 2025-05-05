<?php
include "dbconn.php";

var_dump($_REQUEST);
$sql = "call assign_loop(?,?,?);";

$netid = $_REQUEST["Athlete_NetID"];
$number = $_REQUEST["Number"];
$color = $_REQUEST["Color"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $netid, $color, $number);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'loops.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>