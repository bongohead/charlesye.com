<?php

foreach (glob('/var/www/web-framework/php-files/*.php') as $filename) {
    require_once($filename);
}


if (isset($_POST) && isset($_POST['isAjax'])) {
	routeAjax(
		$postVars = $_POST,
		$modelsDir = __DIR__.'/../sql',
		$db = 'ef'
	);
} else {
	routePage(
		templatesDir: __DIR__.'/templates',
		templatesCacheDir: __DIR__.'/cache',
		modelsDir: __DIR__.'/../sql',
		toScript: [],
		jsDir: __DIR__.'/../js',
		routes: [
			['template' => 'home', 'request' => ['', 'home'], 'title' => 'Charles Y.', 'models' => [], 'js' => ['init', 'home', 'fc-rates-tcurve', 'ac-assets-hm']],
		],
		errorRoute: ['template' => 'error', 'request' => 'error', 'title' => 'Error', 'js' => []],
		baseJsFiles: ['functions', 'moment.min', 'gradient-min'],
		devMode:  ($_SERVER['REMOTE_ADDR'] === '24.42.246.68') ? true : false,
		db: 'ef'
	);
}