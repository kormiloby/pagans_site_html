<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Главная</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1200" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta property="og:title" content="Главная" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20181018180055" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20181018180055" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1540320578" rel="stylesheet" type="text/css" />
	<link href="css/1.css?ts=1540320578" rel="stylesheet" type="text/css" />
	<ga-code/>
	<script type="text/javascript">var currLang = '';</script>
	
	<link href="css/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" type="text/css" />	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

	</head>


<body><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance0" class="wb_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle"><span style="color:rgba(222,124,4,0.64);"><strong>Сайт в разработке</strong></span></h5>
</div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance1" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance2" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">По всем вопросам +375292615839</p>
</div><div id="wb_element_instance3" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(1);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance3");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance3").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 80px;"><div id="wb_element_instance4" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
