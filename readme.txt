=== Responsive oEmbed ===
Contributors: palasthotel, greatestview
Donate link: https://palasthotel.de/
Tags: oembed, responsive, aspect ratio, iframe, youtube, vimeo, soundcloud
Requires at least: 4.0
Tested up to: 5.1
Stable tag: 1.4.1
License: GNU General Public License v3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Makes oEmbed elements with fixed aspect ratio (like YouTube, Vimeo or SoundCloud) scale responsively.

== Description ==
ATTENTION for WP Version 5+: This plugin does not work with Gutenberg (no problems with Classic Editor plugin though)! Gutenberg brings its own CSS for responsive oEmbed elements, so this plugin would double that and create strange effects.

This plugin uses some minimal CSS rules and a wrapping HTML element to maintain the aspect ratio of oEmbed elements with fixed aspect ratio (e. g. YouTube, Vimeo or Soundcloud).

Unlike other plugins, this plugin does not use any JavaScript!

The aspect ratio is calculated from the (iframe, object or embed) HTML tag width and height attributes. An aspect ratio will only be applied, if both width AND height attributes are given by the oEmbed element and if there is no data-secret attribut set (because those are handled via wp-embed.js). Some oEmbeds have no width or height attributes set, because they calculate their dimension via JavaScript. In those cases this plugin has no effect.

You can find a [list of all oEmbed sites supported by WordPress here](https://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F).

== Installation ==
1. Upload `responsive-oembed.zip` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. You’re done! Try pasting a YouTube, Vimeo or any other oEmbed URL into a post. Open the post and resize your browser window, the oEmbed element should scale properly.

== Changelog ==

= 1.4.1 =
* WordPress 5.1 compatibility check and readme.txt update.

= 1.4 =
* Exclude WordPress post embeds, because their size is handled via wp-embed.js.

= 1.3 =
* Fixed problem with unexpected margins in frontend and backend.

= 1.2 =
* Changed wrapper HTML tag to div to prevent parsing errors, when there are blockquotes or other p tags inside the oembed code.

= 1.1 =
* Allow any aspect ratios.

= 1.0 =
* First release
