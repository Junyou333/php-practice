<?php
//啟動 Session功能
session_start();

echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE);
