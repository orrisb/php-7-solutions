<?php
$book = [
    'author' => 'Orris Baker',
    'title' => 'HEMP Smart Solutions'
];
foreach ($book as $key => $value) {
    $book[ucfirst($key)] = $value;
    unset($book[$key]);
}
unset($value);
echo '<pre>';
print_r($book);
echo '</pre>';