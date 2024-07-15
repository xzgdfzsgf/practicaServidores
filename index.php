<?php
header('Content-Type: application/json');
require 'config.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        if (isset($_GET['cedula'])) {
            $cedula = $_GET['cedula'];
            $stmt = $pdo->prepare('SELECT * FROM personas WHERE cedula = ?');
            $stmt->execute([$cedula]);
            $persona = $stmt->fetch();
            echo json_encode($persona);
        } else {
            $stmt = $pdo->query('SELECT * FROM personas');
            $personas = $stmt->fetchAll();
            echo json_encode($personas);
        }
        break;
    
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        $stmt = $pdo->prepare('INSERT INTO personas (cedula, nombre, apellido) VALUES (?, ?, ?)');
        $stmt->execute([$data['cedula'], $data['nombre'], $data['apellido']]);
        echo json_encode(['status' => 'success']);
        break;

    default:
        echo json_encode(['status' => 'method not allowed']);
        break;
}
?>
