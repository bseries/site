<?php

use base_core\base\Sites;
use base_core\extensions\cms\Settings;
use lithium\util\Text;

$contact = Settings::read('contact');
$site = Sites::current($this->_request);

?>
<footer>
	<div class="limit--normal cp center-column">
		<?= $this->_render('element', 'copyright', [
			'holder' => $this->html->link(
				$site->title(),
				['controller' => 'pages', 'action' => 'home']
			)
		]) ?>

		<?= $this->html->link('Imprint', 'Pages::imprint') ?>
	</div>
</footer>