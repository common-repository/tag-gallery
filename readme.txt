=== Tag Gallery ===
Contributors: johnnypeck
Donate link: http://johnnypeck.com
Tags: gallery, valid-xhtml, media-tags, tags, thumnails
Requires at least: 2.9
Tested up to: 3.2.1
Stable tag: 0.2.0

Create a gallery, similar to gallery shortcode, but gets images by tag from media library. The CSS and column logic used is from Justin Tadlock.

== Description ==

Implements a short-code `[tag-gallery]`, very similar to the `[gallery]` short-code, that gets images from the media library based on media tags. This makes it very easy to manage your galleries from the media library rather than the clunky way media in galleries is managed currently. It was created quickly to solve a simple problem. If it becomes popular I'll spend some more time on it, adding features, etc.

**REQUIREMENTS:** You must have [Paul Menard's Media Tags](http://wordpress.org/extend/plugins/media-tags/) plugin installed or it will do nothing for you. Optionally, but highly recommended, you should install [Justin Tadlock's Cleaner Gallery](http://wordpress.org/extend/plugins/cleaner-gallery/) to get the java-script light-box effects.

**Features:**

* Manage galleries from the Media Library using tags.
* User selectable thumbnail size width and height.
* User selectable number of columns.
* Supports Cleaner Gallery javascript settings if installed.
* Choose to show captions or not.
* Multiple tags allowed, comma separated without spaces.

**Usage:**
On any post or page place the short-code `[tag-gallery tag=mytag]` and the plugin will generate, by default, a 3 column gallery with thumbnails 150px x 150px without captions.
The following options are available:

* `tag` - The tag you want from the media library, defaults to 'tag'
* `itemtag` - HTML wrapping each item, default is dl.
* `icontag` - HTML wrapping each image, default is dt.
* `captiontag` - Caption HTML tag, default is dd.
* `captionson` - True/False whether to show captions. Default is false.
* `columns` - Number of columns. 
* `theight` - Thumbnail height.
* `twidth`  - Thumnail width.

== Installation ==

1. Upload `tag-gallery` to the `/wp-content/plugins/` directory.
1. Make sure you have Paul Menards Media Tags plugin installed and activated.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Add tags to your images in the Media Library.
1. On any post or page, input the short-code `[tag-gallery tag=mytag columns=3]`
1. Enjoy!

== Frequently Asked Questions ==

= Why was this plugin created? =

The plugin was created to simplify the management of galleries on a wordpress website as I found the current gallery rather clunky.

= How do I set it up? =

It should work out of the box so long as Media Tags is installed.  If you have Cleaner Gallery installed this plugin will use your javascript settings from that plugin to enhance the tag gallery.  The first time the gallery is displayed it will take a bit of time to generate thumbnails but thereafter, the cached images are used so it will be fast.

= Are the thumbnails cached, and where? =

Yes, the thumbnails are generated once and then cached in `/wp-content/plugins/tag-gallery/timthumb/cache/`.  Currently, there is no way to clear the cache from the interface.  You can, however, delete the images in that directory to rebuild the cache next time the gallery is viewed.

= Can I set the thumbnail size? =

Yes. In the shortcode add the theight and twidth attributes like the following [tag-gallery tag=mytag theight=100 twidth=100]

= Does it support multiple galleries on a single page/post? =

Yes, simply put more tag-gallery shortcodes on your post and they will work fine, including valid id's thanks to Justin Tadlock.

= Does it support multiple tags? =

Yes. You can set a comma separated list of tags in the short code without spaces. Make sure not to separate the commas and tags with spaces or you will get some awkward results.

== Screenshots ==

1. Short-code in a post.
2. Multiple galleries on a single page.
3. Using Thickbox setting from Cleaner Gallery.

== Upgrade Notice ==

= 0.2.0 =
Clear your cache. If images are still not working, go to the TimThumb directory of Tag Gallery. 
Open the timthumb-config.php file and edit the variable $_SERVER['DOCUMENT_ROOT'] to point to 
the absolute path of your site on your server.

= 0.1.9 =
Clear your cache directory after you update.

= 0.1.5 =
Nothing special.

= 0.1 =
Nothing to do. Initial Release. Install. Enjoy.

== Changelog ==

**Version 0.2.0**

*Fix, hopefully for most cases, TimThumb path issues.

**Version 0.1.9**

*TimThumb update to alleviate security concerns in that library.

**Version 0.1.5**

* Tested for multiple tags and it works fine. 
* Changes to the readme.txt
* Removed the screen-shots folder.

**Version 0.1**

* Initial release.  