<?php

########################################################################
# Extension Manager/Repository config file for ext: "news2forum"
#
# Auto generated 30-06-2008 22:54
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'news2forum',
	'description' => 'Creates a new topic in mm_forum on a newspost',
	'category' => 'be',
	'shy' => 0,
	'version' => '1.1.1',
	'dependencies' => 'mm_forum',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Martin Hesse',
	'author_email' => 'mail@martin-hesse.info',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'mm_forum' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:7:{s:37:"class.tx_news2forum_tcemainprocdm.php";s:4:"7a1b";s:21:"ext_conf_template.txt";s:4:"5b82";s:17:"ext_localconf.php";s:4:"3220";s:14:"ext_tables.php";s:4:"88dd";s:14:"ext_tables.sql";s:4:"5f20";s:16:"locallang_db.xml";s:4:"7929";s:14:"doc/manual.sxw";s:4:"7fe1";}',
	'suggests' => array(
	),
);

?>