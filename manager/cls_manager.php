<?php

	if (!defined('manager'))
	{
	    die('Hacking attempt in' . ROOT_PATH_PROJECT . 'cls_manager.php');
	}
	
	require (PATH_COMMON_LIBS . 'cls_common.php');
	
	define('MG_NAME', 'Selling Manager');
	define('MG_VERSION', 'v0.1');
	define('MG_RELEASE', '20141113');
	
	class MANAGER extends COMMON
	{
	    var $prefix  = 'mgr_';
		
	    function _construct()
	    {
			// DO NOTHING    	
	    }
	}

?>