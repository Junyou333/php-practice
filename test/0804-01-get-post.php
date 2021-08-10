<?php
$a = isset($_POST['a']) ? intval($_POST['a']) : 0;

$b = isset($_POST['b']) ? ($_POST['b']) : 0;
echo json_encode([
    'postData' => $_POST,
    'result' => $a + $b,
]);
