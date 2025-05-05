<?php
include "dbconn.php";

$sql = "delete from Team where Sport=?";
$sport = $_REQUEST["Sport"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $sport);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'teams.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>