<?php
include "dbconn.php";
$sql = "SELECT * FROM Laundry_Loop where Athlete_NetID = ?";
$netid = $_REQUEST["Athlete_NetID"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$netid);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows>0){
    $row = $result->fetch_assoc();
}
?>
<form action="updateloop.php"> 
    <label for "Athlete_NetID"><h3>Athlete (Net ID): <?php echo $row["Athlete_NetID"]?></h3></label><br>
    <label for "Number">Number:</label><br>
    <input type="number" id="Number" name="Number" value="<?php echo $row["Number"]?>"><br>
    <label for "Color">Color:</label><br>
    <input type="text" id="Color" name="Color" value="<?php echo $row["Color"]?>"><br>
    <input type="hidden" id="Athlete_NetID" name="Athlete_NetID" value="<?php echo $row["Athlete_NetID"]?>"><br>
    <input type="submit" value="Submit">
</form>