<?php snippet('header') ?>
<?php #snippet('menu') ?>
	<main>
		<article>
			<div id="sliderFrame">
				<div id="slider" style="background: url(<?php echo $page->images()->first()->url() ?>) no-repeat left top">
					<?php
					foreach($page->images() as $image){
						echo '<img src="//wit.wurfl.io/w_598/'.$image->url().'">';
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
			$naechstestreffen = $pages->find('treffen')->children->last();
			echo '<h2>Nächstes Treffen: '.html($naechstestreffen->datum()).'</h2>';
			if((bool) $naechstestreffen->hinweis()) echo '<p>'.html($naechstestreffen->hinweis()).'</p>';
			echo '<ul class="topics">';

			$themen = $naechstestreffen->children();
			foreach($themen as $thema){
				echo '<li>';
				echo '<h3>'.html($thema->title()).'<br><small>'.html($thema->author()).'</small></h3>';
				echo kirbytext($thema->text());
                if((bool) $thema->material() && !!trim(strval($thema->material()))) echo '(<a href="'.html($thema->material()).'">Material</a>)';
				echo '</li>';
			}

			echo '</ul>';
			?>
		</article>
		<hr>
		<article>
			<h2>Vergangene Treffen</h2>
            <ul class="archive">
			<?php
			$vergangenetreffen = $pages->find('treffen')->children()->flip()->offset(1);

			foreach($vergangenetreffen as $treffen){
				$themenarray = array();
				$themen = $treffen->children();
				foreach($themen as $thema){
					$currentthema = '<strong>';
                    $currentthema .= html($thema->title());
                    $currentthema .= '</strong>';
                    if((bool) $thema->material() && !!trim(strval($thema->material()))) $currentthema .= ' (<a href="'.html($thema->material()).'">Material</a>)';
                    $currentthema .= '<br><em>'.html($thema->author()).'</em>';
                    $themenarray[] = $currentthema;
				}
				if(count($themenarray)){
					echo '<li>
						<h3>'.html($treffen->datum()).'</h3>
						<ul><li>'.implode('</li><li>',$themenarray).'</li></ul>
					</li>';
				}
			}
			?>
            </ul>
		</article>
		<hr>
		<article>
			<h2>Location</h2>
			<p>Coworking Space GarageBilk<br>
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
			E-Mail: <a href="mailt&#111;&#58;s&#99;h%61&#37;&#54;5p&#112;&#64;&#103;m&#120;%2&#69;de">schaepp&#64;gmx&#46;de</a><br>
            Meetup.com: <a href="http://www.meetup.com/Webworker-NRW/">Webworker NRW</a><br>
            Twitter: <a href="https://twitter.com/wwnrw">@wwnrw</a><br>
			Facebook: <a href="http://www.facebook.com/wwnrw">Facebook</a><br>
			Google+: <a href="https://plus.google.com/109970663953331374396" rel="publisher">Google+</a></p>
			<p>Inhaltlich Verantwortlicher gemäß § 10 Absatz 3 MDStV: Christian Schaefer (Anschrift wie oben)</p>
        </article>
        <hr>
        <article>
            <h2>Danksagungen</h2>

            <p><img src="<?php echo url('assets/images/logo-garagebilk.png') ?>" width="128" height="54"></p>

            <p>Vielen Dank an den <a href="http://www.garagebilk.de/">Coworking Space GarageBilk</a> für das Bereitstellen der Räumlichkeiten! <3</p>

            <p><img src="<?php echo url('assets/images/logo-blanko.png') ?>" width="125" height="22"></p>

            <p>Und vielen Dank an <a href="http://blanko.biz">die beste Agentur der Welt</a> für das Sponsoring der Raumkosten! <3</p>

            <p><img src="<?php echo url('assets/images/logo-elektrowecker.png') ?>" width="101" height="25"></p>

            <p>Ebenso vielen Dank an <a href="https://twitter.com/derPepo">@derPepo</a> von <a href="http://www.elektrowecker.de" title="Webdesign aus Bottrop">elektrowecker.de (Webdesign aus Bottrop)</a> für das Bereitstellen der Domain webworker-nrw.de! <3</p>

            <p><img src="<?php echo url('assets/images/logo_jetbrains.png') ?>" width="100" height="32"></p>

            <p>Danke an <a href="http://www.jetbrains.com/">JetBrains</a> für das Sponsoring von Softwarelizenzen! <3</p>

            <p><img src="<?php echo url('assets/images/logo-ovau.png') ?>" width="76" height="39"></p>

            <p>Vielen Dank auch an <a href="http://ovau.de">Oliver Vaupel</a> für das Entwickeln und Beisteuern eines fantastischen Logos! <3</p>

            <p>Und nicht zuletzt danke an <a href="https://twitter.com/labuero">Christian Siedler</a> und <a href="https://twitter.com/NandoRocket">Ferdi Hierl</a> für die tollen Fotos! <3</p>

        </article>
	</main>
<?php snippet('footer') ?>
