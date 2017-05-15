<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
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
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
    <div class="<?php print $container_class; ?>">
    <div class="site-hd">
      <div class="header">
    <div class="navbar-header">
        <div class="container-secondary">
            <div class="secondaryNav">
      <?php if ($logo): ?>
        <div class="primaryNav-logo">
            <div class="u-desktopOnly">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
        </div>
        </div>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <?php endif; ?>

        <nav class="js-NavSelectView" role=navigation">
            <div class="secondaryNav-subNav js-NavSelectView-subNav">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
            </div>
        </nav>
            </div>
        </div>
    </div>
          <div class="container-primary">
              <div class="navig">
        <?php if (!empty($page['navigation'])): ?>
          <?php print render($page['navigation']); ?>
        <?php endif; ?>
          </div>
          </div>
      </div>
      <div class="search-form">
          <form id="search-form-a">
              <input name="q" class="search-field" placeholder="Search" autocomplete="off" type="search">
              <div class="search-button">
                  <button type="submit" class="search-overlay__btn">Go</button>
              </div>
              <div class="advanced-search">
                  <a href="/patients/advanced-search-tips" target="_blank">Advanced Search Tips</a>
              </div>
          </form>
      </div>
  </div>
    </div>
</header>
<div class="wrappert">
<div class="main-container <?php print $container_class; ?>">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
          <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>



  </div>
