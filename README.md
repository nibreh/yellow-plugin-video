Video plugin 0.6.7
==================
HTML5 video player.

<p align="center"><img src="video-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install plugin

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/nibreh/yellow-plugin-video/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `master.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to use the player

Create a `[video]` shortcut.

The following arguments are available, all but the first argument are optional:

`videourl` = URL to a supported media file (OGV, MP4, WEBM etc)  
`poster` = optional: specifies the URL of the image file

By default *width* is `100%` and *height* is `auto`.

This plugin embeds a basic video player using the HTML5 `<video>` tag, which should be supported by most modern browsers. This is the standard way to embed a video in a web page. [More on Wikipedia](https://en.wikipedia.org/wiki/HTML5_video).

## Example

Embedding an video:

    [video /media/downloads/demo.mp4] 
    [video /media/demo.webm /media/images/preview.jpg] 
    [video https://ia800201.us.archive.org/12/items/BigBuckBunny_328/BigBuckBunny.ogv]

## Developer

Juh Nibreh. Based on [Audio plugin](https://github.com/schulle4u/yellow-plugin-audio) by Steffen Schultz.
