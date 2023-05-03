<?php
include("conecta.php"); //Faz a conexão com a base de dados
$cpf = $_POST["cpf"];   //Pega o input do cpf
$nome = $_POST["nome"]; //Pega o input do nome
$idade = $_POST["idade"];//Pega o input da idade

//Vamos ver qual botão foi pressionado

if(isset($_POST["Inserir"]))
{
$comando = $pdo->prepare("INSERT INTO alunos VALUES('$cpf','$nome',$idade)");
$resultado = $comando->execute();
header("Location: index.html");} // voltar


if(isset($_POST["Excluir"])){
    $comando = $pdo->prepare("DELETE FROM alunos WHERE cpf='$cpf'");
    $resultado = $comando->execute();
    header("Location: index.html");
}
if(isset($_POST["Alterar"])){
    $comando = $pdo->prepare("UPDATE alunos SET nome='$nome',idade='$idade' WHERE cpf='$cpf' ");
    $resultado = $comando->execute();
    header("Location: index.html");
}
?>