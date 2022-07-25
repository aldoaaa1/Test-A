<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JSON Test 1</title>
  <style>
    
  </style>
</head>
<body>
  <?php
    $data = file_get_contents('data.json');
    $data = json_decode($data);

    $newData = (object)[
      "title" => "Nuevo Trabajo 2",
      "description" => "Nueva Descripción 2",
      "content" => "Nuevo Contenido 2",
      "dias" => [1,2,3],
      "fechas" => [1,15],
      "prioridad" => 0
    ];

    $data->recepcionista[] = $newData;

    echo '<pre>'; print_r($data->recepcionista); echo '</pre>';
    $json_data = utf8_encode(json_encode($data));
    // file_put_contents('data.json', $json_data);

    // echo '<pre>'; print_r($data); echo '</pre>';
    // echo '<br><br>Último error: ', json_last_error_msg(), PHP_EOL, PHP_EOL;
  ?>
  <script src="scr.js"></script>
</body>
</html>