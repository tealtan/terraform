<?php

// Get page uri
$pathExtension = pathinfo($_SERVER['REQUEST_URI'], PATHINFO_EXTENSION);
$uri = substr($_SERVER['REQUEST_URI'], 0, -(strlen($pathExtension)+1));

// Output json of raw contents
header('Content-type: application/json');
echo json_encode($site->find($uri)->content()->data);

?>