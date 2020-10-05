<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="estilo.css" />

</head>

<?php
require 'config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');
if($id) {

    $sql = $pdo->prepare("SELECT * FROM valores WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0) {

        $info = $sql->fetch( PDO::FETCH_ASSOC );

    } else {
        header("Location: index.php");
        exit;
    }

} else {
    header("Location: index.php");
    exit;
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-4 imagem1">
            <img class="img1" src="assets/imagens/defense.png" />
        </div>
        <div class="col-4 informa">
                <form method="POST" action="editar_action.php">
                <input type="hidden" name="id" value="<?=$info['id'];?>" />
                <label> DIGITE A NOVA PONTUAÇÃO</label>
                <input type="number" name="pontos" value="<?=$info['pontos'];?>" placeholder="NOVA PONTUAÇÃO" class="pontuacao form-control">
                <input type="submit" value="SALVAR" class="btn btn-lg btn-primary btn-block"> 
            </form>  
        </div>
        <div class="col-4 imagem2">
            <img class="img3" src="assets/imagens/defense.png" />
        </div>
    </div>
</div>    






      


<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>