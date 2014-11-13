<div class="slider-inner">
    <div id="da-slider" class="da-slider">
        <?php foreach ($items as $delta => $item): ?>
            <?php print render($item); ?>
        <?php endforeach; ?>
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </nav>
    </div>
</div>