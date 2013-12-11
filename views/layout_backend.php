<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
	<meta name="robots" content="noindex,nofollow" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="<?=site_url('assets/css/reset.css');?>" /> <!-- RESET -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="<?=site_url('assets/css/main.css');?>" /> <!-- MAIN STYLE SHEET -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="<?=site_url('assets/css/2col.css');?>" title="2col" /> <!-- DEFAULT: 2 COLUMNS -->
	<link rel="alternate stylesheet" media="screen,projection" type="text/css" href="<?=site_url('assets/css/1col.css');?>" title="1col" /> <!-- ALTERNATE: 1 COLUMN -->
	<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="assets/css/main-ie6.css" /><![endif]--> <!-- MSIE6 -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="<?=site_url('assets/css/style.css');?>" /> <!-- GRAPHIC THEME -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="<?=site_url('assets/css/mystyle.css');?>" /> <!-- WRITE YOUR CSS CODE HERE -->
	<script type="text/javascript" src="<?=site_url('assets/js/jquery.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('assets/js/switcher.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('assets/js/toggle.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('assets/js/ui.core.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('assets/js/ui.tabs.js');?>"></script>
  <script type="text/javascript" src="<?=site_url('assets/js/jquery.validate.js');?>"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".tabs > ul").tabs();
	});
	</script>
	<title><?=APP_NAME.' by '.AUTHOR;?></title>
</head>

<body>

<div id="main">

	<!-- Tray -->
	<div id="tray" class="box">

		<p class="f-left box">

			<!-- Switcher -->
			<span class="f-left" id="switcher">
				<a href="#" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="<?=base_url();?>assets/images/switcher-1col.gif" alt="1 Column" /></a>
				<a href="#" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="<?=base_url();?>assets/images/switcher-2col.gif" alt="2 Columns" /></a>
			</span>

			Project: <strong>Your Project</strong>

		</p>

		<p class="f-right">User: <strong><a href="#">Administrator</a></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><a href="#" id="logout">Log out</a></strong></p>

	</div> <!--  /tray -->

	<hr class="noscreen" />

	<!-- Menu -->
	<div id="menu" class="box">

		<ul class="box f-right">
			<li><a href="#"><span><strong>Visit Site &raquo;</strong></span></a></li>
		</ul>

		<ul class="box">
			<li id="menu-active"><a href="#"><span>Lorem ipsum</span></a></li> <!-- Active -->
			<li><a href="#"><span>Lorem ipsum</span></a></li>
			<li><a href="#"><span>Lorem ipsum</span></a></li>
			<li><a href="#"><span>Lorem ipsum</span></a></li>
			<li><a href="#"><span>Lorem ipsum</span></a></li>
			<li><a href="#"><span>Lorem ipsum</span></a></li>
			<li><a href="#"><span>Lorem ipsum</span></a></li>
		</ul>

	</div> <!-- /header -->

	<hr class="noscreen" />

	<!-- Columns -->
	<div id="cols" class="box">

		<!-- Aside (Left Column) -->
		<div id="aside" class="box">
			<div class="padding box">
				<!-- Logo (Max. width = 200px) -->
				<p id="logo"><a href="#"><img src="<?=base_url();?>assets/images/logo.gif" alt="Our logo" title="Visit Site" /></a></p>
			</div> <!-- /padding -->
        <?=$this->mytemplate->menu_admin();?>
		</div> <!-- /aside -->

		<hr class="noscreen" />

		<!-- Content (Right Column) -->
    <div id="content" class="box">
        <?=$content;?>
    </div>    
	</div> <!-- /cols -->

	<hr class="noscreen" />

	<!-- Footer -->
	<div id="footer" class="box">

		<p class="f-left">&copy; 2013 <a href="#"><?=AUTHOR;?></a>, All Rights Reserved &reg;</p>
	</div> <!-- /footer -->

</div> <!-- /main -->

</body>
</html>

