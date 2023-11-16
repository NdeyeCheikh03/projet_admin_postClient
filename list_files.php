<?php
$files = glob("uploads/*");
foreach ($files as $file) {
    echo '<a href="' . $file . '" download>' . basename($file) . '</a><br>';
}
?>
