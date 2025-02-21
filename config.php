<?php
$host = 'ls-1c5a6462c08cec0810da27c9dd5d93f5ec95b9d2.c2hse4gikgl1.us-east-1.rds.amazonaws.co';m
$db = 'registroCivil';
$user = 'dbmasteruser'; 
$pass = '~ykgKzG1Cmt%c](*a&5t`<4gQuYc%$<B'; 

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
