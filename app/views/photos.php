<ul id="photos" class="clearfix">
    <?php
    foreach($photos as $i => $photo) {
        $show = $i % 5;
        $time = mktime($photo['hour'], $photo['minute'], $photo['second'], $photo['month'], $photo['day'], 2011);
        $formatted_time = date('D. M j', $time).' at '.date('g:i a', $time)
        ?>
        <li class="<?= $show == 0 ? 'time' : ''; ?>">
            <a id="<?= $photo['id']; ?>" class="open" rel="timelapse" href="<?php echo assets().sprintf('resized/%s', getFilename($photo)); ?>" title="<?= $formatted_time; ?>">
                <div class="info">
                    <?= $formatted_time; ?>
                </div>
                <img src="<?php echo assets().sprintf('thumbs/%s', getFilename($photo)); ?>" class="thumb"/>
                <img src="<?php echo assets(); ?>img/fill.gif" class="fill"/>
            </a>
        </li>
        <?php
    }
    ?>
</ul>

<?php
//if(stripos(self(), 'burn') === false) {
    ?>
    <a href="<?= self(); ?>:page=<?= $options['page'] + 1; ?>" class="next-page">Next</a>
    <?php
//}
?>