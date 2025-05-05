<?php
include "dbconn.php";

$sql = "update Laundry_Loop set Number = ?, Color = ? where Athlete_NetID = ?";

$pkey = $_REQUEST["Athlete_NetID"];
$number = $_REQUEST["Number"];
$color = $_REQUEST["Color"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("iss", $number, $color, $pkey);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'loops.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>