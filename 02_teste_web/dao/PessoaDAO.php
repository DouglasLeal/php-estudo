<?php

class PessoaDAO {

    public function __construct(private $conexao) {
    }

    public function adicionar(Pessoa $pessoa) {
        $stmt = $this->conexao->prepare('INSERT INTO pessoas (nome, peso, altura, imc) VALUES (?, ?, ?, ?)');
        $stmt->execute([$pessoa->getNome(), $pessoa->getPeso(), $pessoa->getAltura(), $pessoa->getIMC()]);
    }

    public function atualizar(Pessoa $pessoa) {
        $stmt = $this->conexao->prepare('UPDATE pessoas SET nome = ?, peso = ?, altura = ?, imc = ? WHERE id = ?');
        $stmt->execute([$pessoa->getNome(), $pessoa->getPeso(), $pessoa->getAltura(), $pessoa->getIMC(), $pessoa->getId()]);
    }

    public function excluir($id) {
        $stmt = $this->conexao->prepare('DELETE FROM pessoas WHERE id = ?');
        $stmt->execute([$id]);
    }

    public function buscarTodos() {
        $stmt = $this->conexao->query('SELECT * FROM pessoas');
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $pessoas = [];

        foreach ($resultado as $p){
            $pessoa = new Pessoa($p['nome'], $p['peso'], $p['altura'], $p['id']);
            $pessoas[] = $pessoa;
        }

        return $pessoas;
    }
}