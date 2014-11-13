<div class="tab-pane <?php echo ($variables['elements']['#iter'] == 0 ? 'active' : ''); ?>" id="tab-<?php echo $variables['elements']['#iter']; ?>">
  <h4><?php echo render($content['field_tab_title']); ?></h4>
  <p>
    <?php echo render($content['field_tab_text']); ?>
  </p>
</div>