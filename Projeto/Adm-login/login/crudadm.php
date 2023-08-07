<?php  
class conexao {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Outras propriedades e métodos da classe

    public function geraChaveAcesso($email) {
        // Implementação para gerar a chave de acesso
        // Certifique-se de implementar esse método corretamente
        $stmt = $this->pdo->prepare("SELECT * FROM Administrador WHERE email = :email");
        $stmt->bindValue(":email", $email);
        $run = $stmt->execute();
        $rs = $stmt->fetch(PDO::FETCH_ASSOC);
        $result = $rs;

        if($result){
            $chave = sha1($result["matricula"] . $result["senha"]);
            return $chave;
        } else {
            return false;
        }
    }
}
##permite acesso as variáveis dentro do arquivo conexao



##permite acesso as variáveis dentro do arquivo conexao
require_once('../conexao.php');

##cadastrar
if(isset($_POST['cadastrar'])) {
    ##dados recebidos pelo método POST
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    ## Código SQL
    $sql = "INSERT INTO Administrador(nome,email,cpf,senha) 
            VALUES('$nome','$email','$cpf','$senha')";

    ## Junta o código SQL à conexão do banco
    $sqlcombanco = $conexao->prepare($sql);

    ## Executa o SQL no banco de dados
    if($sqlcombanco->execute()) {
        echo "<strong>OK!</strong> O Administrador(a) $nome foi incluído(a) com sucesso!!"; 
        echo "<button class='button'><a href='loginadm.php'>voltar</a></button>";
    }
}


if(isset($_POST['redefinir'])) {
    $email = $_POST["email"];
    $email = preg_replace('/[^[:alnum:]_.-@]/', '', $email);

    $conexaoObj = new conexao($conexao);  // Criar uma instância da classe conexao
    $chave = $conexaoObj->geraChaveAcesso($email);

    if($chave) {
        echo '<a href="http://localhost/Raissa/projeto/login/alterarsenha.php?chave=' . $chave . '">Link para redefinir senha</a>';
    } else {
        echo '<h1>Erro: Usuário não encontrado</h1>';
    }
}
   

#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf= $_POST["cpf"];
    $senha= $_POST["senha"];
    $matricula= $_POST["matricula"];

      ##codigo sql
    $sql = "UPDATE  Administrador SET nome= :nome, email= :email, cpf= :cpf, senha= :senha, WHERE matricula= :matricula ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':email',$email, PDO::PARAM_STR);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_STR);
    $stmt->bindParam(':senha',$senha, PDO::PARAM_STR);
    $stmt->bindParam(':matricula',$matricula, PDO::PARAM_INT);


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O aluno(a)
             $nome foi alterado(a) com sucesso!!"; 

            echo " <button class='button'><a href='cadadm.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_POST['excluir'])){
    $matricula = $_POST['matricula'];
    $sql ="DELETE FROM Administrador WHERE matricula={$matricula}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O Administrador(a)
             $matricula foi excluido(a)!!"; 

            echo " <button class='button'><a href='listaaluno.php'>voltar</a></button>";
        }

}

        
?>