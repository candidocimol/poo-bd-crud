<?php
include "./classes/Database.php";
$db=Database::conexao();

$professores=$db->query("SELECT * FROM professor");

while ($professor = $professores->fetch(PDO::FETCH_ASSOC)) {
    echo "Nome: {$professor['nome']}<br />";
}