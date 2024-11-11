<?php 
header('Content-type: aplication/json');

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$headers = apache_request_headers();
if (isset($headers['Csrf-token'])) {
    if ($headers['Csrf-token'] !== $_SESSION['csrf_token']) {
       exit(json_encode(['error' => 'Wrong CSRF token.']));
    }
} else {
    exit(json_encode(['error' => 'Wrong CSRF token.']));
}
?>