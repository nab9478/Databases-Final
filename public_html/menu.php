<?php

echo <<<MENU
<style>
ul {
  list-style-type: none;
  margin-top: 10;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>

<ul>
  <li><a href="teams.php">Teams</a></li>
  <li><a href="athletes.php">Athletes</a></li>
  <li><a href="loops.php">Loops</a></li>
  <li><a href="athlete_gear.php">Athlete Gear</a></li>
  <li><a href="equipment.php">Equipment</a></li>
  <li><a href="team_equipment.php">Team/Equipment Log</a></li>
  <li><a href="team_gear.php">Team/Gear Log</a></li>
  <li><a href="reports.php">Reports</a></li>
</ul>

MENU;

?>