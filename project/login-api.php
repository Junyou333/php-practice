<?php
//啟動 Session功能
session_start();

$users = [
    'yo' => [
        'pw' => '1234',
        'nickname' => '小春',
    ],
    'kevin' => [],

];


//輸出的格式
$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
];

//判斷有無輸入帳號密碼
if (!isset($_POST['account']) or !isset($_POST['password'])) {
    $output['error'] = '沒有帳號資料或沒有密碼';
    $output['code'] = 400;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit; //直接離開(中斷)程式
}

if (!isset($users[$_POST['account']])) {
    $output['error'] = '帳號錯誤';
    $output['code'] = 401;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit; //直接離開(中斷)程式
}
$userData = $users[$_POST['account']];
if ($_POST['password'] !== $userData['pw']) {
    $output['error'] = '密碼錯誤';
    $output['code'] = 405;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit; //直接離開(中斷)程式

} else {
    $output['success'] = true;
    $output['code'] = 200;
    $_SESSION['user'] = [
        'account' => $_POST['account'],
        'nickname' => $userData['nickname'],
    ];
}



echo json_encode($output, JSON_UNESCAPED_UNICODE);
