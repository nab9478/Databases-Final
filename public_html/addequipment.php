<?php
include "dbconn.php";

var_dump($_REQUEST);
$sql = "insert into equipment (Type, Vendor, Quantity) VALUES (?,?,?)";

$type = $_REQUEST["Type"];
$vendor = $_REQUEST["Vendor"];
$quantity = $_REQUEST["Quantity"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $type, $vendor, $quantity);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'equipment.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>