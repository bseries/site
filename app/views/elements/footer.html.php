<?php

use base_core\base\Sites;
use base_core\extensions\cms\Settings;
use lithium\util\Text;

$contact = Settings::read('contact');
$site = Sites::current($this->_request);

?>
<footer>
	<div class="limit--normal cp center-column">
		<?= $this->html->link('Privacy', 'https://atelierdisko.de/privacy', ['target' => 'new']) ?> /
		<?= $this->html->link('Imprint', 'https://atelierdisko.de/imprint', ['target' => 'new']) ?> /
		<?= $this->_render('element', 'copyright', [
			'holder' => $this->html->link(
				'Atelier Disko',
				'https://atelierdisko.de'
			)
		]) ?>
		<span class="built-with">
			Built with <span class="built-with__bureau">Bureau</span>.
		</span>
	</div>
</footer>
