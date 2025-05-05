<?php
include "dbconn.php";
$sql = "SELECT * FROM Gear where Type = ? AND Number_ID=?";
$type = $_REQUEST["Type"];
$id = $_REQUEST["Number_ID"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("si",$type,$id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows>0){
    $row = $result->fetch_assoc();
}
?>
<form action="updateathlete_gear.php"> 
    <label for "Type"><h3><?php echo $row["Type"]?> Item,</label>
    <label for "Number_ID">Number ID: <?php echo $row["Number_ID"]?></h3></label><br>
    <label for "Garment">Garment:</label><br>
    <input type="text" id="Garment" name="Garment" value="<?php echo $row["Garment"]?>"><br>
    <label for "Size">Size:</label><br>
    <input type="text" id="Size" name="Size" value="<?php echo $row["Size"]?>"><br>
    <label for "Athlete_Owner">Owned By:</label><br>
    <input type="Athlete_Owner" id="Athlete_Owner" name="Athlete_Owner" value="<?php echo $row["Athlete_Owner"]?>"><br>
    <input type="hidden" id="Type" name="Type" value="<?php echo $row["Type"]?>"><br>
    <input type="hidden" id="Number_ID" name="Number_ID" value="<?php echo $row["Number_ID"]?>"><br>
    <input type="submit" value="Submit">
</form>