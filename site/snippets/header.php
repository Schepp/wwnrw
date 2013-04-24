<!DOCTYPE html>
<html lang="de">
<head>
    <title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo html($page->description()) ?>">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width">
	<link rel="dns-prefetch" href="//ajax.googleapis.com">
	<link rel="dns-prefetch" href="//api.tiles.mapbox.com">
	<!-- Create Icons via http://iconifier.net -->
	<link rel="shortcut icon" href="<?php echo url('favicon.ico') ?>">
	<link rel="apple-touch-icon" href="<?php echo url('assets/images/apple-touch-icon.png') ?>">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo url('assets/images/aapple-touch-icon-57x57.png') ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo url('assets/images/aapple-touch-icon-72x72.png') ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo url('assets/images/aapple-touch-icon-114x114.png') ?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo url('assets/images/aapple-touch-icon-144x144.png') ?>">
	<!-- Check Open Graph via http://developers.facebook.com/tools/debug -->
	<meta property="og:title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>">
	<meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$_SERVER['REQUEST_URI'] ?>">
	<meta property="og:image" content="<?php echo url('assets/images/WWNRW.png') ?>"> 
	<meta property="og:site_name" content="<?php echo html($site->title()) ?>">
	<meta property="og:description" content="<?php echo html($page->description()) ?>">
	<meta property="fb:admins" content="100000030113626">
	<?php echo css('assets/stylesheets/screen.css') ?>
	<script>
		<?php echo file_get_contents(dirname(__FILE__).'/../../assets/scripts/head.js'); ?>
	</script>
</head>
<body>
    <header>
	    <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/WWNRW.png') ?>" width="240" height="100" alt="<?php echo html($page->title()) ?>" /></a></h1>
    </header>