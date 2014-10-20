<?php
	
	//######################################
	//	DB informations
	//######################################
	
	define('DB_HOST', '')
	define('DB_NAME', '$value');
	define('DB_USER_NAME');
	define('DB_PWD', $value);
	
	//######################################
	//	Charset
	//######################################
	
	/* using utf-8 as the default charset */
	define('CHARSET', 'utf-8');
	
	//######################################
	//	DEBUG
	//######################################
	
	/* user data */
	define('ERR_USERNAME_EXISTS',       1); // 用户名已经存在
	define('ERR_EMAIL_EXISTS',          2); // Email已经存在
	define('ERR_INVALID_USERID',        3); // 无效的user_id
	define('ERR_INVALID_USERNAME',      4); // 无效的用户名
	define('ERR_INVALID_PASSWORD',      5); // 密码错误
	define('ERR_INVALID_EMAIL',         6); // email错误
	define('ERR_USERNAME_NOT_ALLOW',    7); // 用户名不允许注册
	define('ERR_EMAIL_NOT_ALLOW',       8); // EMAIL不允许注册
?>