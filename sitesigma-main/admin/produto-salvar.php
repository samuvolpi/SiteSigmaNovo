<?php 
includes_once '../includes/_dados.php';
include_once '_head.php';

$sql = "SELECT * FROM categorias";
$resultado= mysqli_query($conexao,$sql);
?>
<main>
    <h2> Administraçao dos Produtos </h2>

    <form action="categorias-processa.php" method="post">
        <input type="text" value="salvar" name="acao">
        <label for="nome">Nome:</label><br>
        <input type="text" id= "nome" name="nome"><br>
        <textarea id="descricao" name="descricao"></textarea><br>
        <label for="categoria">Categoria:</label><br>
        <select name="valor">
            <?php 
            while ($dado= mysqli_fecth_array($resultado)){
                echo '<option value="' .$dado['CategoriaID'].'">'.$dado['Nome'].'</option>';
            
            }
            ?>
            </select>
            <hr>
            <input type="submit" value="Enviar">
        </form>
        </main>
        <?php
        include_once '_footer.php';
        ?>