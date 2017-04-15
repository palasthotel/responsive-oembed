=== Responsive oEmbed ===
Contributors: palasthotel, greatestview
Donate link: https://palasthotel.de/
Tags: oembed, responsive, aspect ratio, iframe, youtube, vimeo, soundcloud
Requires at least: 4.0
Tested up to: 4.7.3
Stable tag: 1.2
License: GNU General Public License v3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Makes oEmbed elements with fixed aspect ratio (like YouTube, Vimeo or SoundCloud) scale responsively.

== Description ==
This plugin uses some minimal CSS rules and a wrapping HTML element to maintain the aspect ratio of oEmbed elements with fixed aspect ratio (e. g. YouTube, Vimeo or Soundcloud).

Unlike other plugins, this plugin does not use any JavaScript!

The aspect ratio is calculated from the (iframe, object or embed) HTML tag width and height attributes. An aspect ratio will only be applied, if both width AND height attributes are given by the oEmbed element. Some oEmbeds have no width or height attributes set, because they calculate their dimension via JavaScript. In those cases this plugin has no effect.

You can find a [list of all oEmbed sites supported by WordPress here](https://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F).

== Installation ==
1. Upload `responsive-oembed.zip` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. You’re done! Try pasting a YouTube, Vimeo or any other oEmbed URL into a post. Open the post and resize your browser window, the oEmbed element should scale properly.

== Changelog ==

= 1.2 =
* Changed wrapper HTML tag to div to prevent parsing errors, when there are blockquotes or other p tags inside the oembed code.

= 1.1 =
* Allow any aspect ratios.

= 1.0 =
* First release
