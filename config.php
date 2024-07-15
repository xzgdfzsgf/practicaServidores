<?php
$host = 'ls-905eb9a6e3d4b303df39f7aa4b125223fc73fe4b.cfuk4ggcq2x9.us-east-1.rds.amazonaws.com';
$db = 'registroCivil';
$user = 'dbmasteruser'; 
$pass = 'Antonio123lol'; 

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
