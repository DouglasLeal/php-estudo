<?php require_once 'header.php';

require_once "./models/Pessoa.php";
require_once './config/Conexao.php';
require_once './dao/PessoaDAO.php';

$id = null;
$resultado = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $conexao = new Conexao();
    $dao = new PessoaDAO($conexao->conectar());

    $resultado = $dao->buscarPorId($id);
}
?>

<main>
    <div class="card my-5">

        <div class="card-header text-center fw-bold">
            <?php
            $msg = $id != null ? "Editar" : "Novo";
            echo $msg;
            ?>
        </div>
        <div class="card-body">
            <form action="./logica/pessoa-criar.php" method="post">
                <div class="row">
                    <?php
                    if($resultado != null):
                        ?>
                        <input type="hidden" name="id" value="<?= $resultado->getId() ?>">
                        <?php
                    endif;
                    ?>
                    <div class="col-4 mb-1">
                        <input type="text" value="<?= $resultado != null ? $resultado->getNome() : "" ?>" name="nome" class="form-control mb-3" placeholder="Nome">
                    </div>
                    <div class="col-4 mb-1">
                        <input type="text" value="<?= $resultado != null ? $resultado->getAltura() : "" ?>" name="altura" class="form-control mb-3" placeholder="Altura">
                    </div>
                    <div class="col-4 mb-1">
                        <input type="text" value="<?= $resultado != null ? $resultado->getPeso() : "" ?>" name="peso" class="form-control mb-3" placeholder="Peso">
                    </div>
                </div>
                <?php
                if ($id):
                    ?><button class="btn btn-warning d-block w-100">Editar</button>
                    <?php
                else:
                    ?>
                    <button class="btn btn-primary d-block w-100">Novo</button>
                    <?php
                endif;
                ?>

            </form>
        </div>
    </div>
</main>

<?php require_once 'footer.php' ?>