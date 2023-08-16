<?php
$url = $_GET['url'];
if (filter_var($url, FILTER_VALIDATE_URL)) {
    $content = file_get_contents($url);
    header('Content-Type: text/html');
    echo $content;
} else {
    echo 'Invalid URL';
}
?>