</div>


  <?php if (!empty($page['before_front_bottom'])): ?>
  <div class="page-before-bot">
    <?php print render($page['before_front_bottom']); ?>
  </div>
  <?php endif; ?>
  <?php if (!empty($page['front_bottom'])): ?>


      <div class="page-bot">
      <?php print render($page['front_bottom']); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($page['footer'])): ?>
    <footer class="footer-medtronic <?php print $container_class; ?>">
      <div class="site-ft">
        <div class="footer">
          <div class="footer-ft">
            <?php print render($page['footer']); ?>
          </div>
        </div>
      </div>
      <div class="footer-hd">
        <?php if (!empty($page['footer_bottom'])): ?>
          <?php print render($page['footer_bottom']); ?>
        <?php endif; ?>
        <div  class="copyright">
        <?php
        if (isset($node->changed)) {
          $updated_date1 = format_date($node->changed,'custom','j F Y' );
          print "Last Updated: " . $updated_date1;
        }
        ?>
          <div class="copyright-2">© 2017 Medtronic. All rights reserved.</div>
          </div>

      </div>
      <svg class="u-isVisuallyHidden">
        <symbol id="medtronicLogo" viewBox="0 0 104 17.07">
          <path d="M94.36,10.78c0-3.54,2.57-6.3,6.39-6.3c1.09,0,2.33,0.27,3.25,0.77v2.66h-0.07
    		c-0.94-0.56-1.89-0.82-2.95-0.82c-2.3,0-3.54,1.57-3.54,3.68c0,2.11,1.24,3.68,3.54,3.68c1.07,0,2.01-0.27,2.95-0.82H104v2.66
    		c-0.92,0.51-2.16,0.77-3.25,0.77C96.93,17.07,94.36,14.31,94.36,10.78 M94.07,16.83c-0.46,0.1-0.99,0.17-1.48,0.17
    		c-2.3,0-3.54-1.21-3.54-3.44V4.72h3.03v8.62c0,0.8,0.39,1.19,1.21,1.19c0.19,0,0.44-0.02,0.7-0.07h0.07V16.83z M92.4,1.77
    		c0,0.97-0.77,1.79-1.79,1.79c-0.97,0-1.77-0.82-1.77-1.79c0-0.97,0.8-1.77,1.77-1.77C91.62,0,92.4,0.8,92.4,1.77 M78.89,10.07
    		c0-1.86,0.94-3.08,2.69-3.08c1.72,0,2.52,1.14,2.52,3.08v6.76h3V9.95c0-2.91-1.5-5.47-4.77-5.47c-1.74,0-2.91,0.87-3.56,2.18V4.72
    		h-2.88v12.11h3V10.07z M67.93,14.48c2.16,0,3.27-1.57,3.27-3.71c0-2.13-1.11-3.71-3.27-3.71c-2.11,0-3.29,1.57-3.29,3.71
    		C64.64,12.91,65.82,14.48,67.93,14.48 M67.93,17.07c-3.8,0-6.37-2.76-6.37-6.3c0-3.54,2.57-6.3,6.37-6.3c3.78,0,6.35,2.76,6.35,6.3
    		C74.28,14.31,71.71,17.07,67.93,17.07 M57.47,10.49c0-1.96,1.02-3.05,2.95-3.05c0.34,0,0.7,0.05,1.04,0.15h0.05V4.77
    		c-0.31-0.12-0.73-0.19-1.19-0.19c-1.45,0-2.42,0.9-2.98,2.35v-2.2h-2.88v12.11h3V10.49z M37.54,14.53c2.03,0,3.17-1.57,3.17-3.78
    		c0-2.18-1.14-3.75-3.17-3.75c-2.06,0-3.12,1.57-3.12,3.75C34.41,12.96,35.48,14.53,37.54,14.53 M51.27,17.07
    		c-2.79,0-4.36-1.28-4.36-4.19V7.17h-3.34v6.08c0,0.9,0.34,1.26,1.07,1.26c0.17,0,0.36,0,0.58-0.05h0.07v2.37
    		c-0.29,0.07-0.87,0.14-1.31,0.14c-1.65,0-2.66-0.63-3.1-2.01c-0.87,1.36-2.25,2.11-3.97,2.11c-3.08,0-5.57-2.4-5.57-6.32
    		c0-3.87,2.49-6.27,5.57-6.27c1.53,0,2.78,0.58,3.66,1.65V0.12h3v4.6h3.34V1.84h3v2.88h3.22v2.45h-3.22v5.57
    		c0,1.21,0.61,1.79,1.77,1.79c0.53,0,0.9-0.05,1.38-0.17h0.07v2.47C52.55,16.98,51.85,17.07,51.27,17.07 M0,16.83h2.98L3.54,6.39
    		l0.12-2.83h0.05l0.63,2.83l2.42,10.44h3.73l2.45-10.44l0.61-2.83h0.05l0.12,2.83l0.58,10.44h3.1L16.37,0.12h-4.94L9.2,10.15
    		l-0.48,2.54H8.67l-0.51-2.54L5.93,0.12H0.99L0,16.83z M30.2,10.56c0,0.58-0.05,1.19-0.15,1.67h-8.72c0.31,1.45,1.55,2.35,3.87,2.35
    		c0.01,0,0.02,0,0.03,0c0.01,0,0.02,0,0.02,0c0.15,0,0.29-0.01,0.43-0.01c0.08,0,0.15-0.01,0.23-0.02c0.06,0,0.12-0.01,0.18-0.02
    		c0.97-0.1,1.89-0.36,2.73-0.75c0.07-0.03,0.13-0.06,0.2-0.1h0c0.17-0.09,0.34-0.18,0.5-0.28h0.07v2.45
    		c-1.28,0.77-2.77,1.22-4.37,1.22v-0.01c-0.06,0-0.12,0.01-0.18,0.01c-4.38,0-6.78-2.49-6.78-6.13c0-3.9,2.47-6.47,6.05-6.47
    		C27.92,4.48,30.2,7.02,30.2,10.56z M27.34,9.88C27.2,8.06,26.25,7,24.34,7c-1.77,0-2.86,1.11-3.05,2.88H27.34z">
          </path>
        </symbol>
        <symbol id="search" viewBox="0 0 16 16">
          <path d="M11.94,10.24c0.75-1.07,1.15-2.38,1.15-3.7
    	C13.09,2.93,10.16,0,6.54,0C2.93,0,0,2.93,0,6.54c0,3.62,2.93,6.54,6.54,6.54c1.31,0,2.62-0.42,3.71-1.15L14.32,16L16,14.32
    	L11.94,10.24z M10.9,6.54c0,2.4-1.95,4.35-4.35,4.35c-2.4,0-4.37-1.95-4.37-4.35c0-2.42,1.95-4.37,4.37-4.37
    	C8.94,2.18,10.9,4.14,10.9,6.54z">
          </path>
        </symbol>
        <symbol id="facebook" viewBox="-6 -6 27 27">
          <path d="M8.66,15V8.16h2.3l0.34-2.67H8.66v-1.7c0-0.77,0.21-1.3,1.32-1.3l1.41,0V0.11C11.15,0.07,10.31,0,9.34,0 C7.3,0,5.91,1.24,5.91,3.52v1.97h-2.3v2.67h2.3V15H8.66z">
          </path>
        </symbol>
        <symbol id="twitter" viewBox="-6 -6 27 27">
          <path d="M15,2.85c-0.55,0.24-1.14,0.41-1.77,0.48c0.64-0.38,1.12-0.98,1.35-1.7c-0.59,0.35-1.25,0.61-1.95,0.75 c-0.56-0.6-1.36-0.97-2.25-0.97c-1.7,0-3.08,1.38-3.08,3.08c0,0.24,0.03,0.48,0.08,0.7C4.83,5.06,2.56,3.83,1.04,1.97 C0.78,2.42,0.63,2.95,0.63,3.52c0,1.07,0.54,2.01,1.37,2.56C1.49,6.06,1.02,5.92,0.6,5.69c0,0.01,0,0.03,0,0.04 c0,1.49,1.06,2.73,2.47,3.02C2.81,8.82,2.54,8.86,2.26,8.86c-0.2,0-0.39-0.02-0.58-0.06c0.39,1.22,1.53,2.11,2.87,2.14 c-1.05,0.83-2.38,1.32-3.82,1.32c-0.25,0-0.49-0.01-0.73-0.04c1.36,0.87,2.98,1.38,4.72,1.38c5.66,0,8.76-4.69,8.76-8.76 c0-0.13,0-0.27-0.01-0.4C14.07,4.01,14.59,3.47,15,2.85z">
          </path></symbol>
        <symbol>
          <path id="search-svg"  fill="#ffffff" d="M27.1 23.5l-5-5c1.3-1.9 2-4.1 2-6.6C24.2 5.4 18.8 0 12.3 0 5.7 0 .4 5.4.4 11.9s5.4 11.9 11.9 11.9c2.1 0 4.1-.5 5.9-1.5l5.1 5.1 3.8-3.9zM4.3 11.9c0-4.4 3.6-8.1 8.1-8.1s8.1 3.6 8.1 8.1-3.6 8.1-8.1 8.1-8.1-3.6-8.1-8.1z"></path></symbol>
        <symbol id="youtube" viewBox="-6 -6 27 27">
          <path d="M12.93 0H4.57C0 0 0 1.3 0 4.51v3.13c0 3 .65 4.51 4.57 4.51h8.36c3.55 0 4.57-.85 4.57-4.51V4.51c0-3.38-.17-4.51-4.57-4.51zM7 8.45V3.54L11.68 6z""></path></symbol>
        <symbol id="linkedin" viewBox="-6 -6 27 27">
          <path d="M.5 13.1h2.8v-9H.5v9zM1.8 0C.8 0 .1.7.1 1.5S.7 3 1.7 3s1.7-.7 1.7-1.5C3.5.6 2.8 0 1.8 0zm9 4.1c-1.6 0-2.5.8-2.8 1.5V4.1H4.9c.1.7 0 8.9 0 8.9H8V8.2c0-.3 0-.5.1-.7.2-.5.7-1.1 1.5-1.1 1.1 0 1.6.8 1.6 2V13h3.1V8.1c0-2.8-1.5-4-3.5-4z"></path></symbol>


    </footer>
  <?php endif; ?>
