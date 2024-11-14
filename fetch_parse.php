<?php

$url = 'https://steelytoe.com/dev.titudev.com/api/v1/resources/event_header';

$jsonData = file_get_contents($url);


if ($jsonData === false) {
    die('Error fetching JSON data');
}


$dataArray = json_decode($jsonData, true);


if ($dataArray === null) {
    die('Error parsing JSON data');
}

print_r($dataArray);

?>
