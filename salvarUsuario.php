<?php

    switch($_REQUEST['acao']){
        case 'cadastrar':
            $nome =  $_POST["nome"];
            $email =  $_POST["email"];
            $curso =  $_POST["curso"];
            $modalidade =  $_POST["modalidade"];
            
            $sql = "INSERT INTO usuarios (nome, email, curso, modalidade) VALUES ('{$nome}', '{$email}', '{$curso}', '{$modalidade}')"; // Correção na linha 12

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break; // Adição do break aqui

        case 'editar':
            $nome =  $_POST["nome"];
            $email =  $_POST["email"];
            $curso =  $_POST["curso"];
            $modalidade =  $_POST["modalidade"];

            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', curso='{$curso}', modalidade='{$modalidade}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':

            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
    }

?>
