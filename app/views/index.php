<div class="home">

    <ul id="options">
        <?php
        $options = array(
            array('title' => 'sunrises', 'route' => 'sunrises', 'img' => '2011_09_03_04_49_56.jpg'),
            array('title' => 'sunsets', 'route' => 'sunsets', 'img' => '2011_09_01_19_13_21.jpg'),
            array('title' => 'burn week', 'route' => 'burn', 'img' => '2011_09_03_20_55_57.jpg'),
            array('title' => 'full set', 'full' => '', 'img' => '2011_08_25_11_13_12.jpg'),
        );
        foreach($options as $option) { ?>
            <li>
                <a href="<?= root().$option['route']; ?>">
                    <span class="title"><?= ucwords($option['title']); ?></span>
                    <img src="<?= assets().sprintf('thumbs/%s', $option['img']); ?>"/>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>

</div>