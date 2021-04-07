<?php

    $acao = 'listar';
    require "tarefa-controler.php";
    
?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Atividade SOLID - Listar</title>

        <script>
            function remover(id){
                location.href = "index.php?acao=remover&id="+id;
            }
        </script>
    </head>

    <body>

        <header>
            <nav class="navegacao">
                <ul>
                    <li><a href="" class="ativo">Listar Tarefas</a></li>
                    <li><a href="criar.html">Criar Tarefa</a></li>
                </ul>
            </nav>
        </header>

        <main class="container">

            <div>
                <h2 class="titulo">Sua Lista de Tarefas</h2>

                <ul>
                    <?php foreach($tarefas as $indice => $tarefa){ ?> 
                        <li class="tarefa">

                            <p>
                                <?= $tarefa->descricao ?>
                            </p>

                            <button class="botao excluir" onclick="remover(<?= $tarefa->id ?>)">
                                Excluir
                            </button>

                        </li>

                    <?php }; ?>

                </ul>

            </div>

        </main>

    </body>

</html>