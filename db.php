<?php

declare(strict_types=1);

$databaseUri = getenv('DB_POSTGRES_URI');
$conn = pg_connect($databaseUri);

if (!$conn) {
    die("Error de conexión a PostgreSQL");
}

// Crear la tabla si no existe
$create_table_query = "
CREATE TABLE IF NOT EXISTS usuarios (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);";
$result = pg_query($conn, $create_table_query);
if (!$result) {
    die("Error al crear la tabla: " . pg_last_error($conn));
}

// Verificar si la tabla está vacía
$count_query = "SELECT COUNT(*) FROM usuarios;";
$count_result = pg_query($conn, $count_query);
if ($count_result) {
    $count = pg_fetch_result($count_result, 0, 0);
    if ($count == 0) {
        // Insertar un registro inicial
        $insert_query = "INSERT INTO usuarios (nombre) VALUES ('John Doe');";
        $insert_result = pg_query($conn, $insert_query);
        if (!$insert_result) {
            die("Error al insertar el registro: " . pg_last_error($conn));
        }
    }
} else {
    die("Error al contar registros: " . pg_last_error($conn));
}
