<?php
defined('_JEXEC') or die('Restricted access');

global $dbo;
$dbo->setQuery("		SELECT menu.id as mid, parent_id, menu.alias as malias, menu.title as mtitle
						FROM menu INNER JOIN menu_type ON menu_type_id = menu_type.id
						WHERE menu.published = 1
							AND menutype = 'topmenu'
						ORDER BY menu.ordering ASC
					  ");
$menuList = $dbo->loadObjectList();