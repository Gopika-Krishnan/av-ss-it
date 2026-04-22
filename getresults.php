<?php
$files = glob('results/*.csv');
foreach($files as $file) {
    echo '<a href="'.$file.'" download>'.basename($file).'</a><br>';
}
?>
