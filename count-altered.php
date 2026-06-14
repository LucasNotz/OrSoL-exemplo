<?php

$pdo = new PDO(
    'fake info',
    'fake info',
    'fake info'
);

$count = $pdo->query(
    'SELECT COUNT(fake) FROM fake_table'
)->fetchColumn();

echo $pdo->query("SELECT COUNT(*) FROM fake_table")->fetchColumn();
?>
