<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "css_to_style"
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'CssToStyle',
	'description' => 'Parses an css file into inline style attributes',
	'category' => 'plugin',
	'author' => 'Thomas Allmer',
	'author_email' => 'd4kmor@gmail.com',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>