<?php

$value = (int)$_POST['fake info'];

if ($value !== 0 && $value !== 1) {
    exit;
}

$pdo = new PDO(
    'fake_info',
    'fake_info',
    'fake_info'
);

$stmt = $pdo->prepare(
    'INSERT INTO fake_info (fake_info) VALUES (?)'
);

$stmt->execute([$value]);

header('Location: fake_info');
exit;
