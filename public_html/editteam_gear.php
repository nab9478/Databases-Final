<?php
include "dbconn.php";
$sql = "SELECT * FROM Team_has_Gear where Team_Sport = ? AND Gear_Type = ? AND Gear_NumberID=?";
$sport = $_REQUEST["Team_Sport"];
$type = $_REQUEST["Gear_Type"];
$id = $_REQUEST["Gear_NumberID"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi",$sport,$type,$id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows>0){
    $row = $result->fetch_assoc();
}
?>
<form action="updateteam_gear.php"> 
    <label for "Type"><h3>Edit Team for <?php echo $row["Gear_Type"]?> item #<?php echo $row["Gear_NumberID"]?></h3></label><br>
    <label for "Team_Sport">Sport:</label><br>
    <input type="text" id="Team_Sport" name="Team_Sport" value="<?php echo $row["Team_Sport"]?>"><br>
    <input type="hidden" id="Gear_Type" name="Gear_Type" value="<?php echo $row["Gear_Type"]?>"><br>
    <input type="hidden" id="Gear_NumberID" name="Gear_NumberID" value="<?php echo $row["Gear_NumberID"]?>"><br>
    <input type="submit" value="Submit">
</form>