<?php

	if (!defined('wagentim')) {
		die('Hacking attempt in init.php');
	}
	
	/* To make sure that the system inital process is only executed once */
	if (defined('INIT_SYSTEM_DONE')) {
		echo "The system inital has been done!";
		exit ;
	} else {
		define('INIT_SYSTEM_DONE', TRUE);
	}
	
	require 'constants_system.php';
	
	if (!defined('DEBUG_MODE')) {
		define('DEBUG_MODE', 0);
	}
	
	/* avoiding magic quotes */
	if (!get_magic_quotes_gpc()) {
		if (!empty($_GET)) {
			$_GET = addslashes_deep($_GET, true);
		}
		if (!empty($_POST)) {
			$_POST = addslashes_deep($_POST, true);
		}
		$_COOKIE = addslashes_deep($_COOKIE, true);
		$_REQUEST = addslashes_deep($_REQUEST, true);
	}
	
	/**
	 * rewrite addslashes_deep with two parameters for adding slash both in key and value
	 */
	function addslashes_deep($value, $htmlspecialchars = false) {
		if (empty($value)) {
			return $value;
		} else {
			if (is_array($value)) {
				foreach ($value as $key => $v) {
					unset($value[$key]);
	
					if ($htmlspecialchars == true) {
						$key = get_magic_quotes_gpc() ? addslashes(stripslashes(htmlspecialchars($key, ENT_NOQUOTES))) : addslashes(htmlspecialchars($key, ENT_NOQUOTES));
					} else {
						$key = get_magic_quotes_gpc() ? addslashes(stripslashes($key)) : addslashes($key);
					}
	
					if (is_array($v)) {
						$value[$key] = addslashes_deep($v);
					} else {
						if ($htmlspecialchars == true) {
							$value[$key] = get_magic_quotes_gpc() ? addslashes(stripslashes(htmlspecialchars($v, ENT_NOQUOTES))) : addslashes(htmlspecialchars($v, ENT_NOQUOTES));
						} else {
							$value[$key] = get_magic_quotes_gpc() ? addslashes(stripslashes($v)) : addslashes($v);
						}
					}
				}
			} else {
				if ($htmlspecialchars == true) {
					$value = get_magic_quotes_gpc() ? addslashes(stripslashes(htmlspecialchars($value, ENT_NOQUOTES))) : addslashes(htmlspecialchars($value, ENT_NOQUOTES));
				} else {
					$value = get_magic_quotes_gpc() ? addslashes(stripslashes($value)) : addslashes($value);
				}
			}
	
			return $value;
		}
	}
?>