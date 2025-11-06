<?php
// public/index.php - Router minimal MVC maison
declare(strict_types=1);
$action = $_GET['action'] ?? 'accueil';
$view = preg_replace('/[^a-z0-9-]/','', strtolower($action));
$tpl = __DIR__ . '/../templates/' . $view . '.php';
if (!file_exists($tpl)) {
    http_response_code(404);
    echo "<h1 style='font-family:Arial,sans-serif'>404</h1><p>Page non trouvée.</p>";
    exit;
}
require $tpl;
