<?PHP
if (!defined ("TYPO3_MODE")) die ("Access denied.");

$tempColumns = Array (
	"tx_news2forum_create_topic" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:news2forum/locallang_db.xml:tt_news.tx_news2forum_create_topic",		
		"config" => Array (
			"type" => "check",
		)
	),
);


t3lib_div::loadTCA("tt_news");
t3lib_extMgm::addTCAcolumns("tt_news",$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes("tt_news","tx_news2forum_create_topic;;;;1-1-1");

require_once(t3lib_extMgm::extPath($_EXTKEY).'class.tx_news2forum_tcemainprocdm.php');
?>
