<?php
include "menu.php";
include "dbconn.php";
echo "<h1>ATHLETE GEAR</h1>";
echo "<table border=1><tr><th>Type</th><th>ID</th><th>Garment</th><th>Size</th><th>Owner (Net ID)</th></tr>";
$sql = "select * from Gear";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["Type"] . "</td><td>" . $row["Number_ID"] . "</td><td>" . $row["Garment"] . "</td><td>" . $row["Size"] . "</td><td>" . $row["Athlete_Owner"] .
        "</td><td><a href='delathlete_gear.php?Type=" . $row["Type"] . "&Number_ID=" . $row["Number_ID"] . "'>Del</a>" . 
        "</td><td><a href='editathlete_gear.php?Type=" . $row["Type"] . "&Number_ID=" . $row["Number_ID"] . "'>Edit</a>" .
        "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="addathlete_gear.htm">Add New</a>