<?php

$this->title('B–Series: build custom websites that scale');

?>
<main class="b">
	<section class="hero sc--white">
		<div class="limit--tight center-column cp">
			<div class="b-icon">B</div>
			<div class="t--beta hero__text">
				<p>
					B-Series consists of
					<?= $this->html->link('Bento', '#bento')?>,
					<?= $this->html->link('Bureau', '#bureau')?>,
					<?= $this->html->link('Banque', '#boutique')?> and
					<?= $this->html->link('Boutique', '#boutique')?>.
					These four products can be mix ’n’ matched and extended by
					a wide range of high quality
					<?= $this->html->link('already available', 'https://github.com/search?q=topic%3Amodule+org%3Abseries&type=Repositories') ?>
					modules.
				</p>
				<p>
					Developers get direct access to internals, allowing you to create
					custom sites without the need to build fundamentals from scratch.
				</p>
				<p>
					Hard working content management professionals will find the
					admin-panel straightfoward and powerful, yet easy to learn.
				</p>
			</div>
			<div class="hero__actions">
				<?= $this->html->link('GitHub', 'https://github.com/bseries', [
					'class' => 'boxed-button hero__more',
					'target' => 'new'
				]) ?>
				<?= $this->html->link('Quickstart', [
					'controller' => 'Books',
					'action' => 'view',
					'name' => 'manual',
					'version' => '1.x',
					'page' => 'setup'
				], [
					'scope' => 'li3_docs',
					'class' => 'boxed-button hero__more'
				]) ?>
			</div>
		</div>
	</section>

	<section class="s--slideshow slideshow-container loading sc--gray">
		<article class="slideshow">
			<?= $this->assets->image('/app/img/slide/adb_1.jpg') ?>
			<?= $this->assets->image('/app/img/slide/adb_2.jpg') ?>
			<?= $this->assets->image('/app/img/slide/adb_3.jpg') ?>
			<?= $this->assets->image('/app/img/slide/adb_4.jpg') ?>
		</article>
	</section>

	<section id="bento" class="product sc--gray">
		<div class="limit--tight cp center-column">
			<div class="product__logo">
				<div class="product__logo__icon--bento product__logo__icon"></div>
				<div class="product__logo__right">
					<h1 class="product__logo__title h--alpha">Bento</h1>
					<div class="product__logo__type t--gamma">Software Development Kit (SDK)</div>
				</div>
			</div>
			<p class="t--delta">
				Bento is the foundation for all other products of the B–Series. It
				is built on top of the
				<?= $this->html->link('li₃ PHP Framework', 'http://li3.me', ['target' => 'new']) ?>,
				the first to break ground into major new technologies. Bento also provides user
				management, authentication means,
				<?= $this->html->link('tagging', 'https://github.com/bseries/base_tag', ['target' => 'new']) ?>,
				template helpers,
				<?= $this->html->link('data behaviors', 'https://github.com/bseries/base_core/tree/master/extensions/data/behavior' , ['target' => 'new']) ?>
				and other reusable elements. Bento provides primitives to connect you to service providers, like
				Vimeo, YouTube and SoundCloud.
			</p>
			<p class="t--delta">
				Without a sweat and thanks to professional features like async media transcoding and flexible
				version generation, does Bento handle gigabytes of audio, video, documents and images.
				<?= $this->html->link('Media processing', 'https://github.com/bseries/base_media', ['target' => 'new']) ?>,
				respects color profiles embedded in your images
				to create high definition results, even for Retina displays.
			</p>
			<ul class="product__features list--features--delta">
				<li>admin-panel
				<li>media-explorer
				<li>high definition images
				<li>HTML5 audio/video
				<li>user accounting
				<li>strong password encryption and protection against timing attacks
			</ul>
		</div>
	</section>

	<section id="bureau" class="product sc--gray">
		<div class="product__type t--gamma"></div>
		<div class="limit--tight cp center-column">
			<div class="product__logo">
				<div class="product__logo__icon--bureau product__logo__icon"></div>
				<div class="product__logo__right">
					<h1 class="product__logo__title h--alpha">Bureau</h1>
					<div class="product__logo__type t--gamma">Content Management System (CMS)</div>
				</div>
			</div>
			<p class="t--delta">
				Erstellen und verwalten Sie Beiträge und Neuigkeiten auf ihrer Website
				im Handumdrehen mit allen Features, die man auch von Bloggingsystem wie
				z.B. Wordpress gewohnt ist. Verschlagwortung, Einbetten von
				unterschiedlichen Medien, sowie ein WYSIWYG-Editor sind bereits mit an Bord.
			</p>
			<p class="t--delta">
				Sie mögen Tweets mit 160 Zeichen, schreiben gerne ausführlicher auf Facebook, machen
				Schnappschüsse auf Instagram und wollen sich die Zeit sparen alle Inhalte wieder bei sich auf
				der Seite zu bündeln? Genau das macht Bureau möglich. Egal wie rum. Zwitschern Sie
				demnächst aus dem Admin-Bereich heraus an Twitter. Oder Facebook. Oder oder oder.
			</p>
			<p class="t--delta">
				Wichtiger Termin, über den Sie Ihre Besucher informieren möchten? Mit Bureau legen sie
				bequem Veranstaltungen mit Datum, Zeit und Ort an und geben sie an entsprechender Stelle wieder
				aus. Immer alles im Blick.
			</p>
			<ul class="product__features list--features--delta">
				<li>Neuigkeiten
				<li>Banner
				<li>Intelligenter Social–Stream
				<li>Recordreleases
				<li>Variable Inhalte
				<li>Leistungsstarker WYSIWYG–Editor
				<li>Veranstaltungen
				<li>Videothek
				<li>Corporate– und Künstler–Portfolios
				<li>Sortieren von Einträgen per Drag 'n Drop
			</ul>
			<div class="product__actions">
				<?= $this->html->link(
					'Bureau Playoff PDF laden',
					$this->assets->url('/app/doc/bureau_playoffs.pdf'),
					['class' => 'button']
				) ?>
			</div>

		</div>
	</section>

	<section id="banque" class="product sc--gray">
		<div class="limit--tight cp center-column">
			<div class="product__logo">
				<div class="product__logo__icon--banque product__logo__icon"></div>
				<div class="product__logo__right">
					<h1 class="product__logo__title h--alpha">Banque</h1>
					<div class="product__logo__type t--gamma">Rechnungswesen</div>
				</div>
			</div>
			<p class="t--delta">
				Banque ist ein komplettes Rechnungswesen, das keine Wünsche offen lässt.
				Schreiben und erstellen Sie Rechnungen mit
				individuellen Positionen oder ergänzen Sie Teilzahlungen.
				Da freut sich die Buchhaltung.
				Und ihr Steuerberater.
			</p>
			<p class="t--delta">
				Exportieren Sie Ihre hinterlegten Lieferscheine und Rechnungen gleich als
				PDF. Auf Wunsch auch auf Ihrem eigenen Briefpapier. Dafür ist es doch
				schließlich da.
			</p>
			<p class="t--delta">
				Wer den Pfennig nicht ehrt, ist den Taler nicht wert. Banque garantiert höchste
				Präzision in der Handhabung von Brutto und Netto Preisen. Kein fehlender Cent
				bei der Abrechnung. Nirgendwo. Versprochen.
			</p>
			<ul class="product__features list--features--delta">
				<li>exakte Berechnungen
				<li>flexible Rechnungen
				<li>Steuerzonen und Währungen
				<li>Terminierungen und Daueraufträge
				<li>Auto-Invoicing
				<li>Kostenvoranschläge
				<li>PDF–Ausgabe
				<li>anpassbare Muster für z.B. Rechnungsnummern
			</ul>
		</div>
	</section>
	<section id="boutique" class="product sc--gray">
		<div class="limit--tight cp center-column">
			<div class="product__logo">
				<div class="product__logo__icon--boutique product__logo__icon"></div>
				<div class="product__logo__right">
					<h1 class="product__logo__title h--alpha">Boutique</h1>
					<div class="product__logo__type t--gamma">eCommerce System</div>
				</div>
			</div>
			<p class="t--delta">
				Haben Sie schon einmal versucht ihr Produkt auf einem Standard eCommerce System individuell zu
				inszenieren? Die Qual der Wahl zwischen hundert und einem Template, die alle nicht so recht
				zu Ihnen passen wollen?
			</p>
			<p class="t--delta">
				Boutique macht es Designern und Programmierern einfacher die richtige
				Tonalität für Ihre Kundschaft zu treffen und steht einer adäquaten Gestaltung nicht im Weg. Im
				Gegenteil, denn Gestaltungsfreiheit ist einer der Hauptgründe, warum wir Boutique entwickelt
				haben.
			</p>
			<p class="t--delta">
				Verwalten Sie Ihre Produkte, fassen selbige zu Gruppen zusammen und lassen Sie die
				anfallenden Versandkosten vom System dynamisch berechnen. Das alles in logischen Bestell-
				und Lieferabwicklungen, inklusive Zahlungsmethoden via PayPal, auf Rechnung oder Debit-Karte.
				Einfacher geht es nicht.
			</p>
			<p class="t--delta">
				Boutique enthält standardmäßig Banque.
			</p>
			<ul class="product__features list--features--delta">
				<li>Produkte und Produktgruppen mit Warenbestand
				<li>Zahlung per Debit-Karte, Lastschrift, Rechnung, PayPal oder Kreditkarte
				<li>Watchlist
				<li>Lieferabwicklung und PDF–Lieferscheine
				<li>Voucher
			</ul>
		</div>
	</section>
	<section class="s--image--small login sc--gray"></section>
	<section class="features sc--gray">
		<div class="limit--tight cp center-column">
			<ul class="list--features--alpha">
				<li>Mitbewerbern technologisch einen Schritt voraus
				<li>Keine Templates von der Stange
				<li>Einfache Bedienung
				<li>HTML5 und Mobile
				<li>Internationalisierbar
				<li>Tagging
				<li>Entwicklerfreundlich
				<li>Role-based access control (RBAC)
				<li>High-Performance und Throughput
				<li>OWASP Sicherheitsrichtlinien
				<li>E–Mailversand mit DKIM und SPF
				<li>Solide Datenspeicherung mit Transaktionen
			</ul>
		</div>
	</section>
</main>