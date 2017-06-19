<?php

// CraftVM

define('CRAFT_ENVIRONMENT', getenv('CRAFT_ENV_ENVIRONMENT'));
define('CRAFT_CONFIG_PATH', '../craft/config/');
define('CRAFT_STORAGE_PATH', '../craft/storage/');
define('CRAFT_TEMPLATES_PATH', '../templates/');

// Craft
$craftPath = '../craft';
$path = rtrim($craftPath, '/').'/app/index.php';

if (!is_file($path))
{
	if (function_exists('http_response_code'))
	{
		http_response_code(503);
	}
	exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
