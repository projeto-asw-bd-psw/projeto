<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
  <header>


    <div class="logo">
      <img src="logo.png" alt="">
    </div>

    <div class="caixa1">
      <a style=" color: white;" href="">
        <p>ABOUT</p>
      </a>
    </div>
    <div class="caixa2">
      <a style=" color: white;" href="">
        <p>SERVICES</p>
      </a>
    </div>
    <div class="caixa3">
      <a style=" color: white;" href="">
        <p>CLIENTS</p>
      </a>
    </div>
    <div class="caixa4">
      <a style=" color: white;" href="">
        <p>BLOG</p>
      </a>
    </div>
    <div class="caixa5">
      <a style=" color: white;" href="">
        <p>CONTACTS</p>
      </a>
    </div>
  </header>

  <?php

  require_once "../catalogo/conexao.php";

  $idfilme = $_GET["idfilme"];

  // Query SQL para buscar os nomes e códigos dos professores no banco de dados
  $sql = "SELECT id,nome,sinopse,direcao,genero,duracao FROM Filme WHERE id=$idfilme";

  // Prepara a consulta
  $stmt = $conexao->prepare($sql);

  // Executa a consulta
  $stmt->execute();

  // Obtém os resultados e preenche as opções do select com os nomes dos professores
  $filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($filmes as $filme) {
      echo ' <div class="filme_geral">';
      echo '<div class="filme">';
      echo '<div class="imagem"><img src="" alt="imagem_filme"></div>';
      echo '<div class="filme1">' . $filme["nome"].'</div>';
      echo '<form method="GET" action="../compra/sessao.php">';
      echo '<input name="idfilme" type="hidden" value="' . $filme['id'] . '"/>';
      echo '<button class="butao" name="enviar" type="submit">comprar</button>';
      echo '</form>';
      echo '</div>';
      echo '<div class="info_filme">';
      echo '<div class="sinopse">';
      echo '<div class="conteudo_sinopse">';
      echo '<div class="texto"> <b>Sinopse</b> <br><br>'.$filme["sinopse"] .'</div>';
      echo '</div>';
      echo '<div class="dados_filme">';
      echo '<div class="direcao"><b>direcao</b>> <br><br>'.$filme["direcao"] .'</div>';
      echo '<div class="genero"><b>genero</b>> <br><br>'.$filme["genero"] .'</div>';
      echo '<div class="duracao"><b>duracao</b><br><br>'.$filme["duracao"] .'</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    
      echo '</div>';
    }

 

  ?>



  <div class="rodape">
    <h2>rodape</h2>
  </div>
</body>

</html>