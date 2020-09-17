<!doctype html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Error 404 - Page Not Found!</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/404.css" />
	<link href="<?= base_url(); ?>/assets/images/favicon.png" rel="shortcut icon" type="image/x-icon" />
</head>

<body>
	<div class="container">
		<img class="ops" src="<?= base_url(); ?>/assets/images/404.svg" />
		<br />
		<h3>
			<?php if (!empty($message) && $message !== '(null)') : ?>
				<?= esc($message) ?>
			<?php else : ?>
				Sorry! Cannot seem to find the page you were looking for.
			<?php endif ?>
		</h3>
		<a class="buton" href="<?= base_url(); ?>">RotMan</a>
	</div>
</body>

</html>