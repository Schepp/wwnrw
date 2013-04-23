    <footer>
		<?php echo kirbytext($pages->find('impressum')->text()) ?>
	</footer>
	<script>
		<?php echo file_get_contents(dirname(__FILE__).'/../../assets/scripts/foot.js'); ?>
	</script>
</body>
</html>