<?php

return [
	'parameters' => [
		'database' => [
			'host' => getenv('DATA_DB_HOST'),
			'user' => getenv('DATA_DB_USER'),
			'password' => getenv('DATA_DB_PASS'),
			'db' => getenv('DATA_DB_NAME'),
		],
	],
];
