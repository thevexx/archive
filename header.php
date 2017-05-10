<!DOCTYPE HTML>
<html>
<head>
<title><?php echo get_bloginfo( 'name' ); ?></title>
<link href="<?php bloginfo( 'template_directory' );?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php bloginfo( 'template_directory' );?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="<?php bloginfo( 'template_directory' );?>/js/jquery.min.js"></script>
</head>
<body>
<!-- header -->
	<div class="content-main">
		<div class="container">
			<div class="col-md-3 top-left">
				<div class="logo">
					<h1><b><a class="text-muted" href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></b></h1>
					<h6><a class="text-muted"><?php echo get_bloginfo( 'description' ); ?></h6>
				</div>
				<h4 class="menn">Menu</h4>
				<label></label>
				<div class="head-nav">
					<span class="menu"> </span>
						<ul>
							<li class="active"><a href="<?php bloginfo( 'wpurl' );?>">Home</a></li>
							<li><?php wp_list_pages( '&title_li=' ); ?></li>
							

								<div class="clearfix"> </div>
						</ul>
						<!-- script-for-nav -->
					</div>
				<div class="project">
					<h4>Social</h4>
					<label></label>
					<ul>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Dribbble</a></li>
						<li><a href="#">Behance</a></li>
					</ul>
				</div>
				<div class="project">
					<h4>Twitter Feed</h4>
					<label></label>
					<p>hey <a href="#">@webfan </a> just been using James George’s website template. i can’t believe he gives them away!</p>
					<h6>1 day ago</h6>
					<p>Just purchased <a href="#">@creativebeacon's</a> great book: Beautiful Web Design</p>
					<h6>1 day ago</h6>
				</div>
			</div>
			<div class="col-md-9 top-right">