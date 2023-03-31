<?php
require_once '../models/Pessoa.php';
require_once '../dao/PessoaDao.php';
require_once '../config/Conexao.php';

$con = new Conexao();
$novaConexao = $con->conectar();

$dao = new PessoaDAO($novaConexao);

$id = null;
if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$novaPessoa = new Pessoa($nome, $peso, $altura, $id);

if($id != null){
    $dao->atualizar($novaPessoa);
}else{
    $dao->adicionar($novaPessoa);
}

header('Location: http://localhost:8000/');
exit;