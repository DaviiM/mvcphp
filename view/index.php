<?php require_once("../model/banco.php");?>

<html lang="pt-br">
    <?php include("head.php");?>
    <body>
        <?php new Banco();?>
        <?php require_once("../model/banco.php");?>
        <?php include("menu.php");?>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Autor</th>
                    <th>Quantidade de Páginas</th>
                    <th>Preço</th>
                    <th>Data</th>
                    <th>Flag</th>
                    <th>Opções</th>
                </tr>
            </thead>
        </table>
    </body>
</html>