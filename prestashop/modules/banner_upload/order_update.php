<?php
require_once(dirname(__FILE__).'/../../config/settings.inc.php');
require_once(dirname(__FILE__).'/../../classes/Db.php');

$action = $_POST['action']; 
$updateRecordsArray = $_POST['recordsArray'];
$block = $_POST['block'];

$listingCounter = 1;
	
foreach ($updateRecordsArray as $recordIDValue)
{
	$listingCounter = $listingCounter + 1;		
	Db::getInstance()->Execute('
		UPDATE '._DB_PREFIX_.'blmod_upl_banner SET
		recordListingID = "'. $listingCounter .'"
		WHERE id = "'. $recordIDValue .'" AND position = "'.$block.'"
	');
}

?>