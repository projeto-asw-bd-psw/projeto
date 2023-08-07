<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index- pagina inicial</title>
</head>
<style>
  /* Reset de estilos para garantir uma base consistente */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Estilos globais */
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
}
header{
  height: 150px;
  display: flex;
  align-items: center;
  justify-content: center;
  
}
.container {
  max-width: 960px;
  margin: 0 auto;
  padding: 20px;
  display: flex;
  align-items:center ;
  justify-content: center;
  background-color: #de8531;
  border-radius: 20px;

}
.lista,.cad{
flex-direction: column;
margin-left: 20px;

}
.titulo {
  font-size: 30px;
  color: #330a04;
  text-align: center;
  margin-bottom: 20px;
}

.button {
  display: block;
  color: #fff;
  border: none;
  padding: 10px 50px;
  margin: 10px auto;
  border-radius: 5px;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
  width: 100%;
  max-width: 300px; 
   background-color:#de8531;
}

.button:hover {
  background-color: #efac41;
}

/* Estilos específicos para os links */
.button a {
  color: #330a04;
  text-decoration: none;
  font-family:Arial, Helvetica, sans-serif;
    font-size: 15px;
}

.button:hover a {
  color: #fff;
}

/* Estilos para acomodar em dispositivos menores */
@media (max-width: 768px) {
  .button {
    max-width: 100%;
  }
}

</style>
<body> 
 <header><p class="titulo">Sistema de Cadastros do administrador</p></header> 
     <div class="container"> 
        <div class="cad"> 
          <button class="button"><a href="./filme/cadfilme.php">Cadastrar Filmes</a></button>
    <button class="button"><a href="./sessao/cadsessao.php">Cadastrar Sessao</a></button>
    <button class="button"><a href="./assento/cadassentos.php">Cadastrar Assentos</a></button>
   
</div>
<div class="lista">  
   <button class="button"><a href="./filme/listafilme.php">Lista de Filmes</a></button>
    <button class="button"><a href="./sessao/listasessao.php">Lista de Sessoes</a></button> 
    <button class="button"><a href="./assento/listaassento.php"> Lista de Assentos</a></button>
 
  </div>
</div>
<button class="button"><a href="../administrador/catalogo/catalogo.php">Visualizar catalogo</a></button>
</body>
</html>