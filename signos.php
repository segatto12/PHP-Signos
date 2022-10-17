<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Seu signo</title>
  </head>
  <body class="p-5">
    <input type="button" class="btn w-100 p-3" value="Voltar" onClick="history.go(-1)">
    <br>
    <h1>Qual é seu signo?</h1>
    </body>

</html>

<?php

$signos = simplexml_load_file('signos.xml');
if(isset($_POST['fdata'])){
  $data = $_POST['fdata'];
  $nomeUsuario = $_POST['nomeUsuario'];
  $data = date('d/m/Y H:i:s', strtotime($data));
  $data = explode('/', $data);
  $dataFormat = $data[1] . "/" . $data[0];
  $dataFormatprint = $data[0] . "/" . $data[1];
  echo "<h1 class='text-center'>Olá, $nomeUsuario </h1>";
  echo "<h2 class='text-center'>Nascimento: {$dataFormatprint}</h2>";

  foreach ($signos->signo as $signo) {
    $dataInicioForm = explode('/', $signo->dataInicio);
    $dataInicioForm = $dataInicioForm[1] . "/" . $dataInicioForm[0];
  
    $dataFimForm = explode('/', $signo->dataFim);
    $dataFimForm = $dataFimForm[1] . "/" . $dataFimForm[0];
  
    if (strtotime($dataFormat) >= strtotime($dataInicioForm) && strtotime($dataFormat) <= strtotime($dataFimForm)) {
      echo "<h3>$signo->signoNome</h3>";
      echo "<h6>$signo->descricao</h6>";
    }
  }
}
?>