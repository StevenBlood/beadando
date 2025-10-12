<?php
header('Content-Type: application/json; charset=utf-8');
$file = __DIR__ . '/ratings.json';

if (!file_exists($file)) {
    file_put_contents($file, json_encode([]));
}

$image_id = filter_input(INPUT_POST, 'image_id', FILTER_SANITIZE_STRING);
$rating = filter_input(INPUT_POST, 'rating', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1, 'max_range' => 5]
]);

if (!$image_id || !$rating) {
    echo json_encode(['ok' => false]);
    exit;
}

$data = json_decode(file_get_contents($file), true) ?: [];
$data[$image_id][] = $rating;
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

echo json_encode(['ok' => true]);
