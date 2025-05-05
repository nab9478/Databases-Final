<?php
include "menu.php";
include "dbconn.php";
echo "<h1>LOOPS</h1>";
echo "<table border=1><tr><th>Athlete (Net ID)</th><th>Number</th><th>Color</th></tr>";
$sql = "select * from Laundry_Loop";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["Athlete_NetID"] . "</td><td>" . $row["Number"] . "</td><td>" . $row["Color"] . 
        "</td><td><a href='delloop.php?Athlete_NetID=" . $row["Athlete_NetID"] . "'>Del</a>" . 
        "</td><td><a href='editloop.php?Athlete_NetID=" . $row["Athlete_NetID"] . "'>Edit</a>" .
        "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="addloop.htm">Add New</a>