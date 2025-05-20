<?php
// Datos estáticos para realizar la búsqueda
$datos = [
    "pp" => "Este es el contenido del primer artículo.",
    "Segundo artículo" => "Este es el contenido del segundo artículo.",
    "Tercer artículo" => "Este es el contenido del tercer artículo."
];

// Obtener el término de búsqueda
$query = isset($_POST['query']) ? strtolower($_POST['query']) : '';

// Mostrar resultados si hay una búsqueda
if ($query) {
    $resultados = [];

    // Buscar coincidencias en los datos
    foreach ($datos as $titulo => $contenido) {
        if (strpos(strtolower($titulo), $query) !== false || strpos(strtolower($contenido), $query) !== false) {
            $resultados[] = "<h2>$titulo</h2><p>$contenido</p>";
        }
    }

    // Mostrar resultados o mensaje de "no encontrado"
    if (count($resultados) > 0) {
    echo "<div style='padding: 1em; background: #f0f0f0; border-radius: 5px;'>";
    echo implode('<hr>', $resultados);
    echo "</div>";
} else {
    echo "<p style='color: red;'>No se encontraron coincidencias para '$query'.</p>";
}

?>
