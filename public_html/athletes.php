<?php
include_once "dbconn.php";
$netid = $_REQUEST["NetID"];

if(empty($netid)){
    include "menu.php";
    $sql = "select * from Athlete";
}
else{
    $sql = "select * from Athlete where NetID = '" . $netid . "'";
}

    
    
echo "<h1>ATHLETES</h1>";
echo "<table border=1><tr><th>Net ID</th><th>First name</th><th>Last name</th><th>Year</th><th>Sport</th></tr>";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["NetID"] . "</td><td>" . $row["firstName"] . "</td><td>" . $row["lastName"] . "</td><td>" . $row["Year"] . "</td><td>" . $row["Team_Sport"] .
        "</td><td><a href='delathlete.php?NetID=" . $row["NetID"] . "'>Del</a>" . 
        "</td><td><a href='editathlete.php?NetID=" . $row["NetID"] . "'>Edit</a>" .
        "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="addathlete.htm">Add New</a>