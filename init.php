<?php

    if (!defined('wagentim'))
	{
    	die('Hacking attempt in init.php');
	}
	
	if (__FILE__ == '')
	{
		die('Fatal error code: 0' );
	}
	
	//######################################
	//	Path Defintions
	//######################################
	
	/* define the short name of the directory seperator */
    define('DS', DIRECTORY_SEPARATOR);
	
	/* define the root path of the web folder */
	define('PATH_ROOT', get_root_path().DS);
	
	/* define text file */
	define('test', PATH_ROOT.'test'.DS.'test.php');
	
	/* define common libs path */
	define('PATH_COMMON_LIBS', PATH_ROOT.'com_libs'.DS);
	
	/* define initial folder path */
	define('PATH_COMMON_INIT', PATH_ROOT.'com_init'.DS);
		
	/* the root path of the whole web files */
	function get_root_path()
	{
		return dirname(__FILE__);
	}
	
	require PATH_COMMON_INIT.'init.php';
	
	/* run test */
	require test;
    
?>