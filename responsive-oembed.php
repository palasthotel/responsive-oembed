<?php

/**
 * Plugin Name: Responsive oEmbed
 * Description: Adds a wrapper element around oEmbed elements and applies some CSS to maintain the aspect ratio, which is calculated from the iframe, object or embed html tag width and height attributes. An aspect ratio will only be applied, if both width AND height attributes are given and if there is no data-secret attribut (because those are handled via wp-embed.js). Some oEmbeds have no width or height attributes set, because they calculate their dimension via Javascript. In those cases this plugin has no effect. Uses both 'embed_oembed_html' and 'oembed_result' filter hooks to manipulate automated and manual oEmbed calls.
 * Version:     1.4
 * Author:      Palasthotel <rezeption@palasthotel.de> (Kim-Christian Meyer)
 * Author URI:  https://palasthotel.de
 * License:     GNU General Public License v3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * @copyright   Copyright (c) 2018, Palasthotel GfdPmbH Berlin
 */


function responsive_oembed_oembed_html( $html ) {
	if ( ! is_admin() && strpos( $html, '<div class="responsive-oembed-wrapper ' ) === false ) {
		$ratio = responsive_oembed_get_embed_ratio( $html );

		if ( empty( $ratio ) ) {
			$html = '<div class="responsive-oembed-wrapper has-no-aspect-ratio">' . $html . '</div>';
		} else {
			$inline_style = ' style="padding-top: ' . esc_attr( round( $ratio * 100, 3 ) ) . '%"';
			$html = '<div class="responsive-oembed-wrapper has-aspect-ratio"' . $inline_style . '>' . $html . '</div>';
		}
	}

	return $html;
}
add_filter( 'embed_oembed_html', 'responsive_oembed_oembed_html', 99 );
add_filter( 'oembed_result', 'responsive_oembed_oembed_html', 99 );


/**
 * Register style sheet.
 */
function responsive_oembed_register_plugin_styles() {
	wp_enqueue_style( 'responsive-oembed', plugins_url( 'responsive-oembed.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'responsive_oembed_register_plugin_styles' );


/**
 * Searches $html for iframe, object or embed tag for width and height attributes and returns the ratio, otherwise false.
 * @param  string $html The HTML code, which contains an iframe, object or embed tag.
 * @return mixed false, if no width AND height attributes are found, otherwise the ratio (height / width) as double.
 */
function responsive_oembed_get_embed_ratio( $html ) {
	$width = 0;
	$height = 0;

	// Get all html attributes and values as one string
	$matches1 = false;
	$success1 = preg_match( "~ < (?:iframe|object|embed) \s+ ([^>]+) > ~xusi", $html, $matches1 );
	if ( empty( $success1 ) || empty( $matches1 ) || count( $matches1 ) < 2 ) {
		return false;
	}

	// iFrames with data-secret attribute are already responsive via wp-embed.js
	if ( strpos( $matches1[ 0 ], ' data-secret=' ) !== false ) {
		return false;
	}

	// Collect all html attributes and values in arrays
	$attributes_string = $matches1[ 1 ];
	$success2 = preg_match_all( "~ (\w+) = ['\"]? (\d*) ['\"]? ~xusi", $attributes_string, $matches2 );

	if ( empty( $success2 ) ) {
		return false;
	}

	for ( $i = 0; $i < count( $matches2[ 1 ] ); $i++ ) {
		if ( strtolower( $matches2[ 1 ][ $i ] ) === 'width' ) {
			$width = intval( $matches2[ 2 ][ $i ] );
		}
		if ( strtolower( $matches2[ 1 ][ $i ] ) === 'height' ) {
			$height = intval( $matches2[ 2 ][ $i ] );
		}
	}

	if ( empty( $width ) || empty( $height ) ) {
		return false;
	}

	return $height / $width;
}
