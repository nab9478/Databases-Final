<?php
include "menu.php";
include "dbconn.php";
echo "<h1>REPORTS</h1>";

echo "<h2>Athlete Gear Count</h2>";
echo "<table border=1><tr><th>Athlete (Net ID)</th><th>Team</th><th># of Items Asssigned</th></tr>";
$sql = "select * from athlete_gear_count";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["Athlete"] . "</td><td>" . $row["Team_Sport"] . "</td><td>" . $row["Gear_Assigned"] . 
        "</td></tr>";
    }
}
echo "</table>";

echo "<h2>Loops Needed</h2>";
echo "<table border=1><tr><th>Team</th><th>Roster Size</th><th>Loops Assigned</th><th>Loops Needed</th></tr>";
$sql = "select * from roster_vs_assignedloops";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["Team_Sport"] . "</td><td>" . $row["roster_size"] . "</td><td>" . $row["loops_assigned"] . "</td><td>" . $row["loops_needed"] . 
        "</td></tr>";
    }
}
echo "</table>";

echo "<h2>Lost Equipment</h2>";
echo "<table border=1><tr><th>Equipment</th><th>Quantity</th><th>Team</th></tr>";
$sql = "select * from lost_equipment";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["Type"] . "</td><td>" . $row["Quantity"] ."</td><td>" . $row["Sport"] .
        "</td></tr>";
    }
}
echo "</table>";

echo "<h2>Gear to Return</h2>";
echo "<table border=1><tr><th>Athlete</th><th>First Name</th><th>Last Name</th><th>Sport</th><th># of Items to Return</th></tr>";
$sql = "select * from retired_athletes";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["netid"] . "</td><td>" . $row["old_fname"] ."</td><td>" . $row["old_lname"] . "</td><td>" . $row["old_sport"] ."</td><td>" . $row["gear_count"] .
        "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
