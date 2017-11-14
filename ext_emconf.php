<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Erweitert tx_news um Feld',
	'description' => 'Erweitert die News um ein Feld',
	'category' => 'be',
	'author' => 'Franz König',
	'author_email' => 'franz@koenig.digital',
	'author_company' => 'koenig.digital',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '',
			'fluid' => '',
			'typo3' => '6.2.12-8.7.99',
			'news' => '3.2.0',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);