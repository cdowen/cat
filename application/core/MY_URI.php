<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_URI extends CI_URI {

	/**
	 * 自定义的url过滤函数
	 *
	 * @access	private
	 * @param	string
	 * @return	string
	 */

    function _filter_uri($str)
    {
        if ($str != '' && $this->config->item('permitted_uri_chars') != '' && $this->config->item('enable_query_strings') == FALSE)
        {
            $str = urlencode($str);
	    if ( ! preg_match("|^[".str_replace(array('\\-', '\-'), '-', preg_quote($this->config->item('permitted_uri_chars'), '-'))."]+$|i", $str))
	    {
                show_error('The URI you submitted has disallowed characters. yeah');
            }
            $str = urldecode($str);
        }
        
        // Convert programatic characters to entities
	$bad	= array('$',		'(',		')',		'%28',		'%29');
	$good	= array('&#36;',	'&#40;',	'&#41;',	'&#40;',	'&#41;');
        return str_replace($bad, $good, $str);
    }  
}

/*
original function
	function _filter_uri($str)
	{
		if ($str != '' && $this->config->item('permitted_uri_chars') != '' && $this->config->item('enable_query_strings') == FALSE)
		{
			// preg_quote() in PHP 5.3 escapes -, so the str_replace() and addition of - to preg_quote() is to maintain backwards
			// compatibility as many are unaware of how characters in the permitted_uri_chars will be parsed as a regex pattern
			if ( ! preg_match("|^[".str_replace(array('\\-', '\-'), '-', preg_quote($this->config->item('permitted_uri_chars'), '-'))."]+$|i", $str))
			{
				show_error('The URI you submitted has disallowed characters.', 400);
			}
		}

		// Convert programatic characters to entities
		$bad	= array('$',		'(',		')',		'%28',		'%29');
		$good	= array('&#36;',	'&#40;',	'&#41;',	'&#40;',	'&#41;');

		return str_replace($bad, $good, $str);
	}
*/
?>