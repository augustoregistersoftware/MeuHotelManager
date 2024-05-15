<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastros de Quartos</h1>
        <div class="btn-group mr-2">
            
        </div>
    </div>

    <div class="table-responsive">
    <a href="<?= base_url() ?>empresa/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Quarto</a>
        <table class="row-border" id="quarto">
            <thead>
                <tr>
                    <th>Status</th>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Adultos</th>
                    <th>Criança</th>
                    <th>Preço R$</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($quartos as $quartos) : ?>   
                <tr>
                    <th><a onclick="controleDialog2()" class="btn btn-warning btn-sm btn-info"><i class="fa-solid fa-calendar-days"></i></a></th>
                    <th><?= $quartos['id_quarto']?></th>
                    <td><?= $quartos['nome']?></td>
                    <td><?= $quartos['descricao']?></td>
                    <td><?= $quartos['qtde_adulto']?></td>
                    <td><?= $quartos['qtde_crianca']?></td>
                    <th>R$ <?= number_format($quartos['preco'],2, ",", ".")?></th>
                    <td> 
                        <a title="Editar Quarto" href="javascript:goEdit(<?= $quartos['id_quarto']?>)" class="btn btn-warning btn-sm btn-info"><i class="fa-solid fa-pencil"></i></a>
                        <a title="Inativar Quarto" href="javascript:goInativa(<?= $quartos['id_quarto']?>)" class="btn btn-primary btn-sm btn-danger"><i class="fa-solid fa-xmark"></i></a>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        new DataTable('#quarto')
    </script>
    
</main>

<script>
function goEdit(id) {
    var baseUrl = '<?php echo base_url(); ?>'; // Certifique-se de que base_url() está definido corretamente em seu código PHP
    var myUrl = baseUrl + 'empresa/editar/' + id;
    if (confirm("Deseja realmente Editar?")) {
        window.location.href = myUrl;
    } else {
        return false;
    }
}

function goAtiva(id) {
    var baseUrl = '<?php echo base_url(); ?>'; // Certifique-se de que base_url() está definido corretamente em seu código PHP
    var myUrl = baseUrl + 'empresa/ativa/' + id;
    if (confirm("Deseja realmente ativar essa empresa?")) {
        window.location.href = myUrl;
    } else {
        return false;
    }
}

function goInativa(id) {
    var baseUrl = '<?php echo base_url(); ?>'; // Certifique-se de que base_url() está definido corretamente em seu código PHP
    var myUrl = baseUrl + 'empresa/inativa/' + id;
    if (confirm("Deseja realmente inativar essa empresa?")) {
        window.location.href = myUrl;
    } else {
        return false;
    }
}

</script>
