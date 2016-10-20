<?php
// Copyright (c) 2013-2015 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// HTML5 video player plugin
class YellowVideo
{
	const Version = "0.6.5";
	var $yellow;			//access to API
	
	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
	}
	
	// Handle page content parsing of custom block
	function onParseContentBlock($page, $name, $text, $shortcut)
	{
		$output = NULL;
		if($name=="video" && $shortcut)
		{
			list($videourl, $allow_dl) = $this->yellow->toolbox->getTextArgs($text);
			if(empty($allow_dl)) $allow_dl = 0;
			$output = "<video controls width=\"100%\" height=\"auto\"><source src=\"".htmlspecialchars($videourl)."\">HTML5 video not supported. ";
			if ($allow_dl == 1) {
				$output .="<a href=\"".htmlspecialchars($videourl)."\">Download</a>";
			}
			$output .="</video>\r\n";
		}
		return $output;
	}
}

$yellow->plugins->register("video", "YellowVideo", YellowVideo::Version);
?>
