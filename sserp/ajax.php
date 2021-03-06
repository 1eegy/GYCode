<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--meta name="viewport" content="width=device-width, initial-scale=1"-->
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <title>GY_file</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="view/css/google.css">  
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="view/css/font-awesome.min.css">                
    <!-- Font Awesome -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">                                      
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="view/css/hero-slider-style.css">                              
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="view/css/magnific-popup.css">                                 
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="view/css/tooplate-style.css">
    <!-- login style -->
    <link rel="stylesheet" href="view/css/style.css">                               

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
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

<script>
	function setIframeHeight(iframe) {
		if (iframe) {
			var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
			if (iframeWin.document.body) {
				iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
			}
		}
	};
	window.onload = function () {
		setIframeHeight(document.getElementById('rfFrame'));
	};
	function setIframeHeight(iframe) {
		if (iframe) {
			var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
			if (iframeWin.document.body) {
				iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
			}
		}
	};
	window.onload = function () {
		setIframeHeight(document.getElementById('nameFrame'));
	};
</script>
</head>
<?php
	include('include/db.php'); 
?>


    <body>
        <?php
		if (!isset($_SESSION['username'])){  ?>
		
<div id="lb" style="display:block;z-index:999" class="form-tips">
	<div style="text-align:center">
		<label class="tips-label">公告</label></br>
		<font><b>1.</b>本站用于管理您的物品，以拍照上传的方式储存，方便您在任何设备上查看。</font></br>
		<font><b>2.</b>本站采用简洁登录方式，您只需要记住您第一次输入的用户名，以后即可通过该用户名管理您的图片。</font></br>
		<font><b>3.</b>当图片大于500KB，本站会将图片进行压缩储存，但不会影响图片的清晰度。</font></br>
		<label class="tips-label">使用方法</label></br>
		<font><b>1.</b>在首页选择上传您的图片，可自定义文件名。tag为必须输入。</font></br>
		<font><b>2.</b>在第二页、第三页提供了靠<b>标签名</b>和<b>文件名</b>快速查看图片功能。</font></br>
		<font><b>3.</b>第四页用于管理您的标签。当输入了一个新的标签，本站将会把这个它收录进您的标签集里。</font></br>
		<font><b>4.</b>当您不使用本站时，记得点击离开按钮！</font></br>
		<h1><b><input type="submit" value="   ×   " onclick="display('lb')"></b></h1>
	</div>
</div>
<script>
    function display(id){  
        var traget=document.getElementById(id);  
        if(traget.style.display=="none"){  
            traget.style.display="";  
        }else{  
            traget.style.display="none";  
      }  
   }
</script>

		<div class="goldship" style="width:100%;height:100%">
			<div class="form-wrap">
				<form action="" method="post">
					<div class="input-wrap">
						<input type="text" id="username" name="username">
						<label for="username">用户名</label>
					</div>
					<div class="input-wrap">
						<input name="search" type="submit" value="开始" />
					</div>
				</form>
			</div>
		</div><?php
			if (isset($_POST['username'])){ 
				$ll = $_POST['username'];
				$_SESSION['username'] = $ll;
				$sql = "select * from sserp_user where user = '$ll';";
				$res = $conn->query($sql);
				if($row = $res->fetch()){
					echo "<meta http-equiv='refresh' content='0.1;URL=http://file.diolee.top'/>";
				} else {
					if (!file_exists("upfile/$ll")) {
 						mkdir("upfile/$ll");
					} 
					$sql = "insert into sserp_user(user) values('$ll');";
					$res = $conn->query($sql);
					echo "入库";
					echo "<meta http-equiv='refresh' content='0.1;URL=http://file.diolee.top'/>";
				}
				//echo "<meta http-equiv='refresh' content='0.1;URL=http://file.diolee.top'/>";
				//echo "<h1>不存在</h1>";
			} 
			
        		} else { ?>	
        <!-- Content -->
        <div class="cd-hero">

            <!-- Navigation -->        
            <div class="cd-slider-nav">
                <nav class="navbar">
                    <div class="tm-navbar-bg">
                        
                        <a class="navbar-brand text-uppercase" href="http://file.diolee.top"><i class="fa fa-file-image-o tm-brand-icon"></i>GY_file</a>

                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                            <ul class="nav navbar-nav"><!-- 标题 -->
                                <li class="nav-item active selected">
                                    <a class="nav-link" href="#1" data-no="1">文件上传<span class="sr-only">(current)</span></a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#2" data-no="2">通过TAG搜索</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#3" data-no="3">关键字搜索</a>
                                </li>
		<li class="nav-item">
                                    <a class="nav-link" href="#4" data-no="4">管理TAGS</a>
                                </li>
		<li class="nav-item">
                                    <a class="nav-link" href="#5" data-no="5">说明书</a>
                                </li>
		<li class="nav-item">
                                    <a class="nav-link" href="#6" data-no="6"><?php echo $_SESSION['username'] ?>离开</a>
                                </li>
                            </ul>
                        </div>                        
                    </div>

                </nav>
            </div> 
            <ul class="cd-hero-slider">

                <!-- Page 1  文件上传-->
                <li class="selected">                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-one"></br>
							
                                <!-- Gallery One pop up connected with JS code below -->                                    
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title tm-white"><span class="tm-white">本页面标题</span></h2>
                                        <p class="tm-text">随便介绍
                                        </p>
                                    </div>
			<div style="height:100%">					
			<table align="center" width="100%">
				<form action="include/sserp.php" method="post" enctype="multipart/form-data" name="upload_form">
					<tr>
						<td>
							<label>选择图片文件</label>
							<input name="imgfile" type="file" accept="image/gif, image/jpeg"/>
						</td>
					</tr>
					<tr>
						<td>
							<input name="imgname" placeholder="自定义文件名/可留空" type="text"/>
							<?php include('include/addtags.php'); ?>
							<input name="uploads" type="submit" value="上传" />
						</td>
					</tr>
				</form>
			</table></br></br>
			</div>
			<div style="text-align:center">
			<?php
				$ll = $_SESSION['username'];
				echo "<h2 style='text-align:center'>显示最后10张上传图片:"."</h2><br/>";
				$sql = "select * from sserp_path where binary user = '$ll' order by createtime desc limit 10;";
				$res = $conn->query($sql);
				while($row = $res->fetch()){
					@$i += 1;
					echo '图片'.$i.':';
					?>
					<div style='text-align:center;'>
						<a href="<?php echo $row['img_path']; ?>">
						<?php echo '<img src='.$row['img_path'].' width=20% />'; ?>
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
			</div>                                                                  
		</div>                                 
                            </div>
                        </div>                                                    
                    </div>                    
                </li>
				
                <!-- Page 2  tag搜索-->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="2" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-two"></br>
                                <!-- Gallery Two pop up connected with JS code below -->  
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title"><span class="tm-white">搜索页</span></h2>
                                        <p class="tm-text"><span class="tm-white">选择一个TAG并进行搜索</span>
                                        </p>
                                    </div>
                                    <!-- 内容插入 -->

<div style="width:250px;height:500px;display:flex;flex-direction:column"><!-- 需要填充支撑 -->
	<div style="position:absolute;>
		<form action="">
			<label>选择所要查询的图片文件的TAG123:</label>
			<?php include('include/tags.php'); ?>
			<input id="txt" onkeyup="showHint(this.value)" name="searchname" type="text" value="" /></br>
		</form>
	</div></br></br></br></br>
	<div style="width:250px;height:800px;overflow:auto;flex:1;" dir="rtl">
				<div style='width:100%;text-align:center;'><!-- 页高自适应 -->
					<span id="txtHint"></span>
				</div>
	</div>
</div>        
		
		
		
				
                                </div>                                 
                            </div>
                        </div>                      
                    </div>
                </li>

                <!-- Page 3  关键字搜索-->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="3" data-page-type="gallery">                        
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-three"></br>
                                <!-- Gallery Two pop up connected with JS code below -->
                                    
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title"><span class="tm-white">按名搜索</span></h2>
                                        <p class="tm-text"><span class="tm-white">输入名字</span>
                                        </p>                                     
                                    </div>
                                    <!-- 内容插入 -->
		<div>
                                    <form action="include/namesearch.php" method="post" target="nameFrame">
			<input name="nsearched" type="text" placeholder="输入关键字即可" />
			<input name="search" type="submit" value="搜索" />
		   </form></br></br>
			<!--iframe id="nameFrame" name="nameFrame" src="about:blank" style="display:block;height:600px;float:left" frameborder="0"-->                                                                 
                                </div>
			<iframe id="nameFrame" name="nameFrame" scrolling="no" src="about:blank" onload="setIframeHeight(this)" style="display:block;float:left" frameborder="0"></iframe>
			<div style="height:10000px"></div>                                 
                            </div> <!-- .tm-img-gallery-container -->
                        </div>         
                    </div>  
                </li>

				<!-- Page 4  管理tag-->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="4" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-four"></br>
                                <!-- Gallery Two pop up connected with JS code below -->
                                    
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title"><span class="tm-white">管理你的TAG们</span></h2>
                                        <p class="tm-text"><span class="tm-white">将你看不顺眼的tag删除吧.</span>
                                        </p>
                                    </div>
                                    <!-- 内容插入 -->
			<iframe id="nameFrame" name="nameFrame" src="include/managetags.php" style="display:block;height:600px;float:left" frameborder="0"></iframe>   
									
                                </div>                                 
                            </div>
                        </div>                      
                    </div>
                </li>
				<!-- Page 5  投诉-->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="5" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-five"></br>
                                <!-- Gallery Two pop up connected with JS code below -->
                                    
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title"><span class="tm-white">说明书</span></h2>
                                        <p class="tm-text"><span class="tm-white">咱这么好懂，就用不着交了吧~当然如果有任何问题，欢迎联系我们！</span>
                                        </p>
                                    </div>
                                    <!-- 内容插入 -->
			<form action="mailto:yn968810@163.com" enctype="text/plain"> 
				您的疑问：<input name="subject" type="text"><br> 
				详细问题：<textarea name="body" style="width:100%;height:300px"></textarea><br> 
				<input type="submit" name="mail" value="提交"> 
			</form> 												
                                </div>                                 
                            </div>
                        </div>                      
                    </div>
                </li>
			<!-- Page 6  投诉-->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="6" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-six"></br>
                                <!-- Gallery Two pop up connected with JS code below -->
                                    <!-- 内容插入 -->
			<?php echo '<div style="text-align:center"><a href="index.php?action=logout"><h1>注销</h1></a></div>'; 
			if(@$_GET['action']=="logout"){
				echo "<meta http-equiv='refresh' content='0.1;URL=http://file.diolee.top'/>";
				setcookie("cookiename", NULL);
				session_unset();
				session_destroy();
			} ?>									
                                </div>                                 
                            </div>
                        </div>                      
                    </div>
                </li><!-- Page 6  后续模块插入-->
            </ul> <!-- .cd-hero-slider -->
            
            <!-- 尾巴分享图标 -->
            <footer class="tm-footer">
            
                <div class="tm-social-icons-container text-xs-center">
                    <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-behance"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
                </div>
                
            </footer>
                    
        </div> <!-- .cd-hero -->
        <?php } ?>

        <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
		<!-- 加载遮罩 -->
        <div id="loader-wrapper">
            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        
        <!-- load JS files -->
        <script src="view/js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="view/js/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) --> 
        <script src="view/js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="view/js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="view/js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script src="view/js/login.js"></script>	<!-- login style -->
		<!-- 配置 -->
        <script>

	$(document).ready(function(){
		$('.form-wrap').finput();
	});

            function adjustHeightOfPage(pageNo) {

                var offset = 80;
                var pageContentHeight = 0;

                var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

                if( pageType != undefined && pageType == "gallery") {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
                }
                else {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
                }

                if($(window).width() >= 992) { offset = 120; }
                else if($(window).width() < 480) { offset = 40; }
               
                // Get the page height
                var totalPageHeight = $('.cd-slider-nav').height()
                                        + pageContentHeight + offset
                                        + $('.tm-footer').height();

                // Adjust layout based on page height and window height
                if(totalPageHeight > $(window).height()) 
                {
                    $('.cd-hero-slider').addClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                }
                else 
                {
                    $('.cd-hero-slider').removeClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                }
            }

            /*
                Everything is loaded including images.
            */
            $(window).load(function(){

                adjustHeightOfPage(1); // Adjust page height

                /* Gallery One pop up
                -----------------------------------------*/
                $('.gallery-one').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });
				
	/* Gallery Two pop up
                -----------------------------------------*/
	$('.gallery-two').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Gallery Three pop up
                -----------------------------------------*/
                $('.gallery-three').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });
				
	/* Gallery four pop up
                -----------------------------------------*/
                $('.gallery-four').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });
				
	/* Gallery five pop up
                -----------------------------------------*/
                $('.gallery-five').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });
				
	/* 新模块插入 */


                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');

                    adjustHeightOfPage($(this).data("no")); // Adjust page height       
                });

                /* Browser resized 
                -----------------------------------------*/
                $( window ).resize(function() {
                    var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                    
                    // wait 3 seconds
                    setTimeout(function() {
                        adjustHeightOfPage( currentPageNo );
                    }, 1000);
                    
                });
        
                // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
                $('body').addClass('loaded');
                           
            });

           

        </script>            
</body>
</html>