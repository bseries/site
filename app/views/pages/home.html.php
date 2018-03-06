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
				Effortlessly create and manage your website’s pages and posts with all features known from other blogging systems, i.e. WordPress.
				Also included are tagging, embedding different types of media and a WYSIWYG editor.
			</p>
			<p class="t--delta">
				You tweet 320 characters, write extensive texts on Facebook and post snapshots on Instagram?
				Bureau makes it possible to save time and unite all content on your own site.
				Comfortably tweet from your admin area to Twitter, Facebook and Co.
			</p>
			<p class="t--delta">
				If you want to inform your visitors about an important date, you can easily create and display new events with a date, time and place. Always keeping everything in view.
			</p>
			<ul class="product__features list--features--delta">
				<li>news
				<li>banner
				<li>smart social-stream
				<li>record releases
				<li>dynamic content
				<li>powerful WYSIWYG editor
				<li>events
				<li>video library
				<li>corporate- and artist portfolios
				<li>sorting posts via drag and drop
			</ul>
			<div class="product__actions">
				<?= $this->html->link(
					'Download Bureau Playoff PDF',
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
					<div class="product__logo__type t--gamma">Accounting</div>
				</div>
			</div>
			<p class="t--delta">
				Banque is a complete accounting system leaving nothing to be desired.
				Write and create invoices, complete partial payments and more.
				Your accountant will be very happy. As well as your tax consultant.
			</p>
			<p class="t--delta">
				Export your stored delivery notes and invoices directly as a PDF. If you wish, on your own letterhead. After all it’s there for that.
			</p>
			<p class="t--delta">
				Take care of the pennies, and the pounds will look after themselves.
				Banque guarantees the highest precession when handling gross or net prices.
				No penny will get lost when settling the invoice. Nowhere, we promise.
			</p>
			<ul class="product__features list--features--delta">
				<li>exact calculations
				<li>flexible invoices
				<li>tax zones and currencies
				<li>termination and standing orders
				<li>auto-invoicing
				<li>estimates
				<li>PDF output
				<li>fully customizable sample invoices
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
				Have you ever tried to deploy a customized product on a standard eCommerce system? Picking a template from hundreds, all not quite matching your vision?
			</p>
			<p class="t--delta">
				Find the right design tonality for your customer with Boutique.
				Enabling adequate design and design freedom are the two main reasons why we developed Boutique.
			</p>
			<p class="t--delta">
				Manage your products, combine them in groups and get your arising shipping costs calculated dynamically by the system. All in consistent order and delivery processing, including payment methods like PayPal, invoice or debit card.
			</p>
			<p class="t--delta">
				Boutique includes Banque by default.
			</p>
			<ul class="product__features list--features--delta">
				<li>products and product groups with inventory
				<li>payment by debit card, invoice, PayPal or credit card
				<li>watchlist
				<li>delivery processing and PDF delivery notes
				<li>vouchers
			</ul>
		</div>
	</section>
	<section class="s--image--small login sc--gray"></section>
	<section class="features sc--gray">
		<div class="limit--tight cp center-column">
			<ul class="list--features--alpha">
				<li>stay one step ahead of competitors with technology
				<li>no off-the-shelf templates
				<li>easy handling
				<li>HTML5 and mobile
				<li>internationalisation possible
				<li>tagging
				<li>developer-friendly
				<li>role-based access control (RBAC)
				<li>high-performance und throughput
				<li>OWASP security guidelines
				<li>email dispatch with DKIM and SPF
				<li>solid data storage with transactions
			</ul>
		</div>
	</section>
</main>
