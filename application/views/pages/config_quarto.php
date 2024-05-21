<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastros de Configuração de Quartos</h1>
        <div class="btn-group mr-2">
            
        </div>
    </div>

    <div class="table-responsive">
        <?php if(isset($config_quarto)) : ?>
            
        <?php else : ?>
            <a href="<?= base_url() ?>quarto/new_config" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Configuração</a>
        <?php endif; ?>
        <table class="row-border" id="quarto">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Caminho Foto</th>
                    <th>Observação 1</th>
                    <th>Observação 2</th>
                    <th>Observação 3</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($config as $config) : ?>   
                <tr>
                    <th><?= $config['id_foto']?></th>
                    <td><?= $config['caminho']?></td>
                    <td><?= $config['obs_1']?></td>
                    <td><?= $config['obs_2']?></td>
                    <td><?= $config['obs_3']?></td>
                    <td> 
                        <a title="Excluir Config" href="javascript:goEdit(<?= $config['id_quarto']?>)" class="btn btn-warning btn-sm btn-info"><i class="fa-solid fa-pencil"></i></a>
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

    <!-- Modal -->

    
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


</script>
