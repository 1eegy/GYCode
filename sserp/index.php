<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
<style>
.divcss5{ border:1px solid #000; width:100%; height:100%;overflow:hidden;} 
.divcss5 img{width:expression(this.width > 300 ? "300px" : this.width);} 
	#body {
		max-width:100%;
	}
</style>
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
		if (!isset($_SESSION['username'])){  
		include("include/instructions.php");
		?>

		<div class="goldship" style="width:100%;height:100%">
			<div class="form-wrap">
				<form action="" method="post">
					<div class="input-wrap">
						<input type="text" id="username" name="username">
						<label for="username">?????????</label>
					</div>
					<div class="input-wrap">
						<input name="search" type="submit" value="??????" />
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
					echo "??????";
					echo "<meta http-equiv='refresh' content='0.1;URL=http://file.diolee.top'/>";
				}
				//echo "<meta http-equiv='refresh' content='0.1;URL=http://file.diolee.top'/>";
				//echo "<h1>?????????</h1>";
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
                            <ul class="nav navbar-nav"><!-- ?????? -->
                                <li class="nav-item active selected">
                                    <a class="nav-link" href="#1" data-no="1">????????????<span class="sr-only">(current)</span></a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#2" data-no="2">??????TAG??????</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#3" data-no="3">???????????????</a>
                                </li>
		<li class="nav-item">
                                    <a class="nav-link" href="#4" data-no="4">??????TAGS</a>
                                </li>
		<li class="nav-item">
                                    <a class="nav-link" href="#5" data-no="5">?????????</a>
                                </li>
		<li class="nav-item">
                                    <a class="nav-link" href="#6" data-no="6"><?php echo $_SESSION['username'] ?>??????</a>
                                </li>
                            </ul>
                        </div>                        
                    </div>

                </nav>
            </div> 
            <ul class="cd-hero-slider">

                <!-- Page 1  ????????????-->
                <li class="selected">                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-one"></br>
							
                                <!-- Gallery One pop up connected with JS code below -->                                    
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title tm-white"><span class="tm-white">???????????????????????????</span></h2>
                                        <p class="tm-text">???????????????????????????</p>
                                    </div>
			<div style="height:100%">					
			<table align="center" width="100%">
				<form action="include/sserp.php" method="post" enctype="multipart/form-data" name="upload_form">
					<tr>
						<td>
							<input name="imgfile" type="file" accept="image/gif, image/jpeg"/>
						</td>
					</tr>
					<tr>
						<td>
							<input name="imgname" placeholder="??????????????????/?????????" type="text"/>
							<?php include('include/addtags.php'); ?>
							<input name="uploads" type="submit" value="??????" />
						</td>
					</tr>
				</form>
			</table></br></br>
			</div>
			<div style="text-align:center;width:250px">
			<?php
				echo "<h2 style='text-align:center'>??????10???????????????:"."</h2><br/>";
				$ll = $_SESSION['username'];
				$sql = "select * from sserp_path where binary user = '$ll' order by createtime desc limit 10;";
				$res = $conn->query($sql);
				while($row = $res->fetch()){
					@$i += 1;
					echo '??????'.$i.':';
					?>
					<div style='text-align:center;'>
						<a href="<?php echo $row['img_path']; ?>">
						<?php echo '<img src='.$row['img_path'].' width=100% />'; ?>
						</a><br/>
						<?php echo $row['img_name'];  ?>
					</div>
					<form id="form1" name="form1" method="post" action="">
						<input name="" type="submit" value="??????" />
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
				
                <!-- Page 2  tag??????-->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="2" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-two"></br>
                                <!-- Gallery Two pop up connected with JS code below -->  
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title"><span class="tm-white">?????????</span></h2>
                                        <p class="tm-text"><span class="tm-white">????????????TAG???????????????</span>
                                        </p>
                                    </div>
                                    <!-- ???????????? -->

	<div style="width:250px;height:500px;display:flex;flex-direction:column"><!-- ?????????????????? -->
		<div style="text-align:center;">
			<form action="include/tagsearch.php" method="post" target="rfFrame">
				<label>????????????????????????????????????TAG:</label>
				<?php include('include/tags.php'); ?>
				<input name="searched" type="submit" value="??????" />
			</form></br></br>
		</div>
		<div style="width:250px;height:800px;overflow:auto;flex:1;" dir="rtl">
			<iframe id="rfFrame " name="rfFrame" scrolling="no" src="about:blank" onload="setIframeHeight(this)" style="display:block;float:left;width:99%;" frameborder="0"></iframe>
		</div>
	</div>
			
			
                                </div>                                 
                            </div>
                        </div>                      
                    </div>
                </li>

                <!-- Page 3  ???????????????-->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="3" data-page-type="gallery">                        
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-three"></br>
                                <!-- Gallery Two pop up connected with JS code below -->
                                    
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title"><span class="tm-white">????????????</span></h2>
                                        <p class="tm-text"><span class="tm-white">????????????</span>
                                        </p>                                     
                                    </div>
                                    <!-- ???????????? -->
		
		<div style="width:250px;height:500px;display:flex;flex-direction:column"><!-- ?????????????????? -->
			<div style="text-align:center;">
         	<form action="include/namesearch.php" method="post" target="nameFrame">
					<input name="nsearched" type="text" placeholder="?????????????????????" />
					<input name="search" type="submit" value="??????" />
			   </form></br></br>                                                                 
         </div>
			<div style="width:250px;height:800px;overflow:auto;flex:1;" dir="rtl">
			<iframe id="nameFrame" name="nameFrame" scrolling="no" src="about:blank" onload="setIframeHeight(this)" style="display:block;float:left;width:99%;" frameborder="0"></iframe>
			</div>
		</div>   
		                              
                            </div> <!-- .tm-img-gallery-container -->
                        </div>         
                    </div>  
                </li>

				<!-- Page 4  ??????tag-->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="4" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-four"></br>
                                <!-- Gallery Two pop up connected with JS code below -->
                                    
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title"><span class="tm-white">????????????TAG???</span></h2>
                                        <p class="tm-text"><span class="tm-white">?????????????????????tag?????????.</span>
                                        </p>
                                    </div>
                                    <!-- ???????????? -->
			<iframe id="nameFrame" name="nameFrame" src="include/managetags.php" style="display:block;height:600px;float:left" frameborder="0"></iframe>   
									
                                </div>                                 
                            </div>
                        </div>                      
                    </div>
                </li>
				<!-- Page 5  ??????-->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="5" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-five"></br>
                                <!-- Gallery Two pop up connected with JS code below -->
                                    
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title"><span class="tm-white">?????????</span></h2>
                                        <p class="tm-text"><span class="tm-white">???????????????????????????????????????~???????????????????????????????????????????????????</span>
                                        </p>
                                    </div>
                                    <!-- ???????????? -->
			<form action="mailto:yn968810@163.com" enctype="text/plain">??
				???????????????<input name="subject" type="text"><br>??
				???????????????<textarea name="body" style="width:100%;height:300px"></textarea><br>??
				<input type="submit" name="mail" value="??????">??
			</form>??												
                                </div>                                 
                            </div>
                        </div>                      
                    </div>
                </li>
			<!-- Page 6  ??????-->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="6" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-six"></br>
                                <!-- Gallery Two pop up connected with JS code below -->
                                    <!-- ???????????? -->
			<?php echo '<div style="text-align:center"><a href="index.php?action=logout"><h1>??????</h1></a></div>'; 
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
                </li><!-- Page 6  ??????????????????-->
            </ul> <!-- .cd-hero-slider -->
            
            <!-- ?????????????????? -->
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
		<!-- ???????????? -->
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
		<!-- ?????? -->
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
				
	/* ??????????????? */


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