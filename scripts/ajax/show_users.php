<?php
require_once "../init.php";

if(isset($_POST["id"]) && strlen($_POST["id"]) > 0){
	$mc = new MCAPI(API_KEY);
	$lists = $mc->listMembers($_POST["id"]);

	// Render

	echo "<ul>";
	foreach($lists["data"] as $list){
		echo "<li>" . $list["email"] . "</li>";
	}
	echo "</ul>";
}
?>