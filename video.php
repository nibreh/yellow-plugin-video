<?php
// Copyright (c) 2013-2015 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// HTML5 video player plugin
class YellowVideo
{
	const Version = "0.6.7";
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
			list($videourl, $poster) = $this->yellow->toolbox->getTextArgs($text);
			if(empty($poster)) {
			$output = "<video controls style=\"width:100%; height:auto;\" src=\"".htmlspecialchars($videourl)."\">";
			$output .="</video>\r\n";
			}
			else {
			$output = "<video controls style=\"width:100%; height:auto;\" poster=\"".htmlspecialchars($poster)."\" src=\"".htmlspecialchars($videourl)."\">";
			$output .="</video>\r\n";
			}
		}
		return $output;
	}
}

$yellow->plugins->register("video", "YellowVideo", YellowVideo::Version);
?>
