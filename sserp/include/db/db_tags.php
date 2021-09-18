<?php
	session_start();
	$ll = $_SESSION['username'];
	$sql = "select tags from sserp_tags where binary user = '$ll';";
	$res = $conn->query($sql);
	while($row = $res->fetch()){
		echo "<option>".$row['tags']."</option>"."<br />";
	}
?>