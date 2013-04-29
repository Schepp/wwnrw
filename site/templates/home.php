<?php snippet('header') ?>
<?php #snippet('menu') ?>
	<main>
		<article>
			<div id="sliderFrame">
				<div id="slider" style="background: url(<?php echo $page->images()->first()->url() ?>) no-repeat left top">
					<?php
					foreach($page->images() as $image){
						echo '<img src="'.$image->url().'">';
					}
					?>
				</div>
			</div>
		</article>
		<article>
			<h2>Über uns</h2>
			<?php echo kirbytext($page->text()) ?>
		</article>
		<hr>
		<article>
			<?php 
			$naechstestreffen = $pages->find('treffen')->children->first();
			echo '<h2>Nächstes Treffen: Do. '.html($naechstestreffen->datum()).'</h2>';
			echo '<ul class="topics">';
			
			$themen = $naechstestreffen->children();
			foreach($themen as $thema){
				echo '<li>';
				echo '<img src="http://api.twitter.com/1/users/profile_image?screen_name='.$thema->twitter().'&size=bigger" width="73" height="73">';
				echo '<h3>'.html($thema->title()).'<br><small>'.html($thema->author()).'</small></h3>';
				echo kirbytext($thema->text());
				echo '</li>';
			}
			
			echo '</ul>';
			?>
		</article>
		<hr>
		<article>
			<h2>Location</h2>
			<p>Coworking Space Garage Bilk<br>
			im Hinterhof<br>
			Bilker Allee 217<br>
			40215 Düsseldorf</p>
			<div id="map">
				<a href="http://tiles.mapbox.com/schepp/map/map-8ymj20sc" target="_blank">
					<img src="http://a.tiles.mapbox.com/v3/schepp.map-8ymj20sc/6.780712471580494,51.209823834533175,18/600x400.png" width="600" height="400">
				</a>
			</div>
			<p><a href="http://tiles.mapbox.com/schepp/map/map-8ymj20sc" target="_blank">Größere Karte</a></p>
		</article>
		<hr>
		<article>
			<h2>Kontakt &amp; Impressum</h2>
			<p>Christian "Schepp" Schaefer<br>
			Erasmusstraße 5<br>
			40223 Düsseldorf</p>
			<p>Tel: 0211 / 835 68 26<br>
			E-Mail: <a href='mailt&#111;&#58;s&#99;h%61&#37;&#54;5p&#112;&#64;&#103;m&#120;%2&#69;de'>schaepp&#64;gmx&#46;de</a><br>
			Twitter: <a href="https://twitter.com/wwnrw">@wwnrw</a><br>
			Facebook: <a href="http://www.facebook.com/wwnrw">Facebook</a><br>
			Google+: <a href="https://plus.google.com/109970663953331374396" rel="publisher">Google+</a></p>
			<p>Inhaltlich Verantwortlicher gemäß § 10 Absatz 3 MDStV: Christian Schaefer (Anschrift wie oben)</p>
		</article>
	</main>
<?php snippet('footer') ?>