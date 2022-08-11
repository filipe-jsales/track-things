<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $senha = $_POST["senha"];
            
            $sql = "INSERT INTO usuario (nome, senha) VALUES ('{$nome}', '{$senha}')";

            $result = $conn->query($sql);
            break;
        case 'editar':
            //codigo
            break;
        case 'excluir':
            //codigo
            break;
    }