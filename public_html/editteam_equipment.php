<?php
include "dbconn.php";
$sql = "SELECT * FROM Team_has_Equipment where Sport = ? AND equipment_id=?";
$sport = $_REQUEST["Sport"];
$id = $_REQUEST["equipment_id"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("si",$sport,$id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows>0){
    $row = $result->fetch_assoc();
}
?>
<form action="updateteam_equipment.php"> 
    <label for "Type"><h3>Equipment: <?php echo $row["Type"]?> (ID#:  <?php echo $row["equipment_id"]?>)</h3></label><br>
    <label for "Sport">Sport:</label><br>
    <input type="text" id="Sport" name="Sport" value="<?php echo $row["Sport"]?>"><br>
    <label for "Location">Location:</label><br>
    <input type="text" id="Location" name="Location" value="<?php echo $row["Location"]?>"><br>
    <input type="hidden" id="Type" name="Type" value="<?php echo $row["Type"]?>"><br>
    <input type="hidden" id="equipment_id" name="equipment_id" value="<?php echo $row["equipment_id"]?>"><br>
    <input type="submit" value="Submit">
</form>