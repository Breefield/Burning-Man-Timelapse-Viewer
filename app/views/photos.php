<ul id="photos" class="clearfix">
    <?php
    foreach($photos as $i => $photo) {
        $show = $i % 5;
        ?>
        <li class="<?= $show == 0 ? 'time' : ''; ?>">
            <a rel="timelapse" href="<?php echo assets().sprintf('resized/%s', getFilename($photo)); ?>">
                <div class="info">
                    <?php
                    $time = mktime($photo['hour'], $photo['minute'], $photo['second'], $photo['month'], $photo['day'], 2011);
                    echo date('D. M j', $time).' at '.date('g:i a', $time);
                    ?>
                </div>
                <img src="<?php echo assets().sprintf('thumbs/%s', getFilename($photo)); ?>"/>
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