<?php

ini_set("display_errors", 0);
ini_set("display_startup_errors",1);

define('VIEWS_PATH', __DIR__ . '/../resources/views/');

$page = $_GET['page'] ?? 'homepage';
$page = basename($page); // Evita ataques de path traversal
$viewFile = VIEWS_PATH . "pages/{$page}.php";

include VIEWS_PATH . 'components/header.php';

if (file_exists($viewFile)) {
    include $viewFile;
} else {
    http_response_code(404);
    include VIEWS_PATH . 'pages/error.php';
}

include VIEWS_PATH . 'components/footer.php';