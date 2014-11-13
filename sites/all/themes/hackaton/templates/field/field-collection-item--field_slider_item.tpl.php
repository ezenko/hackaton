<div class="da-slide">
    <h2><i><?php echo render($content['field_slider_title']); ?></i></h2>
    <p><i><?php echo render($content['field_slider_intro']); ?></i></p>
    <?php if (!empty($content['field_slider_additional_image'])) : ?>
        <div class="da-img"><?php echo render($content['field_slider_additional_image']); ?></div>
    <?php endif; ?>
    <?php if (!empty($content['field_slider_embed'])) : ?>
        <div class="da-img span6">
            <div class="span6">
                <iframe src="<?php echo render($content['field_slider_embed']); ?>" width="100%" height="320" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
            </div>
        </div>
    <?php endif; ?>
</div>