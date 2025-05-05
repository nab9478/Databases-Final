<?php
include "menu.php";
include "dbconn.php";
echo "<h1>EQUIPMENT</h1>";
echo "<table border=1><tr><th>Type</th><th>Vendor</th><th>Quantity</th></tr>";
$sql = "select * from equipment";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["Type"] . "</td><td>" . $row["Vendor"] . "</td><td>" . $row["Quantity"] . "</td><td>" .
        "</td><td><a href='delequipment.php?equipment_id=" . $row["equipment_id"] . "'>Del</a>" . 
        "</td><td><a href='editequipment.php?equipment_id=" . $row["equipment_id"] . "'>Edit</a>" .
        "</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>
<a href="addequipment.htm">Add New</a>