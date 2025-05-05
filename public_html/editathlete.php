<?php
include "dbconn.php";
$sql = "SELECT * FROM Athlete where NetID = ?";
$netid = $_REQUEST["NetID"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$netid);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows>0){
    $row = $result->fetch_assoc();
}
?>
<form action="updateathlete.php"> 
    <label for "NetID"><h3>Net ID: <?php echo $row["NetID"]?></h3></label><br>
    <label for "firstName">First Name:</label><br>
    <input type="text" id="firstName" name="firstName" value="<?php echo $row["firstName"]?>"><br>
    <label for "lastName">Last Name:</label><br>
    <input type="text" id="lastName" name="lastName" value="<?php echo $row["lastName"]?>"><br>
    <label for "Year">Year:</label><br>
    <input type="number" id="Year" name="Year" value="<?php echo $row["Year"]?>"><br>
    <label for "Team_Sport">Sport:</label><br>
    <input type="text" id="Team_Sport" name="Team_Sport" value="<?php echo $row["Team_Sport"]?>"><br>
    <input type="hidden" id="NetID" name="NetID" value="<?php echo $row["NetID"]?>"><br>
    <input type="submit" value="Submit">
</form>
<?php
include "athletes.php";
$conn->close();
?>