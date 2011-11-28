<?php

require('inc/common.php');

$batch = array();
$day_count = 0;
$last_day = 0;
foreach(scandir('resized') as $file) {
    $filename = explode('_', str_replace('.jpg', '', $file));
    if(count($filename) < 4) continue;

    if($last_day != (int)$filename[2]) {
        $day_count = 0;
    }
    $last_day = (int)$filename[2];

    array_push($batch, sprintf('(%d, %d, %d, %d, %d, %d, %d)', 
                       (int)$filename[1], 
                       (int)$filename[2],
                       (int)$filename[3],
                       (int)$filename[4],
                       (int)$filename[5],
                       mktime((int)$filename[3], (int)$filename[4], (int)$filename[5], (int)$filename[1], (int)$filename[2], 2011),
                       $day_count));
    $day_count++;
    
    if(count($batch) >= 100) {
        insertPhotos($batch);
        $batch = array();
    }
}
insertPhotos($batch);

function insertPhotos($batch) {
    $photos = implode(',', $batch);
    $query = sprintf('INSERT INTO photos (month, day, hour, minute, second, timestamp, day_count) VALUES %s', $photos);
    echo $query."\n";
    mysql_query($query) or die(mysql_error());;
}
?>