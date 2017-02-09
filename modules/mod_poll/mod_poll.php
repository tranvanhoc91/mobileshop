<?php 
defined('_JEXEC') or die('Restricted access');


require_once(dirname(__FILE__).'/helper.php');


$pollObject = new modPollHelper();
$modTitle 	= $pollObject->getTitleModule();
$positon 	=	$pollObject->getPositionModule();

$polls		=	$pollObject->getPoll();

foreach ($polls AS $poll)

$options	=	$pollObject->getPollOptions($poll->id);
?>
