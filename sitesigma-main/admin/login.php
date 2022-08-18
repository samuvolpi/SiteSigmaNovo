<?php
include_once '_head.php';
?>
<main>
    <h2>Administração das Produtos</h2>

    <?php
    $mensagem = array(
1=>'Usário ou senha inválidos!',
2=>'Você precisa ter um usuario valido para acessar!',
3=>'Voce saiu, volte sempre!',
    );
    if(isset($_GET['msg']) || is_numeric($_GET) ){
$cod = $_GET['msg'];
?>
<h3><?php echo $mensagem[$cod]; ?></h3>
<?php
    }
    ?>
    <form action="login-processa.php" method="post">
        <input type="hidden" value="login" name="acao"><br>
        <label for="email">E_mail:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="senha">Senha:</label><br>
        <hr>
        <input type="submit" value="Login">
</form>
</main>
<?php
include_once '_footer.php';

?>
    






