<?php
require_once "./models/Pessoa.php";
require_once './config/Conexao.php';
require_once './dao/PessoaDAO.php';

$conexao = new Conexao();
$dao = new PessoaDAO($conexao->conectar());

$pessoas = $dao->buscarTodos();

require_once 'header.php' ?>

    <main>
        <h1 class="text-center my-3">Registros</h1>

        <table class="table table-bordered table-striped text-center">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>IMC</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($pessoas as $pessoa):
                ?>
                <tr>
                    <td><?= $pessoa->getNome() ?></td>
                    <td><?= $pessoa->getPeso() ?></td>
                    <td><?= $pessoa->getAltura() ?></td>
                    <td><?= $pessoa->getIMC() ?></td>
                    <td>
                        <form action="./logica/pessoa-excluir.php"  method="post">
                            <input name="id" type="hidden" value="<?= $pessoa->getId(); ?>">
                            <button type="submit" class="btn btn-danger">X</button>
                        </form>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
    </main>

<?php require_once 'footer.php' ?>