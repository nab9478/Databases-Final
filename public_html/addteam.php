<?php
include "dbconn.php";

var_dump($_REQUEST);
$sql = "insert into Team (Sport,Season) VALUES(?,?)";

$sport = $_REQUEST["Sport"];
$season = $_REQUEST["Season"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $sport, $season);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'teams.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>