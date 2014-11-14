<?php
  $align = render($content['field_rtm_media_alignment']);
?>

<div class="container">
  <!-- About Us -->
  <?php if (!empty($content['field_rtm_display_title'])) : ?>
    <div class="headline"><h3><?php echo render($content['field_rtm_display_title']); ?></h3></div>
  <?php endif; ?>
  <div class="row-fluid margin-bottom-30">
    <?php if ($align == 'right') : ?>
      <div class="span6">
        <?php echo render($content['field_rtm_text']); ?>
      </div>
      <div class="span6">
        <?php if (!empty($content['field_rtm_vimeo_link'])) : ?>
          <iframe src="<?php echo render($content['field_rtm_vimeo_link']); ?>" width="100%" height="327" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
        <?php elseif (!empty($content['field_rtm_image'])) : ?>
          <?php echo render($content['field_rtm_image']); ?>
        <?php endif; ?>
      </div>
    <?php else : ?>
      <div class="span6">
        <?php if (!empty($content['field_rtm_vimeo_link'])) : ?>
          <iframe src="<?php echo render($content['field_rtm_vimeo_link']); ?>" width="100%" height="327" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
        <?php elseif (!empty($content['field_rtm_image'])) : ?>
          <?php echo render($content['field_rtm_image']); ?>
        <?php endif; ?>
      </div>
      <div class="span6">
        <?php echo render($content['field_rtm_text']); ?>
      </div>
    <?php endif; ?>
  </div><!--/row-fluid-->
  <!--//End About Us -->
</div>