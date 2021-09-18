<!DOCTYPE html >
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="styleSheet"  href="css/a.css" />
</head>
<?php
	include('db.php'); 
	session_start();
?>
<body style="text-align:center" class="body">
<?php
	$ll = $_SESSION['username'];
	echo "<h2 style='text-align:center'>管理你的TAGS:"."</h2><br/>";
	$sql = "select * from sserp_tags where binary user = '$ll' order by createtime desc;";
	$res = $conn->query($sql);
	?>
	<table cellspacing="0" align="center">
  		<tr>
  			<th>序号</th>
   			<th>TAG名</th>
   			<th>操作</th>
  		</tr>
	<?php
	while($row = $res->fetch()){
		@$i += 1;
		echo '<tr><td style="width:100px;">标签'.$i.'</td>';
		?>
		<div style='text-align:center;'>
			<td style="width:100px;"><?php echo $row['tags'] ?></td>
		</div>
		<td style="width:100px;">
		<form id="form1" name="form1" method="post" action="">
			<input name="" type="submit" value="删除" />
			<input name="<?php echo $i ?>" type="hidden" id="a" value="a" />
		</form>
		</td></tr>
		<?php
		@$a=$_REQUEST[$i];
		if ($a=="a")
		{
			$sql = "delete from sserp_tags where tags = '$row[tags]';";
			$res = $conn->query($sql);
			header("refresh:0.1");
			//echo "<meta http-equiv='refresh' content='0.1;URL=http://file.diolee.top'/>";
		}
	}?>
	</table>
	</div>
	<?php
	$conn = null;
?>
</body>
</html>