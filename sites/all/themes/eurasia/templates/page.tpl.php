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

<?php include $directory . "/templates/header.tpl.php"; ?>
    
	 <?php if ($is_front == FALSE) : ?>
      <div id="page-header" class="container_12 clearfix">
       <?php if (isset($node) && isset($section_title) || arg(0) == "user" && isset($section_title)) { 
	   print '<h1>' . $section_title . '</h1>'; } 
	   else { print '<h1>' . $title . '</h1>'; } ?>
      </div><!-- end /#page-header -->
     <?php endif; ?>
        
    <?php if ($page['featured']): ?>
     <div id="featured-wrapper" class="clearfix">
      <div id="featured">
       <?php print render($page['featured']); ?>
      </div>
     </div><!-- end /#featured-wrapper /*featured -->
    <?php endif; ?>
     
    <div id="main-wrapper" class="container_12"><div id="main" class="clearfix">
     
     <div id="content-wrapper">
    
     <?php print $messages; ?>
     
      <?php if ($page['above_content']): ?>
         <div class="grid_12">
        <?php print render($page['above_content']); ?>
        </div>
       <?php endif; ?>
     
	 <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="sidebar <?php if ($page['sidebar_first'] && $page['sidebar_second']) { print 'grid_2'; } else { print 'grid_2'; } ?>">
       <?php print render($page['sidebar_first']); ?>
      </div> <!-- /#sidebar-first -->
     <?php endif; ?>
      
    <div id="content" class="<?php if ($page['sidebar_first'] && $page['sidebar_second']) { print 'grid_6'; } elseif ($page['sidebar_first']) { print 'grid_6'; } elseif ($page['sidebar_second']) { print 'grid_8'; } else { print 'grid_12'; } ?>">
     <div class="main-content clearfix">
      <a id="main-content"></a>
       <?php print render($title_prefix); ?>
       <?php print render($title_suffix); ?>
       <?php if ($tabs): ?><div class="tabs clearfix"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
       <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
       <?php print render($page['content']); ?>
       <?php print $feed_icons; ?>
       <?php if ($page['below_content']): ?>
        <?php print render($page['below_content']); ?>
       <?php endif; ?>
        </div>
      </div> <!-- /.main-content /#content -->
      
     </div>

      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="sidebar grid_4">
          <?php print render($page['sidebar_second']); ?>
         </div> <!-- /#sidebar-second -->
      <?php endif; ?>
      
      

    </div></div> <!-- /#main, /#main-wrapper -->
   
<?php include $directory . "/templates/footer.tpl.php"; ?>