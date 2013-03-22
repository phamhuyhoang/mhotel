<?php
/**
* trongdd
* 16/3/2013
* Ham dang ky file css, images, js...
*/
function get_url()
{
    $CI= get_instance();
    $return = $CI->uri->uri_string();
    $return = substr($return, 1);
    
    if(strstr($return, '/')){
        $return = strstr($return, '/');
        $return = substr($return, 1);
    }
    
    return $return;
}
function asset_url($uri = null)
{
	$CI =& get_instance();
    if($uri == null)
    {
        return $CI->config->base_url('assets/');
    }
    else
    {
        return $CI->config->base_url('assets/'.$uri);
    }
}

function css_url($uri = null, $tag=false)
{
	if($tag)
	{
		$media=false;
		if(is_string($tag))
		{
			$media = 'media="'.$tag.'"';
		}
		return '<link href="'.asset_url('css/'.$uri).'" type="text/css" rel="stylesheet" '.$media.'/>';
	}
	
	return asset_url('css/'.$uri);
}

function js_url($uri=null, $tag=false)
{
	if($tag)
	{
		return '<script type="text/javascript" src="'.asset_url('js/'.$uri).'"></script>';
	}
	else
	{
		return asset_url('js/');
	}
}

function img_url($uri=null, $tag=false)
{
	if($tag)
	{
		return '<img src="'.asset_url('images/'.$uri).'" alt="'.$tag.'" />';
	}
	else
	{
		return asset_url('images/');
	}
	
}
?>