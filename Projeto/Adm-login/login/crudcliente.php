<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('conexao.php');



##cadastrar
if(isset($_POST['cadastrar'])){
        ##dados recebidos pelo metodo POST
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $senha = $_POST ["senha"];
        $numcartao = $_POST ["numcartao"];
    

        ##codigo SQL
        $sql = "INSERT INTO Cliente (nome,email,cpf,senha,numcartao) 
                VALUES('$nome','$email','$cpf','$senha', $numcartao)";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> O Cliente(a)
                $nome foi incluido(a) com sucesso!!"; 
                echo " <button class='button'><a href='logincliente.php'>voltar</a></button>";
            }
        }

#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf= $_POST["cpf"];
    $senha= $_POST["senha"];
    $numcartao= $_POST["numcartao"];
    $idcliente= $_POST["idcliente"];

      ##codigo sql
    $sql = "UPDATE  Cliente SET nome= :nome, email= :email, cpf= :cpf, senha= :senha, num= :numcartao WHERE idcliente= :idcliente ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':email',$email, PDO::PARAM_STR);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_STR);
    $stmt->bindParam(':senha',$senha, PDO::PARAM_STR);
    $stmt->bindParam(':numcartao',$numcartao, PDO::PARAM_INT);
    $stmt->bindParam(':idcliente',$idcliente, PDO::PARAM_INT);


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O cliente(a)
             $nome foi alterado(a) com sucesso!!"; 

            echo " <button class='button'><a href='cadadm.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_POST['excluir'])){
    $idcliente = $_POST['idcliente'];
    $sql ="DELETE FROM Cliente  WHERE idcliente={$idcliente}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O cliente(a)
             $idcliente foi excluido(a)!!"; 

            echo " <button class='button'><a href='listaaluno.php'>voltar</a></button>";
        }

}

        
?>