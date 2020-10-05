<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTATISTICA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="visual.css" />
</head>
                <?php
                    require 'config.php';

                        $auges = [];
                        $sql = $pdo->query("SELECT min(pontos), max(pontos) FROM valores");
                        if($sql->rowCount() > 0) {
                        $auges = $sql->fetchAll(PDO::FETCH_ASSOC);
                    }
                        $lista = [];
                        $sql = $pdo->query("SELECT * FROM valores");
                        if($sql->rowCount() > 0) {
                        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
                        }
                ?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-7 resultados ">
                <div class="maior">
                   
                    <table class=" table table-bordered table-dark table-hover">
                        <tr class="valores">
                            <th>PIOR PONTUAÇÃO : </th>
                            <th>SEU RECORDE :</th>
                        </tr>
                        <?php foreach($auges as $usuario): ?>
                            <tr>
                                <td><?=$usuario['min(pontos)'];?></td>
                                <td><?=$usuario['max(pontos)'];?></td>                             
                            </tr>
                        <?php endforeach; ?> 
                    </table>         
                </div>
                <div class="tabela">        
                    <table class=" table table-bordered table-dark table-hover">
                        <tr class="valores">
                            <th>JOGO</th>
                            <th>PONTOS</th>
                            <th>AÇÕES</th>
                        </tr>
                        <?php foreach($lista as $usuario): ?>
                            <tr>
                                <td><?=$usuario['id'];?></td>
                                <td><?=$usuario['pontos'];?></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-warning" href="editar.php?id=<?=$usuario['id'];?>">EDITAR</a>
                                        <a class="btn btn-warning" href="excluir.php?id=<?=$usuario['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')">EXCLUIR</a>
                                    </div>
                                </td>                                
                            </tr>
                        <?php endforeach; ?>
                </table>
            </div>
            </div>       
            <div class="jogador col">
                
            </div>                  
         

        </div>
    </div>    
















<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>