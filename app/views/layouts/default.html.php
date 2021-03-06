<?php

// The default application layout.

use lithium\util\Inflector;

$library = $this->request()->library;

?>
<!doctype html>
<html lang="<?= strtolower(str_replace('_', '-', $locale)) ?>">
	<head>
		<!-- Basics -->
		<?php echo $this->html->charset() ?>
		<link rel="icon" href="<?= $this->assets->url('/app/ico/app.png') ?>">

		<!-- SEO -->
		<?php echo $this->seo->title() ?>
		<?php echo $this->seo->description() ?>

		<!-- Compatibility -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- Styles -->
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
		<?php
			$styles = array_merge(
				$this->assets->availableStyles('base'),
				$this->assets->availableStyles('view'),
				$this->assets->availableStyles('layout')
			);
			if ($library === 'li3_docs') {
				$styles[] = '/app/css/docs';
			}
		?>
		<?php echo $this->assets->style($styles) ?>
		<?php echo $this->styles() ?>

		<!-- Global Application Object Definition -->
		<script>
			App = <?php echo json_encode($app, JSON_PRETTY_PRINT) ?>
		</script>

		<!-- Scripts -->
		<?php
			$scripts = array_merge(
				[
					'/app/js/compat/core',
					'/app/js/require'
				],
				$this->assets->availableScripts('base'),
				$this->assets->availableScripts('view'),
				$this->assets->availableScripts('layout')
			);
		?>
		<?php echo $this->assets->script($scripts) ?>
		<?php echo $this->scripts() ?>

		<?php if (!PROJECT_HONOR_DNT || !$this->_request->is('dnt')): ?>
			<!-- Tracking -->
			<?php if (PROJECT_GA): ?>
				<?=$this->_render('element', 'ga', [], ['library' => 'app']) ?>
			<?php endif ?>
		<?php endif ?>

		<!-- Dynamically added -->
	</head>
	<?php
		$classes = ['layout-' . $this->_config['layout']];

		if ($authedUser) {
			$classes[] = 'user-authed';
		}
		if ($library === 'li3_docs') {
			$classes[] = 'li3-docs';
		}
		if (isset($extraBodyClasses)) {
			$classes = array_merge($classes, $extraBodyClasses);
		}
	?>
	<body class="<?= implode(' ', $classes) ?>">
		<?= $this->_render('element', 'header', compact('authedUser', 'nav'), ['library' => 'app']) ?>
		<?php echo $this->content() ?>
		<?= $this->_render('element', 'footer', compact('authedUser', 'nav'), ['library' => 'app']) ?>
	</body>
</html>