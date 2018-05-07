# HTML5 video plugin 0.6.6
A HTML5 video player for Yellow. This plugin embeds a basic video player using the HTML5 `<video>` tag, which should be supported by most modern browsers. This is the standard way to embed a video in a web page. [More on Wikipedia](https://en.wikipedia.org/wiki/HTML5_video).

Based on [HTML5 audio plugin](https://github.com/schulle4u/yellow-plugin-audio) by schulle4u.

## How do I install this?

1. [Download and install Yellow](https://github.com/datenstrom/yellow/).
2. Download [master.zip](https://github.com/nibreh/yellow-plugin-video/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `master.zip` into your `system/plugins` folder.

## How to use the player?

Create a `[video]` shortcut.

The following arguments are available:

`videourl` = URL to a supported media file (OGV, MP4, WEBM etc)  
`poster` = optional: specifies the URL of the image file

By default *width* is `100%` and *height* is `auto`.

## Example

Embedding an video:

    [video /media/downloads/demo.mp4] 
    [video /media/demo.webm /media/images/preview.jpg] 
    [video https://ia800201.us.archive.org/12/items/BigBuckBunny_328/BigBuckBunny.ogv]
