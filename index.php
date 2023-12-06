<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cursos Online</title>
</head>
<body>
    <h1 class="bg-dark m-0 text-white py-3">Portal do Aluno</h1>

    <div>
        <?php
        include("conexao.php");
            switch(@$_REQUEST["page"]){
                case "novo":
                    include("novoUsuario.php");
                    break;
                    case "listar":
                        include("listarUsuario.php");
                        break;
                        case "salvar":
                            include("salvarUsuario.php");
                            break;
                        case "editar":
                        include("editarUsuario.php");
                            break;
                        default:
                        print "<img src='./src/assets/img/banner2.png'/>";
            }

        ?>
    </div>

    <div class="mt-5">
        <h2 class="bg-primary-subtle py-3">Adicionar Usuário</h2>
        <div class="container text-center"> 
        <div class="row">  
            <div class="col d-flex align-items-center justify-content-center">
                <div class=" row">
                    <div class=" border rounded bg-primary py-3 text-center">      
                        <a class=" fs-5 fw-semibold text-white" href="?page=novo"> Novo usuario</a>
                    </div>    
                            
                    <div class=" border rounded bg-warning py-3 text-center"> 
                        <a class=" fs-5 fw-semibold text-white" href="?page=listar"> Listar usuario</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <img class="w-100" src="./src/assets/img/portal.png">
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>