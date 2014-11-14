<li class="span3">
  <div class="thumbnail-style thumbnail-kenburn">
    <div class="thumbnail-img">
      <div class="overflow-hidden">
        <?php echo render($content['field_case_studies_item_image']); ?>
      </div>
      <a class="btn-more hover-effect" href="<?php echo (!empty($content['field_case_studies_item_link']) ? render($content['field_case_studies_item_link']) : '#'); ?>"><?php echo t('read more +'); ?></a>
    </div>
    <h3><a class="hover-effect" href="<?php echo (!empty($content['field_case_studies_item_link']) ? render($content['field_case_studies_item_link']) : '#'); ?>"><?php echo render($content['field_case_studies_item_title']); ?></a></h3>
    <p>
      <?php echo render($content['field_case_studies_item_intro']); ?>
    </p>
  </div>
</li>