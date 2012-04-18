<?php
require_once "../init.php";

$mc = new MCAPI(API_KEY);
$lists = $mc->lists();



// Render

echo "<ul>";
foreach($lists["data"] as $list){
	echo "<li>" . $list["name"] . "</li>";
}
echo "</ul>";
?>