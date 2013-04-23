<?php snippet('header') ?>
<?php snippet('menu') ?>
    <main>
      <article>
        <?php echo kirbytext($page->text()) ?>
        
        <?php 
		$naechstestreffen = $pages->find('treffen')->children->first();
		echo '<h2>Nächstes Treffen: Do. '.html($naechstestreffen->datum()).'</h2>';
		echo '<ul class="topics">';
		
		$themen = $naechstestreffen->children();
		foreach($themen as $thema){
			echo '<li><details><summary>';
			echo '<img src="http://api.twitter.com/1/users/profile_image?screen_name='.$thema->twitter().'&size=bigger" width="73" height="73">';
			echo html($thema->title()).'<br><small>'.html($thema->author()).'</small></summary>';
			echo kirbytext($thema->text());
			echo '</details></li>';
		}

		echo '</ul>';
		?>
        <h2>Anfahrt</h2>
        <div id="map"></div>
        <p><a href="http://maps.google.de/maps?hl=de&amp;t=v&amp;q=<?php echo rawurlencode($site->location()) ?>" target="_blank">Größere Karte</a></p>
      </article>
    </main>
<?php snippet('footer') ?>