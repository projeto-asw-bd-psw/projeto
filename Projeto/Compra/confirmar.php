<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        margin: 0%;
        display: flex;
        justify-content:center;
        align-items: center;
        flex-wrap:wrap;
        background-color: #f0f0f0;
    }
    .topo{
        background-color: #212121;
        width: 100%;
        height: 160px;
        display: flex;
        justify-content:center;
        align-items: center;
    }
    img{
        height: 120px;
        width: 70%;
    }
    .conteudo{
        margin-top:50px;
        height: 503px;
        width: 70%;
    }
    .titulos{
        height: 50px;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }
    .informacoes{
        background-color: #f0f0f0;
        height: 450px;
        width: 100%;
        border: solid 3px #de8531;
    }
    .assento, .pagamento, .sessao{
        height: 50px;
        width: 25%;
        background-color: #212121;
        text-align:center;
        display: flex;
        justify-content:center;
        align-items: center;
        font-size:30px;
        font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
    }
    .confirmar{
        background-color: #de8531;
        height: 50px;
        width: 25%;
        text-align:center;
        display: flex;
        justify-content:center;
        align-items: center;
        font-size:30px;
        font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
    }
    button {
        position: relative;
        display: inline-block;
        margin: 15px;
        padding: 15px 30px;
        text-align: center;
        font-size: 18px;
        letter-spacing: 1px;
        text-decoration: none;
        color:#89a46f;
        background: transparent;
        cursor: pointer;
        transition: ease-out 0.5s;
        border: 2px solid #89a46f;
        border-radius: 10px;
        box-shadow: inset 0 0 0 0 #89a46f;
    }
    button:hover {
        box-shadow: inset 0 -100px 0 0 #89a46f;
    }
    button:active {
        transform: scale(0.9);
    }
    a:link{
          text-decoration: none;
          font-size: 20px;
         }
    </style>
</head>
<body>
    <div class="topo">
        <div class="imagem"><img src="logo-cineverse.png" alt="logo"></div>
    </div>
    <div class="conteudo">
    <div class="titulos">
            <div class="sessao"> <p  style="color: red;">Sessão</p> </div>
            <div class="assento"> <p style="color: red;">Assento</p> </div>
            <div class="pagamento"> <p style="color: red;">Pagamento</p> </div>
            <div class="confirmar"> <p>Confirmar</p></div>
        </div>
        <div class="informacoes">
            <form action="" method="post">
                <p></p>
                <button class="button"><a href="sessao.php"  style="color:black;">PROXÍMO</a></button>

                <label for="data"></label>
            </form>
        </div>
    </div>

</body>
</html>