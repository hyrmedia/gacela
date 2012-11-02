<?php

set_include_path(get_include_path().PATH_SEPARATOR.dirname(__DIR__).'/');

require_once 'library/Gacela.php';

$gacela = Gacela::instance();

$gacela->registerNamespace('Test', __DIR__);

$source = Gacela::createDataSource(
	array(
		'type' => 'mysql',
		'name' => 'db',
		'user' => 'gacela',
		'password' => 'gacela',
		'schema' => 'gacela',
		'host' => 'localhost'
	)
);

$test = Gacela::createDataSource(
	array(
		'type' => 'mysql',
		'name' => 'test',
		'user' => 'gacela',
		'password' => 'gacela',
		'schema' => 'test',
		'host' => 'localhost'
	)
);

Gacela::instance()->registerDataSource($source);
Gacela::instance()->registerDataSource($test);

Gacela::instance()->registerNamespace('App', __DIR__.'/../samples/');