<?php
ini_set('display_errors', 1);
session_start();

if ( is_post()) {
    $previous_errors = [];
    $previous_inputs = [];
} else {
    $previous_errors = $_SESSION['previous_errors'] ?? [];
    $previous_inputs = $_SESSION['previous_inputs'] ?? [];
    $_SESSION['previous_errors'] = [];
    $_SESSION['previous_inputs'] = [];
}



function partial($name, $params = [])
{
    extract($params);
    require(__DIR__ . "/partials/{$name}.html.php");
}


function is_post() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function pdo() {
    $pdo = new PDO ("pgsql:host=localhost;port=5432;dbname=php;user=webinti;password=croatie1");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return  $pdo;
}

function redirect($url) {
    header("Location: $url ");
    die();
}

function redirect_unless_admin()
{
    if (!($_SESSION['admin'] ?? null)) {
        redirect('/admin/login.php');
    }
}

function abort_404() {
    http_response_code(404);
    die();
}

function is_on_page($page) {
    return $_SERVER['SCRIPT_NAME'] === $page;
}