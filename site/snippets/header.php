<!DOCTYPE html>
<html lang="de">
<head>
    <title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo html($site->description()) ?>">
    <meta name="robots" content="index, follow">
    <?php echo css('assets/stylesheets/screen.css') ?>
	<script>
		<?php echo file_get_contents(dirname(__FILE__).'/../../assets/scripts/head.js'); ?>
	</script>
</head>
<body>
    <header>
	    <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/WWNRW.png') ?>" width="240" height="100" alt="<?php echo html($page->title()) ?>" /></a></h1>
    </header>