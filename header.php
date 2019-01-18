<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel|Lato" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<?php wp_head(); ?>
</head>

<body>

<header>
            <div id="logo">
            <button id="menuIcon"><img src="<?php bloginfo('template_url'); ?>/icons/menu.png"></button>
			<div id="surname"><a href="<?php bloginfo('url'); ?>/index.php">Kajetan Nowak</a></div>
			<div id="photographer"><h2>fotograf</h2></div>
            
            <!-- 
               
            <img id="menuIcon" href="<?php bloginfo('template_url'); ?>/icons/menu.png"> -->
            </div>
</header>

<div id="container">