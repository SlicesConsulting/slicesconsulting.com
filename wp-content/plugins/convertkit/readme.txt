=== ConvertKit ===
Contributors: nathanbarry, davidlamarwheeler, growdev, nickohrn
Donate link: https://convertkit.com
Tags: email, marketing, embed form, convertkit, capture
Requires at least: 3.6
Tested up to: 4.5.3
Stable tag: 1.4.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

ConvertKit is an email marketing platform for capturing leads from your WordPress blog.

== Description ==

[ConvertKit](https://convertkit.com) makes it easy to capture more leads and sell more products by easily
embedding email capture forms anywhere. This plugin makes it a little bit easier for those of us using WordPress
blogs, by automatically appending a lead capture form to any post or page.

If you choose a default form on the settings page, that form will be embedded at the bottom of every post or page
(in single view only) across your site. If you wish to turn off form embedding or select a different form for
an individual post or page, you can do so within the ConvertKit meta box on the editing form.

Finally, you can insert the default form into the middle of post or page content by using the `[convertkit]` shortcode.

== Installation ==

1. Upload `wp-convertkit` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Visit the settings page by clicking on the link under the plugin's name
4. Enter your ConvertKit API key, which you can find [here](https://app.convertkit.com/account/edit), and save the settings
5. Select your default form and save the settings
6. If you wish, choose particular forms for each post or page by visiting the edit screen and choosing the correct form

== Frequently asked questions ==

= Does this plugin require a paid service? =

Yes, for it to work you must first have an account on ConvertKit.com

== Screenshots ==

1. Insert modal forms into any post
2. Add stunning landing pages

== Changelog ==

### 1.4.2

* Fixed issue with WishlistMember integration where members were not being subscribed.

### 1.4.1

* Add upgrade routine to change ID to form_id for API version 3.0

### 1.4.0

* Update ConvertKit API to version 3.0

### 1.3.9

* Fix WishList Member email sent to CK API when shopping cart used.

### 1.3.8

* Fix crash when API response is slow

### 1.3.7

* Avoid calling API endpoints when no forms need to be shown

### 1.3.6

* Fixes issue with illegal offset showing warning message

### 1.3.5

* Fix bug showing warning messages for some users

### 1.3.4

* Fix bug showing error messages for some users

### 1.3.3

* Updated for compatibility with WordPress 4.3

### 1.3.2

* Another fix for a pesky bug causing syntax errors

### 1.3.1

* Fixes a bug causing syntax error when getting options

### 1.3.0

* Added WishList Member integration
* Updated API methods

### 1.2.1

* Fixed a warning that appeared sometimes when no forms were loaded.

### 1.2.0

* Updated to use responsive forms

### 1.0.0

* Initial release

== Upgrade notice ==
