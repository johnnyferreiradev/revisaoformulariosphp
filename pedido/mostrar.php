<?php

// Importar funcoes e variaveis
require_once ( "../validar/variaveis.php" );
require_once ( "../validar/funcoes.php" );

// Validar se o usuário chegou a página via formulário
// e limpar post
formEnviado($_POST);

$adicionais = $_POST['adicionais'];
// limpa o array $adicionais
validaAdicionais($adicionais);

// 
gerarMensagensErro($dados);

?>

<!-- Exibir conteudo em html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resumo do pedido</title>
</head>
<body>
    <?php
        if (@$mensagem_erro["prato_principal_vazio"] != "") {
            echo "<br><b>".$mensagem_erro["prato_principal_vazio"]."</b>";
        } else { 
    ?>
        <h1>Resumo do pedido</h1>
        <p>
            <span>Acompanhamento: </span> <?php echo $dados['acomp']; ?>
        </p>
        <p>
            <span>Prato principal: </span> <?php echo $dados['prato_principal']; ?>
        </p>
        <p>
            <p>Adicionais: </p>
            <ul>
                <?php
                    global $dados;
                    foreach ($adicionais as $key => $value) {
                        echo "<li>".$value."</li>";
                    }    
                ?>
            </ul>
        </p>
        <p>
            <span>Confirmação de veracidade das informações: </span> 
            <?php echo $dados['confirm'] == true ? "Aceito": "Negado"; ?>
        </p>
        <h3>Informações do Cliente</h3>
        <p>
            <span>Nome: </span> <?php echo $dados['name']; ?>
        </p>
        <p>
            <span>Endereço: </span> <?php echo $dados['address']; ?>
        </p>
        <p>
            <span>Telefone: </span> <?php echo $dados['phonenumber']; ?>
        </p>
    <?php } ?>
</body>
</html>