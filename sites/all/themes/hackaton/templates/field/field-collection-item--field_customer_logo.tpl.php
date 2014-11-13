<li class="customer-logo">
  <a href="<?php echo (!empty($content['field_customer_logo_link']) ? render($content['field_customer_logo_link']) : '#'); ?>">
    <?php echo render($content['field_customer_logo_image']); ?>
    <?php echo render($content['field_customer_logo_hover']); ?>
  </a>
</li>