<?php
function getFilename($row) {
    foreach($row as $i => $value) if(strlen($value) == 1) $row[$i] = '0'.$value;
    return sprintf('2011_%s_%s_%s_%s_%s.jpg', 
                   $row['month'], 
                   $row['day'], 
                   $row['hour'], 
                   $row['minute'], 
                   $row['second']);
}
?>