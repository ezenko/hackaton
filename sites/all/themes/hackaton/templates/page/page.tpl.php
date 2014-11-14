
<?php if (!empty($service_menu)) : ?>
  <div class="top">
    <div class="container">
      <?php echo str_replace('menu', 'loginbar pull-right', render($service_menu)); ?>
    </div>
  </div>
<?php endif; ?>

<!--=== Header ===-->
<div class="header">
  <div class="container">
    <!-- Logo -->
    <div class="logo">
      <a rel="home" class="custom-colour-bg" href="/" style="background-color: rgb(0, 0, 0);">
        <img src="<?php echo $logo; ?>" width="60" height="60" alt="Colours" title="Colours │Full service internetbureau │ Sitecore │Umbraco │Drupal │Episerver">
      </a>
    </div><!-- /logo -->

    <!-- Menu -->
    <div class="navbar">
      <div class="navbar-inner">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a><!-- /nav-collapse -->
        <div class="nav-collapse collapse">
          <?php echo render($main_menu); ?>

          <div class="search-open">
            <div class="input-append">
              <form />
              <input type="text" class="span3" placeholder="Search" />
              <button type="submit" class="btn-u">Go</button>
              </form>
            </div>
          </div>
        </div><!-- /nav-collapse -->
      </div><!-- /navbar-inner -->
    </div><!-- /navbar -->
  </div><!-- /container -->
</div><!--/header -->
<!--=== End Header ===-->

  <?php if($is_admin): ?><?php print $messages; ?><?php endif; ?>
  <?php print render($tabs); ?>
  <?php print render($page['content']); ?>
