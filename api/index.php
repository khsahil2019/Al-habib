<?php
// Vercel Serverless Router Entrypoint
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
    case '/index':
    case '/index.php':
        require __DIR__ . '/../index.php';
        break;
    case '/miqat':
    case '/miqat.php':
        require __DIR__ . '/../miqat.php';
        break;
    case '/umrah_guide':
    case '/umrah_guide.php':
        require __DIR__ . '/../umrah_guide.php';
        break;
    case '/tanim':
    case '/tanim.php':
        require __DIR__ . '/../tanim.php';
        break;
    case '/sources':
    case '/sources.php':
        require __DIR__ . '/../sources.php';
        break;
    case '/packages':
    case '/packages.php':
        require __DIR__ . '/../packages.php';
        break;
    case '/contact':
    case '/contact.php':
        require __DIR__ . '/../contact.php';
        break;
    default:
        $file = __DIR__ . '/..' . $uri;
        if (file_exists($file) && !is_dir($file)) {
            return false;
        }
        require __DIR__ . '/../index.php';
        break;
}
