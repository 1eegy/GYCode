<?php
	include('include/db.php');
?>
	<input id="input1" value="" name="imgtag" placeholder="输入tag" required="required"/>	
		<select id="select1">
			<option value="">NULL</option>
			<?php
				$ll = $_SESSION['username'];
				$sql = "select tags from sserp_tags where binary user = '$ll';";
				$res = $conn->query($sql);
				while($row = $res->fetch()){
					echo "<option>".$row['tags']."</option>"."<br />";
				}
			?>
		</select>
		<script>
			window.onload=function(){
			select1.onchange=function(){
			input1.value=select1.value;
			}
		}
		</script>