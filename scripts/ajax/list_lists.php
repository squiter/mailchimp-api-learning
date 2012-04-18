<?php
require_once "../init.php";

$mc = new MCAPI(API_KEY);
$lists = $mc->lists();



// Render

echo "<ul>";
foreach($lists["data"] as $list){
	echo "<li onclick='javascript:showUsers(this, \"" . $list["id"] . "\")'>" . $list["name"] . "</li><li class='users'></li>";
}
echo "</ul>";
?>