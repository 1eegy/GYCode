<?php
	include('include/db.php');
?>
	<!--input id="input" value="" name="searchname" placeholder="通过tag搜索图片" required="required"/-->	
		<select id="select" name="searchname">
			<option value="">查看TAG</option>
			<?php
				include('db/db_tags.php');
			?>
		</select>
		