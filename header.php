<!DOCTYPE html>
<html>
<head>

<title>Fullpage.js | Wordpress starter theme</title>

<meta name="viewport" content="width=device-width">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- style sheets -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/jquery.fullPage.css" media="screen, projection" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />

<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>
<body>

<div class="fade-in-all">
</div>

<?php if (is_front_page()) { 
	get_template_part('fullpage-header'); ?> 
	<div id="wrapper">
<?php } else { 
	get_template_part('page-header');
} ?>

