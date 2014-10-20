<?php

class COMMON
{
	var $db_prefix="";
	
	function table($table_name)
	{
		return '`' . $this->prefix . $table_name . '`';
	}
	
	/* encoding password */
	function compile_password($pass)
    {
        return md5($pass);
    }
	
    function get_domain()
    {
        $protocol = $this->get_protocol();

        /* domain or IP address */
        if (isset($_SERVER['HTTP_X_FORWARDED_HOST']))
        {
            $host = $_SERVER['HTTP_X_FORWARDED_HOST'];
        }
        elseif (isset($_SERVER['HTTP_HOST']))
        {
            $host = $_SERVER['HTTP_HOST'];
        }
        else
        {
            /* port */
            if (isset($_SERVER['SERVER_PORT']))
            {
                $port = ':' . $_SERVER['SERVER_PORT'];

                if ((':80' == $port && 'http://' == $protocol) || (':443' == $port && 'https://' == $protocol))
                {
                    $port = '';
                }
            }
            else
            {
                $port = '';
            }

            if (isset($_SERVER['SERVER_NAME']))
            {
                $host = $_SERVER['SERVER_NAME'] . $port;
            }
            elseif (isset($_SERVER['SERVER_ADDR']))
            {
                $host = $_SERVER['SERVER_ADDR'] . $port;
            }
        }

        return $protocol . $host;
    }

    function get_protocol()
    {
        return (isset($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) != 'off')) ? 'https://' : 'http://';
    }
	
	/**
     *	get data path
     */
    function data_dir($sid = 0)
    {
        if (empty($sid))
        {
            $s = 'data';
        }
        else
        {
            $s = get_user_files_path();
        }
        return $s;
    }

    /**
	 *	get image path 
	 */
    function image_dir($sid = 0)
    {
        if (empty($sid))
        {
            $s = 'images';
        }
        else
        {
            $s = get_user_files_path($sid);
            $s .= 'images';
        }
        return $s;
    }
	
	function get_user_files_path($sid)
	{
		$s = 'user_files/';
        $s .= ceil($sid / 3000) . '/';
        $s .= ($sid % 3000) . '/';
		
		return $s;
	}
}

?>