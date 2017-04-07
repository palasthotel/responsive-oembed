=== Responsive oEmbed ===
Contributors: greatestview, palasthotel
Donate link: https://palasthotel.de/
Tags: oembed, responsive, aspect ratio, iframe, youtube, vimeo, instagram, twitter, soundcloud
Requires at least: 4.0
Tested up to: 4.7.3
Stable tag: 1.1
License: GNU General Public License v3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Makes oEmbed elements (like YouTube, Twitter or Instagram) scale responsively.

== Description ==
This plugin uses some minimal CSS rules and a wrapping HTML element to maintain the aspect ratio of any oEmbed element (e. g. YouTube, Instagram, Twitter posts).

Unlike other plugins, this plugin does not use any JavaScript!

The aspect ratio is calculated from the (iframe, object or embed) HTML tag width and height attributes. An aspect ratio will only be applied, if both width AND height attributes are given by the oEmbed element. Some oEmbeds have no width or height attributes set, because they calculate their dimension via JavaScript. In those cases a default fallback aspect ratio might result in wrong appearances.

You can find a [list of all oEmbed sites supported by WordPress here](https://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F).

== Installation ==
1. Upload `responsive-oembed.zip` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. You’re done! Try pasting a YouTube, Instagram or any other oEmbed URL into a post. Open the post and resize your browser window, the oEmbed element should scale properly.

== Copyright ==
digitale Pracht WordPress Theme, Copyright 2017 Palasthotel GfdPmbH Berlin
digitale Pracht is distributed under the terms of the GNU GPL

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

== Changelog ==

= 1.1 =
* Allow any aspect ratios.

= 1.0 =
* First release
