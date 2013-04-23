<!DOCTYPE html>
<html lang="de">
<head>
    <title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo html($site->description()) ?>">
    <meta name="robots" content="index, follow">
    <script>
    WebFontConfig = {
	    google: {
			families: ['Inconsolata::latin']
		}
    };
    (function(){
		var wf = document.createElement('script');
		wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
    })();</script>
    <?php echo css('assets/stylesheets/screen.css') ?>
</head>
<body>
    <header>
	    <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/WWNRW.png') ?>" width="240" height="100" alt="<?php echo html($page->title()) ?>" /></a></h1>
    </header>