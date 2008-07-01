<?PHP
if (!defined ("TYPO3_MODE")) die ("Access denied.");

// Hook for EDIT and INSERT
$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'EXT:news2forum/class.tx_news2forum_tcemainprocdm.php:&tx_news2forum_tcemainprocdm';

// Hook for DELETE
$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][] = 'EXT:news2forum/class.tx_news2forum_tcemainprocdm.php:&tx_news2forum_tcemainprocdm';
?>
