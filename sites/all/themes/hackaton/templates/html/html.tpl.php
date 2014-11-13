<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
  </head>

  <body class="<?php print $classes; ?>" <?php print $attributes;?>>

    <!--=== Style Switcher ===-->
    <i class="style-switcher-btn icon-cogs"></i>
    <div class="style-switcher">
      <div class="theme-close"><i class="icon-remove"></i></div>
      <div class="theme-heading">Theme Colors</div>
      <ul class="unstyled">
        <li class="theme-default theme-active" data-style="default" data-header="light"></li>
        <li class="theme-blue" data-style="blue" data-header="light"></li>
        <li class="theme-orange" data-style="orange" data-header="light"></li>
        <li class="theme-red" data-style="red" data-header="light"></li>
        <li class="theme-light" data-style="light" data-header="light"></li>
      </ul>
    </div><!--/style-switcher-->
    <!--=== End Style Switcher ===-->


    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>


    <!--=== Footer ===-->
    <div class="footer">
      <div class="container">
        <div class="row-fluid">
          <div class="span4">
            <!-- About -->
            <div class="headline"><h3>About</h3></div>
            <p class="margin-bottom-25">Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals.</p>

            <!-- Monthly Newsletter -->
            <div class="headline"><h3>Monthly Newsletter</h3></div>
            <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
            <form class="form-inline" />
            <div class="input-append">
              <input type="text" placeholder="Email Address" class="input-medium" />
              <button class="btn-u">Subscribe</button>
            </div>
            </form>
          </div><!--/span4-->

          <div class="span4">
            <div class="posts">
              <div class="headline"><h3>Recent Blog Entries</h3></div>
              <dl class="dl-horizontal">
                <dt><a href="#"><img src="assets/img/sliders/elastislide/6.jpg" alt="" /></a></dt>
                <dd>
                  <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt><a href="#"><img src="assets/img/sliders/elastislide/10.jpg" alt="" /></a></dt>
                <dd>
                  <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt><a href="#"><img src="assets/img/sliders/elastislide/11.jpg" alt="" /></a></dt>
                <dd>
                  <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                </dd>
              </dl>
            </div>
          </div><!--/span4-->

          <div class="span4">
            <!-- Monthly Newsletter -->
            <div class="headline"><h3>Contact Us</h3></div>
            <address>
              25, Lorem Lis Street, Orange <br />
              California, US <br />
              Phone: 800 123 3456 <br />
              Fax: 800 123 3456 <br />
              Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
            </address>

            <!-- Stay Connected -->
            <div class="headline"><h3>Stay Connected</h3></div>
            <ul class="social-icons">
              <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
              <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
              <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
              <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
              <li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
              <li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
              <li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>
            </ul>
          </div><!--/span4-->
        </div><!--/row-fluid-->
      </div><!--/container-->
    </div><!--/footer-->
    <!--=== End Footer ===-->

    <!--=== Copyright ===-->
    <div class="copyright">
      <div class="container">
        <div class="row-fluid">
          <div class="span8">
            <p>2013 &copy; Unify. ALL Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
          </div>
          <div class="span4">
            <a href="index.html"><img id="logo-footer" src="assets/img/logo2-default.png" class="pull-right" alt="" /></a>
          </div>
        </div><!--/row-fluid-->
      </div><!--/container-->
    </div><!--/copyright-->
    <!--=== End Copyright ===-->

    <?php print $scripts; ?>
    <!-- JS Global Compulsory -->

    <script type="text/javascript">
      jQuery(document).ready(function() {
        App.init();
        App.initSliders();
        Index.initParallaxSlider();
      });
    </script>

    <?php if(!empty($google_code)) : ?>
      <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-29166220-1']);
        _gaq.push(['_setDomainName', 'htmlstream.com']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
      </script>
    <?php endif; ?>
  </body>
  
</html>