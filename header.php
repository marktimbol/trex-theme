<?php
require('helpers/geoplugin.class.php');

$geo = new geoPlugin;

$middleEastCountries = [
	'Bahrain',
	'Cyprus',
	'Egypt',
	'Iran',
	'Iraq',
	'Israel',
	'Jordan',
	'Kuwait',
	'Lebanon',
	'Oman',
	'Palestine',
	'Qatar',
	'Saudi Arabia',
	'Syria',
	'Turkey',
	'United Arab Emirates',
	'Yemen'
];

//var_dump($middleEastCountries);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TREX.AE</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/public/css/vendor.css" />
	<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/public/css/app.css" />

	<?= wp_head(); ?>
</head>
<body>
	
	<div class="top-nav-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="top-nav float-right">
						<ul>
							<li><i class="fa fa-phone"></i> +971 4 331 3103</li>
							<li><i class="fa fa-envelope"></i> <a href="mailto:sales@trex.ae">sales@trex.ae</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	</div>

	<div class="container main-container">
		<div class="row">
			<div class="col-md-12">
				<header>
					<div class="row">
						<div class="col-md-3">
							<h1 class="logo">
								<a href="<?=get_bloginfo('url');?>">
									<img src="<?=get_bloginfo('stylesheet_directory');?>/public/images/logo.png" alt="TREX General Trading LLC" title="TREX General Trading LLC" class="img-responsive" />
								</a>								
							</h1>
						</div>

						<div class="col-md-9">
							<nav class="main-nav float-right">
								<?php wp_nav_menu( array('menu' => 'MainMenu' )); ?>								
							</nav>
						</div>
					</div>
				</header>
