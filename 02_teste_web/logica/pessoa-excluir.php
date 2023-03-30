<?php
require_once '../dao/PessoaDao.php';
require_once '../config/Conexao.php';

$id = $_POST["id"];

$conexao = new Conexao();
$dao = new PessoaDAO($conexao->conectar());
$dao->excluir($id);

header('Location: http://localhost:8000/');
exit;