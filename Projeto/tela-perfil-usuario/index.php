<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
<?php 

    require_once "conexao.php";

   
  $retorno = $conexao->prepare('SELECT * FROM Professor');
  $retorno->execute();

?>     
    <header>
      <h1>Meu Perfil</h1>
    </header>

    <div class="dadoUsuario">
    <div class="fotoPerfil">
            <img src="perfil.png" alt="">
        </div>
        <div class="usuario">
            <div class="email">
            <?php foreach($retorno->fetchall() as $value) { ?>
                <strong> <?php echo $value['emailUsuario'] ?>  ?></strong>
            </div>
            <div class="nome">
                <p><?php echo $value['nomeUsuario'] ?> </p>
            </div>
        </div>
        <?php  } ?>

        <div class="edit"><img src="clipe-de-caneta.png" alt=""></div>
    </div>
     



    <div class="barra">
        <div class="compras">
            filmes
        </div>
        <div class="avaliacoes">
            avaliaçoes</div>
    </div>
    <div class="mainFilmes">
        <div class="filmesComprados ">
            <div class="filmes"><?php echo $value['nomeFilme'] ?>
                <button class="excluir" name="excluir" type="submit">cancelar</button>
            </div>
         
        </div>
    
</body>

</html>