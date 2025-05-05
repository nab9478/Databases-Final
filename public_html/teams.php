<?php
include "menu.php";
include "dbconn.php";
echo "<h1>TEAMS</h1>";
echo "<table border=1><tr><th>Sport</th><th>Season</th></tr>";
$sql = "select * from Team";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["Sport"] . "</td><td>" . $row["Season"] . 
        "</td><td><a href='delteam.php?Sport=" . $row["Sport"] . "'>Del</a>" . 
        "</td><td><a href='editteam.php?Sport=" . $row["Sport"] . "'>Edit</a>" .
        "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="addteam.htm">Add New</a>