<?php
require_once __DIR__ . '/../app/Controllers/UserController.php';

$controller = new UserController();
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'create': $controller->create(); break;
    case 'store': $controller->index(); break;
    case 'edit': $controller->update($id); break;
    case 'detail': $controller->detail($id); break;
    case 'delete': $controller->delete($id); break;
    default: $controller->index(); break;
}
?>