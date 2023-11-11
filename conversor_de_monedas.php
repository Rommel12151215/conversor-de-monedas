<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cantidad = $_POST["cantidad"];
  $moneda_original = $_POST["moneda_original"];
  $moneda_destino = $_POST["moneda_destino"];

  // Aquí deberías obtener la tasa de cambio de la moneda original a la moneda destino.
  // Por simplicidad, en este ejemplo solo mostramos la cantidad y las monedas.
  echo "Has convertido $cantidad de $moneda_original a $moneda_destino.";
 }
?>
