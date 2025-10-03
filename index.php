<?php

declare(strict_types=1);

echo "Hello, World!";

/*
include 'db.php';

// vvv test database vvv
$result = pg_query($conn, "SELECT id, nombre FROM usuarios");
if (!$result) {
    echo "Error en la consulta.";
    exit;
}

echo "<ul>";
while ($row = pg_fetch_assoc($result)) {
    echo "<li>ID: " . $row['id'] . " - Nombre: " . $row['nombre'] . "</li>";
}
echo "</ul>";
// ^^^ test database ^^^

pg_close($conn);
*/
