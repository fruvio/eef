<?php
// $Id: page.tpl.php,v 1.47 2010/11/05 01:25:33 dries Exp $

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>   
 
     <div id="page-wrapper"><div id="page">
     
      <div id="header" class="clearfix">
      
      <div id="search-wrapper">
      <div id="social-media-links">
       <ul>
	    <li><a title="Friend EF on Facebook" id="ef-facebook" href="http://www.facebook.com/group.php?gid=8872416357&ref=mf">Facebook</a></li>
	    <li><a title="EF's Flickr channel" id="ef-flickr" href="http://www.flickr.com/photos/40691554@N02/">Flickr</a></li>
	    <li><a title="Network with EF via Linkedin" id="ef-linkedin" href="http://www.linkedin.com/groups?mostPopular=&gid=2930299">LinkedIn</a></li>
	    <li><a title="Watch EF on YouTube" id="ef-youtube" href="http://www.youtube.com/user/EurasiaFoundation#p/u/4/z-y3hzKmMHY">YouTube</a></li>
	    <li><a title="Follow EF on Twitter" id="ef-twitter" href="http://twitter.com/efnetwork">Twitter</a></li>
        <li><a title="Subscribe RSS" id="ef-rss" href="/feed">Subscribe</a></li>
        <li class="last"><a title="Subscribe to email updates" id="ef-newsletter" href="/subscribe">Subscribe</a></li>
	   </ul>
     </div> <!-- end /#social-media-links -->
      
        <?php print render($page['header']); ?>
        
    </div> <!-- end /#seach-wrapper -->
      
       <div id="branding-wrapper" class="clearfix"><div id="branding" class="container_12">
      	<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"></a>
        <div class="tagline">Engaging Citizens, <br /> <span class="indent">Empowering Communities</span></div>
       </div></div> <!-- end /#branding /#branding-wrapper -->
       
        
        
      <div id="navigation-wrapper">
       <?php if ($main_menu) : ?>
       <div id="main-menu-wrapper">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('clearfix')))); ?>
       </div> <!--end /#menu-wrapper -->
       <?php endif; ?>
      </div> <!--end /#navigation-wrapper -->
    
      </div> <!-- /#header -->