<?php

// Get page uri
$pathExtension = pathinfo($_SERVER['REQUEST_URI'], PATHINFO_EXTENSION);
$uri = substr($_SERVER['REQUEST_URI'], 0, -(strlen($pathExtension)+1));

// Output txt of raw contents
header('Content-type: text/plain; charset=utf-8');
echo $site->find($uri)->content()->raw;

?>