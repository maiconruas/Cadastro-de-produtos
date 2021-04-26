<?php

require 'config.php';

$codigo = filter_input(INPUT_POST, 'codigo');
$marca = filter_input(INPUT_POST, 'marca');
$modelo = filter_input(INPUT_POST, 'modelo');
$cor = filter_input(INPUT_POST, 'cor');
$preco = filter_input(INPUT_POST, 'preco');
$data = filter_input(INPUT_POST, 'data');
$datacadastro = filter_input(INPUT_POST, 'datacadastro');
$nomefornecedor = filter_input(INPUT_POST, 'nomefornecedor');
$email = filter_input(INPUT_POST, 'email');
$telefone = filter_input(INPUT_POST, 'telefone');
$rua = filter_input(INPUT_POST, 'rua');
$numero = filter_input(INPUT_POST, 'numero');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');
$cep = filter_input(INPUT_POST, 'cep');

$sql = $pdo->prepare("UPDATE produtos SET marca = :marca, modelo = :modelo, cor = :cor, preco = :preco, datafabricacao = :datafabricacao, datacadastro = :datacadastro, fornecedor = :fornecedor, email = :email, telefone = :telefone, rua = :rua, cidade = :cidade, estado = :estado, numero = :numero, CEP = :cep  WHERE codigo = :codigo"); 



$sql->bindValue(':codigo', $codigo);
$sql->bindValue(':marca', $marca);
$sql->bindValue(':modelo', $modelo);
$sql->bindValue(':cor', $cor);
$sql->bindValue(':preco', $preco);
$sql->bindValue(':datafabricacao', $data);
$sql->bindValue(':datacadastro', $datacadastro);
$sql->bindValue(':fornecedor', $nomefornecedor);
$sql->bindValue(':email', $email);
$sql->bindValue(':telefone', $telefone);
$sql->bindValue(':rua', $rua);
$sql->bindValue(':cidade', $cidade);
$sql->bindValue(':estado', $estado);
$sql->bindValue(':numero', $numero);
$sql->bindValue(':cep', $cep);

$sql->execute();

header("location:estoque.php");
exit;
