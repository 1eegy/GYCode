<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>overflow:auto的用法</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />

    <style type="text/css">
        html,body{/*设定body长宽为动态100%，不固定死*/
            width: 100%;
            height: 100%;
				margin: 0;
				
        }
        .container{/*最外部容器*/
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .header{
            width: 100%;
            height: 100px;
            background: #f99;
        }
        .content{/*ajax展示内容页*/
            width: 100%;
            height: 100%;
            overflow: auto;
            background: yellow;
            flex: 1;
        }
        .footer{
            width: 100%;
            height: 100px;
            background: #99f;
        }
    </style>

<script type="text/javascript">
function showHint(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","include/tagsearch.php?searchname="+str,true);
xmlhttp.send();
}
</script>

</head>
<body>
<!-- 头部 -->
    <div class="container">
        <div class="header">
					<div style="position:absolute;">
						<form action="">
							<label>选择所要查询的图片文件的TAG:</label>
							<?php include('include/tags.php'); ?>
							<input id="txt1" onkeyup="showHint(this.value)" name="searchname" type="text" value="" />
						</form>
					</div>
        </div>

<!-- 页高自适应 -->
        <div class="content">
				<div style='width:30%;text-align:center;'><!-- 页高自适应 -->
						<span id="txtHint"></span>
				
				</div>
        </div>

<!-- 尾部 -->
        <div class="footer">
        </div>
    </div>
</body>
</html>