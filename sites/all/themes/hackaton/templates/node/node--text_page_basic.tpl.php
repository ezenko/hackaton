<div class="container">
    <div class="row-fluid">
        <?php if (!empty($content['field_snippet_bar'])) : ?>
            <div class="span9">
                <div class="headline">
                    <h3><?php echo render($content['field_text_page_display_title']); ?></h3>
                </div>
                <?php echo render($content['field_text_page_body']); ?>
            </div>
            <div class="span3">
                <?php echo render($content['field_snippet_bar']); ?>
            </div>
        <?php else : ?>
            <div class="span12">
                <?php echo render($content['field_text_page_body']); ?>
            </div>
        <?php endif; ?>
    </div>
</div>