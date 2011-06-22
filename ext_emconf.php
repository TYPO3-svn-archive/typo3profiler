<?php

########################################################################
# Extension Manager/Repository config file for ext "typo3profiler".
#
# Auto generated 22-06-2011 13:50
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TYPO3 profiler',
	'description' => 'TYPO3 profiler store the slowest queries and parsetimes of page generation. It can help you to optimize your website performance.',
	'category' => 'module',
	'author' => 'CERDAN Yohann [Site-nGo]',
	'author_email' => 'cerdanyohann@yahoo.fr',
	'shy' => '',
	'dependencies' => 'reports',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.0.6',
	'constraints' => array(
		'depends' => array(
			'reports' => '',
			'php' => '5.0.0-0.0.0',
			'typo3' => '4.3.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:27:{s:9:"ChangeLog";s:4:"17eb";s:21:"ext_conf_template.txt";s:4:"cf9f";s:12:"ext_icon.gif";s:4:"914a";s:17:"ext_localconf.php";s:4:"c60a";s:14:"ext_tables.php";s:4:"2b6d";s:14:"ext_tables.sql";s:4:"ee9b";s:30:"icon_tx_typo3profiler_page.gif";s:4:"914a";s:29:"icon_tx_typo3profiler_sql.gif";s:4:"914a";s:16:"locallang_db.xml";s:4:"1fc8";s:7:"tca.php";s:4:"dc97";s:14:"doc/manual.sxw";s:4:"2b3f";s:40:"hooks/class.user_typo3profiler_hooks.php";s:4:"8d67";s:13:"mod1/conf.php";s:4:"3a50";s:14:"mod1/index.php";s:4:"a52b";s:18:"mod1/locallang.xml";s:4:"9be7";s:22:"mod1/locallang_mod.xml";s:4:"afe4";s:19:"mod1/moduleicon.gif";s:4:"66d9";s:13:"mod2/conf.php";s:4:"d8a1";s:14:"mod2/index.php";s:4:"f753";s:18:"mod2/locallang.xml";s:4:"695a";s:22:"mod2/locallang_mod.xml";s:4:"935d";s:19:"mod2/moduleicon.gif";s:4:"c92a";s:16:"modmain/conf.php";s:4:"802b";s:17:"modmain/index.php";s:4:"e40e";s:25:"modmain/locallang_mod.xml";s:4:"898c";s:22:"modmain/moduleicon.gif";s:4:"914a";s:28:"xclass/class.ux_t3lib_db.php";s:4:"e023";}',
	'suggests' => array(
	),
);

?>