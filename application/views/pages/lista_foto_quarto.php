<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastros de Fotos Do Produto</h1>
        <div class="btn-group mr-2">
            
        </div>
    </div>

    <div class="table-responsive">
    <a href="<?= base_url() ?>quarto/cadastro_foto_quarto" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Foto</a>
        <table class="row-border" id="documentos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Quarto</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($fotos as $fotos) : ?>   
                <tr>
                    <th><?= $fotos['id_foto_quarto']?></th>
                    <th><?= $fotos['nome_quarto']?></th>
                    <td><?= $fotos['titulo']?></td>
                    <th><?= $fotos['descricao']?></th>
                    <td> 
                    <a title="Abrir Foto" href="javascript:goAbrir(<?= $fotos['id_quarto']?>)" class="btn btn-danger btn-sm btn-danger"><i class="fa-solid fa-image"></i></a>
                    <a title="Deletar Foto" href="javascript:goDelete(<?= $fotos['id_foto_quarto']?>)" class="btn btn-danger btn-sm btn-danger"><i class="fa-solid fa-xmark"></i></a>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        new DataTable('#documentos')
    </script>
    
</main>

<script>
function goAbrir(id) {
    swal({
        title: "Deseja Realmente Ver as Fotos?",
        text: "",
        icon: "question",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            var baseUrl = '<?php echo base_url(); ?>'; 
            var myUrl = baseUrl + 'quarto/foto_quarto/' + id;
                window.location.href = myUrl;
        } else {
            return false;
        }
    })
}

function goDelete(id) {
    swal({
        title: "Deseja Realmente Deletar Essa Foto?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            var baseUrl = '<?php echo base_url(); ?>'; 
            var myUrl = baseUrl + 'produto/delete_foto/' + id;
                window.location.href = myUrl;
        } else {
            return false;
        }
    })
}

</script>
