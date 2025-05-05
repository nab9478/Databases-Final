<?php
include "dbconn.php";

$sql = "update Team set Sport = ?, Season = ? where Sport = ?";

$pkey = $_REQUEST["Sport"];
$sport = $_REQUEST["Sport"];
$season = $_REQUEST["Season"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $sport, $season, $pkey);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'teams.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>