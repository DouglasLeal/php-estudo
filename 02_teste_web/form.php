<?php require_once 'header.php' ?>

<main>
    <div class="card my-5">
        <div class="card-header text-center fw-bold">Registrar Novo</div>
        <div class="card-body">
            <form action="./logica/pessoa-criar.php" method="post">
                <div class="row">
                    <div class="col-4 mb-1">
                        <input type="text" name="nome" class="form-control mb-3" placeholder="Nome">
                    </div>
                    <div class="col-4 mb-1">
                        <input type="text" name="altura" class="form-control mb-3" placeholder="Altura">
                    </div>
                    <div class="col-4 mb-1">
                        <input type="text" name="peso" class="form-control mb-3" placeholder="Peso">
                    </div>
                </div>
                <button class="btn btn-primary d-block w-100">Registrar</button>
            </form>
        </div>
    </div>
</main>

<?php require_once 'footer.php' ?>