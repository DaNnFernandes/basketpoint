<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$pontos = filter_input(INPUT_POST, 'pontos');


if($pontos < 1000) {
    if($id) {

        $sql = $pdo->prepare("UPDATE valores SET pontos = :pontos WHERE id = :id");
        $sql->bindValue(':pontos', $pontos);
        $sql->bindValue(':id', $id);
        $sql->execute();

        header("Location: index.php");
        exit;
        
    } else {
        header("Location: adicionar.php");
        exit;
    }
} else {
        header("Location: adicionar.php");
        exit;
}