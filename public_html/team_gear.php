<?php
include "menu.php";
include "dbconn.php";
echo "<h1>TEAM-GEAR LOG</h1>";
echo "<table border=1><tr><th>Sport</th><th>ID</th><th>Type</th></tr>";
$sql = "select * from Team_has_Gear";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["Team_Sport"] . "</td><td>" . $row["Gear_NumberID"] . "</td><td>" . $row["Gear_Type"] .
        "</td><td><a href='delteam_gear.php?Team_Sport=" . $row["Team_Sport"] . "&Gear_NumberID=" . $row["Gear_NumberID"] . "&Gear_Type=" . $row["Gear_Type"] . "'>Del</a>" . 
        "</td><td><a href='editteam_gear.php?Team_Sport=" . $row["Team_Sport"] . "&Gear_NumberID=" . $row["Gear_NumberID"] . "&Gear_Type=" . $row["Gear_Type"] . "'>Edit</a>" .
        "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="addteam_gear.htm">Add New</a>