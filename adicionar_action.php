<?php
require 'config.php';

$pontos = filter_input(INPUT_POST, 'pontos');

if($pontos < 1000) {

    $sql = $pdo->prepare("SELECT * FROM valores WHERE pontos = :pontos");
    $sql->bindValue(':pontos', $pontos);
    $sql->execute();

    if($sql->rowCount() >= 0) {
        $sql = $pdo->prepare("INSERT INTO valores (pontos) VALUES (:pontos)");
        $sql->bindValue(':pontos', $pontos);
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