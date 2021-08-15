<?php
include __DIR__ . '/partials/init.php';
//echo json_encode($_POST);

// print_r($_POST);

$output = [
    'success' => false,
    'error' => '',
    'rowCount' => 0,
    'code' => 0,
    'postData' => $_POST,

];
//檢查email
// var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));
// var_dump(filter_var('http://example.com', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));


$sql = "INSERT INTO `address_book`(
    `name`, `email`, `mobile`, 
`birthday`, `address`, `created_at`
) VALUES (
    ?, ?, ?,
    ?, ?, NOW()
)";


$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    $_POST['birthday'],
    $_POST['address'],
]);

$output['rowCount'] = $stmt->rowCount(); //新增的筆數
echo json_encode($output);
