<div class="container">
    <div class="row-fluid">
        <?php if (!empty($content['field_text_page_snippets'])) : ?>
            <div class="span9">
                <?php echo render($content['field_text_page_content_items']); ?>
            </div>
            <div class="span3">
                <?php echo render($content['field_text_page_snippets']); ?>
            </div>
        <?php else : ?>
            <div class="span12">
                <?php echo render($content['field_text_page_content_items']); ?>
            </div>
        <?php endif; ?>
    </div>
</div>