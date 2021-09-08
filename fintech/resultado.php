<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title>Fintech Paçoca</title>
</head>
<style>
  * {
    font-family: 'Poppins', sans-serif;
  }

  body {
    background-image: url("https://img.freepik.com/free-vector/gradient-dynamic-blue-lines-background_23-2148995756.jpg?size=626&ext=jpg");
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
    height: 100vh;
    overflow-y: hidden;
    overflow-x: hidden;
    font-size: 4vh;
  }

  .titulo {
    border: 2px solid black;
    text-align: center;
    margin: 10px;
    color: white;
    background-color: black;
    opacity: 0.7;
  }

  .titulo:hover {
    opacity: 0.8;
    transition: 0.7s;
  }

  p{
    margin: 3vw;
    color: midnightblue;
  }

  h2 {
    text-align: center;
  }

  input[type=submit] {
    background-color: midnightblue;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: rgb(71, 71, 139);
    transition: 0.7s;
  }

  @media screen and (max-width: 1024px) {
    body {
    font-size: 3vh;
  }
  p{
    margin-bottom: 4vh;
  }
  }

</style>

<body>
  <div class="titulo">
    <h1>Fintech Paçoca</h1>
  </div>
  <h2>Resultado</h2>
<?php
$nome = $_POST['txtNome'];
$mensalidade = $_POST['nmbMensal'];
$tempo = $_POST['tempo'];
$resultado = round(juroscompostos($mensalidade,$tempo), 2);

function juroscompostos($mensalidade,$tempo)
{
  $taxa = 0.0407686;
    $resultado = ($mensalidade * pow((1+$taxa), $tempo) -1)/$taxa;
    return $resultado;
}

echo '<p>Olá '.$nome.',  juntando R$'.$mensalidade.' todo mês, você terá R$'.$resultado.' em  '.$tempo.' ano(s)</p>'; 
?>
  <form action="index.html">
    <input type="submit" value="Simular novamente">
  </form>
</body>
<script>
  
</script>
</html>




