<?php

	if (__FILE__ == '')
	{
		die('Fatal error code: 0' );
	}

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT_PATH_PROJECT', get_project_root_path().DS);
	define('ROOT_PATH_MAIN', get_root_path().DS);
	define('PATH_COMMON_LIBS', ROOT_PATH_MAIN.'common'.DS);
	
	if (!defined('DEBUG_MODE'))
	{
	    define('DEBUG_MODE', 0);
	}
	
	/* avoiding magic quotes */
	if (!get_magic_quotes_gpc())
	{
	    if (!empty($_GET))
	    {
	        $_GET  = addslashes_deep($_GET);
	    }
	    if (!empty($_POST))
	    {
	        $_POST = addslashes_deep($_POST);
	    }
		// TODO find out where these two methods come from
	    // $_COOKIE   = addslashes_deep($_COOKIE);
	    // $_REQUEST  = addslashes_deep($_REQUEST);
	}
	
	/* the root path of the current project */
	function get_project_root_path()
	{
		return dirname(__FILE__);
	}
	
	/* the root path of the whole web files */
	function get_root_path()
	{
		return dirname(get_project_root_path());
	}
    
?>