<?php
include "dbconn.php";
$sql = "SELECT * FROM Team where Sport = ?";
$sport = $_REQUEST["Sport"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$sport);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows>0){
    $row = $result->fetch_assoc();
}
?>
<form action="updateteam.php"> 
    <label for "Sport"><h3>Sport: <?php echo $row["Sport"]?></h3></label><br>
    <label for "Season">Season:</label><br>
    <input type="text" id="Season" name="Season" value="<?php echo $row["Season"]?>"><br>
    <input type="hidden" id="Sport" name="Sport" value="<?php echo $row["Sport"]?>"><br>
    <input type="submit" value="Submit">
</form>