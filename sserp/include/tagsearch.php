<!DOCTYPE html >
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="styleSheet"  href="../view/css/b.css" />
<title>GY_file:tag搜索结果</title>
</head>
<body style="text-align:center;background-color:#E78883;">
<?php
	session_start();
	$ll = $_SESSION['username'];
	$search = $_POST['searchname'];//$_GET['searchname'];
					@$i += 1;
					echo '图片'.$i.':';
					?>
					<div style='text-align:center;'>
						<a target="_blank" href="<?php echo $row['img_path']; ?>">
						<?php echo '<img src='.$row['img_path'].' width=100% />'; ?>
						</a><br/>
						<?php echo $row['img_name'];  ?>
					</div>
					<form id="form1" name="form1" method="post" action="">
						<input name="" type="submit" value="删除" />
						<input name="<?php echo $i ?>" type="hidden" id="a" value="a" />
					</form>
					<?php
					@$a=$_REQUEST[$i];
					if ($a=="a")
					{
						unlink("include/".$row['img_path']);
						$sql = "delete from sserp_path where img_path = '$row[img_path]'";
						$res = $conn->query($sql);
						echo "<meta http-equiv='refresh' content='0.1;URL=http://file.diolee.top'/>";
					}
				}
?>

	<hr>
	<label>到底啦~</label>
</html>