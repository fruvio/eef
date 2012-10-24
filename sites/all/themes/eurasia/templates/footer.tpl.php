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
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-5818613-1");
pageTracker._trackPageview();
</script>


<?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
   <div id="page-footer-wrapper">
    <div id="page-footer" class="clearfix">
    
   
      <div id="footer-columns" class="clearfix container_12">
       <div class="grid_2">
        <?php print render($page['footer_firstcolumn']); ?>
       </div>
       <div class="grid_2">
        <?php print render($page['footer_secondcolumn']); ?>
       </div>
       <div class="grid_2">
        <?php print render($page['footer_thirdcolumn']); ?>
        </div>
        <div class="grid_2">
        <?php print render($page['footer_fourthcolumn']); ?>
        </div>
        <div class="grid_2">
        <?php print render($page['footer_fifthcolumn']); ?>
        </div>
        <div class="grid_2">
        <?php print render($page['footer_sixthcolumn']); ?>
        </div>
      </div> <!-- /#footer-columns -->
      
       <?php print render($page['footer']); ?>
   
   </div></div> <!-- /#page-footer /#page-footer-wrapper -->
 <?php endif; ?>

    <div id="footer" class="clearfix container_12">
    <div class="grid_5">
       <div class="ef-info">Eurasia Foundation<br /> 1350 Connecticut Ave. <br /> NW Suite 1000 <br /> Washington, DC 20036 <br /> (202) 234-7370<br /><a href="http://www.efnetwork.org">EFNet</a></div>
      </div>
      <div class="grid_4">
      <div class="disclaimer">
      This website is made possible by the generous support of the American people through the United States Agency for International Development (USAID). The contents are the responsibility of Eurasia Foundation and do not necessarily reflect the views of USAID or the United States Government.
      </div>
      </div>
      <div class="grid_3">
      <a id="usaid" title="USAID Aid from the American People" href="http://www.usaid.gov">USAID</a>
     </div>
      
     
    </div></div> <!-- /#footer /#footer-wrapper -->
    
    
   </div></div> <!-- /#page, /#page-wrapper -->
   
   </body>
   </html>