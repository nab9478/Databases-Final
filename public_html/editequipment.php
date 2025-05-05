<?php
include "dbconn.php";
$sql = "SELECT * FROM equipment where equipment_id = ?";
$id = $_REQUEST["equipment_id"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows>0){
    $row = $result->fetch_assoc();
}
?>
<form action="updateequipment.php"> 
    <label for "Type">Type of Equipment:</label><br>
    <input type="text" id="Type" name="Type" value="<?php echo $row["Type"]?>"><br>
    <label for "Vendor">Vendor:</label><br>
    <input type="text" id="Vendor" name="Vendor" value="<?php echo $row["Vendor"]?>"><br>
    <label for "Quantity">Quantity:</label><br>
    <input type="number" id="Quantity" name="Quantity" value="<?php echo $row["Quantity"]?>"><br>
    <input type="hidden" id="equipment_id" name="equipment_id" value="<?php echo $row["equipment_id"]?>"><br>
    <input type="submit" value="Submit">
</form>