<?php

use base_core\extensions\cms\Settings;

$this->title('Imprint');
$contact = Settings::read('contact');

?>
<main class="imprint">
	<section class="imprint__contact limit--tight cp center-column">
		<h1 class="h--beta">
			Contact
			<span class="imprint__accordance">
				according to §5 <abbr title="Telemediengesetz">TMG</abbr>
			</span>
		</h1>
		<?=$this->_render('element', 'contact', ['item' => $contact['default']]) ?>
	</section>
</main>