<?php
define( '_JEXEC', 1 );
define('DS', DIRECTORY_SEPARATOR);

define('JPATH_BASE', dirname(__FILE__) );


define('ROOT', dirname(dirname(__FILE__)));

define('MODULE', 'modules');
define('COMPONENT', 'components');
define('TMPL', 'templates');

define('ADMIN', 'admin');



require_once('configuration.php');
require_once(ADMIN.'/base/class.request.php');
require_once(ADMIN.'/base/class.message.php');
require_once (ADMIN.'/base/class.database.php');
require_once(ADMIN.'/base/class.pagination.php');
require_once(ADMIN.'/base/class.session.php');
require_once(ADMIN.'/base/class.site.php');
require_once(ADMIN.'/base/class.user.php');
require_once(ADMIN.'/base/class.module.php');
require_once ADMIN.'/require.php';
require_once 'libraries/functions/system-message.php';
//require_once 'libraries/functions/readnumber.php';



$dbo = new Database();


$uo = new User();

		
		

/* $uid = $uo->get();

$gid = $uo->getGroupId($uid);

 */

$format = Request::get('format');
if($format=='json') {
	header('Content-Type:application/json');
	$siteDocument = new SiteJsonDocument();
}
else $siteDocument = new SiteDocument();
echo $siteDocument->render();


?>