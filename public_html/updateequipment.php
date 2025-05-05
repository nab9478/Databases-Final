<?php
include "dbconn.php";

$sql = "update equipment set Type = ?, Vendor = ?, Quantity = ? where equipment_id = ?";

$pkey = $_REQUEST["equipment_id"];
$type = $_REQUEST["Type"];
$vendor = $_REQUEST["Vendor"];
$quantity = $_REQUEST["Quantity"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssii", $type, $vendor, $quantity, $pkey);
if($stmt->execute() === TRUE) {
    echo "<script>window.location.href = 'equipment.php'</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>