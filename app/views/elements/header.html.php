<?php

use base_core\base\Sites;

// The Sites class gives us access to Site objects, where each has a title and a FQDN.
// Each app can host multiple Sites if needed.
$site = Sites::current($this->_request);

// Use the `nav` helper to generate a menu easily. The helper is
// autoloaded from base_core\extensions\helper\Nav. For more
// information, see the API documentation in the helper class.
//
// $this->nav->add('main', 'News', 'Posts::index');
// ...
// echo $this->nav->generate('main')
$this->nav->add('main', 'GitHub', 'https://github.com/bseries', ['target' => 'new']);

$this->nav->add('main', 'Manual', [
	'controller' => 'Books',
	'action' => 'view',
	'name' => 'manual',
	'version' => '1.x',
	'page' => 'setup'
], ['scope' => 'li3_docs']);

?>
<header>
	<div class="limit--normal cp center-column">
		<?= $this->html->link($site->title(), '/', ['class' => 'logo', 'scope' => 'app']) ?>
		<?= $this->nav->generate('main', ['class' => 'main-nav', 'match' => 'loose']) ?>
	</div>
</header>