<?php
include "menu.php";
include "dbconn.php";
echo "<h1>TEAM-EQUIPMENT LOG</h1>";
echo "<table border=1><tr><th>Sport</th><th>ID</th><th>Type</th><th>Location</th></tr>";
$sql = "select * from Team_has_Equipment";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["Sport"] . "</td><td>" . $row["equipment_id"] . "</td><td>" . $row["Type"] . "</td><td>" . $row["Location"] . 
        "</td><td><a href='delteam_equipment.php?Sport=" . $row["Sport"] . "&equipment_id=" . $row["equipment_id"] . "'>Del</a>" . 
        "</td><td><a href='editteam_equipment.php?Sport=" . $row["Sport"] . "&equipment_id=" . $row["equipment_id"] . "'>Edit</a>" .
        "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="addteam_equipment.htm">Add New</a>