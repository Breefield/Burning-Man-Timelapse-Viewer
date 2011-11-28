<div id="container">
    <ul id="photos" class="clearfix">
        <?php
        foreach($photos as $photo) {
            ?>
            <li>
                <a rel="timelapse" href="<?php echo assets().sprintf('resized/%s', getFilename($photo)); ?>">
                    <div class="info">
                        <?php
                        $time = mktime($photo['hour'], $photo['minute'], $photo['second'], $photo['month'], $photo['day'], 2011);
                        echo date('M j', $time).' at '.date('g:i a', $time);
                        ?>
                    </div>
                    <img src="<?php echo assets().sprintf('thumbs/%s', getFilename($photo)); ?>"/>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
</div> <!--! end of #container -->

<script type="text/javascript">
    var page = '<?= (isset($options['page'])) ? $options['page'] : 0; ?>';
</script>