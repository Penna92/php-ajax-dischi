<?php
include __DIR__ . '/database.php';
// var_dump($dischi);
$filteredArray = [];

if (isset($_GET['genre'])) {
    $yourGen = $_GET['genre'];
    foreach ($dischi as $disco) {
        if ($disco['genre'] === $yourGen) {
            $filteredArray[] = $disco;
        }
    }
} else {
    $filteredArray = $dischi;
}

header('Content-Type: application/json');
echo json_encode($filteredArray);
