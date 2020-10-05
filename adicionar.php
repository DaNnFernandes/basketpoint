<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="visualAdd.css" />

</head>


<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM valores");
if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
    <div class="container">
        <div class="area">
            <img  class="logo" src="/assets/imagens/basquetepointLogo.png"/>                        

            <form method="POST" action="adicionar_action.php">
                    <input type="number" name="pontos" placeholder="DIGITE SUA PONTUAÇÃO" class="pontuacao form-control">
                    <input type="submit" value="REGISTRAR PONTOS" class="btn btn-lg btn-primary btn-block"> 
                    <a class="btn btn-danger btn-block btn-lg" href="estatisticas.php">ESTATISTICAS</a>
            </form>
        </div>        
    </div>

<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>