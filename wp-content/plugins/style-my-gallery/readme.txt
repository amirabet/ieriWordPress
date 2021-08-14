=== Style My Gallery ===
Author: Bev Stofko
Contributors: BStofko
Donate link: http://stofko.ca
Tested up to: 3.3
Stable tag: trunk
Requires at least: 2.8.4
Tags:  pictures, gallery, photo, image, media, tags, flexslider, responsive

Style galleries using popular scripts - currently only FlexSlider. Supports multiple galleries per page.

== Description ==

This plugin will allow a gallery of images pulled from the media library to be displayed using popular scripts. Currently this plugin supports:

* FlexSlider, an awesome, fully responsive jQuery slider plugin by Tyler Smith. http://flex.madebymufffin.com/

Displays a simple thumbnail list if Javascript is disabled. Supports multiple galleries on a single page.

[Demo](http://stofko.ca/style-my-gallery/)

To insert a Style My Gallery gallery:

1. Using shortcode [style-my-gallery], the images attached to the post/page will be used.
2. Using shortcode [style-my-gallery mediatag=tagname], images in the Media Library tagged using the MediaTags plugin by Paul Menard are collected into the gallery. 

== Installation ==

1. Unzip to the /wp-content/plugins/ directory
2. Activate the plugin through the 'Plugins' menu in WordPress

= Adding a gallery to your page/post =

1. Upload images using the Wordpress image uploader on your post or page or into the media library. 
2. Use the shortcode [style-my-gallery] anywhere in the post or page

Standard gallery options may be used:

* id
* order (Default is ASC)
* orderby (Default is menu_order ID)
* include
* exclude
* size (Default is large. Choose thumbnail, medium, large or full)

These additional Style My Gallery specific options may be used:

* style - Default is 'FlexSlider'. 
* mediatag  - Corresponds to Media Tags plugin by Paul Menard. This option will pull matching media out of your media library and include it in the gallery
* css - Adds the given CSS styles to containing box. Example [style-my-gallery css="max-width: 400px;"]
* options - Adds the given options to the JavaScript object. Example [style-my-gallery options='animation: "fade", controlNav: false,']

Note - if using the "slide" animation with FlexSlider, you must specify 'controlsContainer: ".flex-container"' in your option list.

== Frequently Asked Questions ==

None yet...

== Screenshots ==

1. Examples

== Changelog ==

Version 1.2 (April 17, 2012)

* Remove Imageflow due to lack of GPL license

Version 1.1 (January 17, 2012)

* Fix the display of FlexSlider direction arrows when using the slide animation by adding a new outer div with class .flex-container

Version 1.0 (January 14, 2012)

* Initial version

== Upgrade Notice ==

= 1.1 =
This version corrects the display of FlexSlider direction arrows when using the slide animation

