<?php
$privateKey = 'ySD4N-i9pJt-Kle7p-iAxAF-6lIUc';

// ambil data json callback notifikasi
$json = file_get_contents('php://input');
$signature = hash_hmac('sha256', $json, $privateKey);
?>