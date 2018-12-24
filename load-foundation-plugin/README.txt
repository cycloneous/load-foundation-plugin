=== Plugin Name ===
Contributors: cycloneous
Donate link: https://cycloneous.wordpress.com
Tags: foundation 5, foundation
Requires at least: 4.0
Tested up to: 4.0
Stable tag: 5.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin loads the Foundation 5 libraries necessary for a mobile responsive website

== Description ==

The objective of this WordPress plugin is to load the Zurb Foundation Mobile Framework, version 5 series.

It is up to the user on how they implement or call the Zurb Foundation Mobile Framework.

== Attributions ==

All third party code included in this plugin are property of their respective owners / developers and
are distributed with their respective licenses

This plugin was created with WordPress Boiler Plate generator and all additional code was done by
Cycloneous

== Installation ==

e.g.

1. Upload `load-foundation-plugin` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress


== Frequently Asked Questions ==

= How do I load the Foundation Mobile Responsive Framework =

The plugin loads the framework for you in the header tag

= How do I execute Foundation so that it run when the page loads?  =

Put this code snippet below your footer or just before the "</body>" tag

<!-- start run Foundation -->
<script type = "text/javascript">
      $(document).foundation();
</script>
<!-- end of script -->

== Screenshots ==

No screenshots available

== Changelog ==

= 0.1 =

* first version of plugin

