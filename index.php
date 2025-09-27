<?php

declare(strict_types=1);

// test database
$databaseUri = getenv('DB_POSTGRES_URI');
$conn = pg_connect($databaseUri);

$msg = $conn? "database connection OK" : "Error de conexión a PostgreSQL";

echo "<h1>¡Hola tío, esto es Northflank con PHP!</h1>";
echo "<h2>$msg</h2>";
