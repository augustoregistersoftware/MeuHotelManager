<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastros de Quartos</h1>
        <div class="btn-group mr-2">
            
        </div>
    </div>

    <div class="table-responsive">
    <a href="<?= base_url() ?>quarto/new_quarto" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Quarto</a>
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
                    <?php if($quartos['status'] == 'T') : ?>
                        <th><a title="Datas" href="#" class="btn btn-primary btn-sm btn-primary" data-toggle="modal" data-target="#myModal" id="<?php echo $quartos['id_quarto']; ?>"><i class="fa-solid fa-calendar-days"></i></a></th>
                    <?php else :?>
                        <th><a onclick="Inativado()" class="btn btn-warning btn-sm btn-warning"><i class="fa-solid fa-exclamation"></i></a></th>
                    <?php endif ;?>
                    <th><?= $quartos['id_quarto']?></th>
                    <td><?= $quartos['nome']?></td>
                    <td><?= $quartos['descricao']?></td>
                    <td>Limite <?= $quartos['qtde_adulto']?></td>
                    <td>Limite <?= $quartos['qtde_crianca']?></td>
                    <th>R$ <?= number_format($quartos['preco'],2, ",", ".")?></th>
                    <td> 
                        <a title="Editar Quarto" href="javascript:goEdit(<?= $quartos['id_quarto']?>)" class="btn btn-warning btn-sm btn-info"><i class="fa-solid fa-pencil"></i></a>
                        <?php if($quartos['status'] == 'T') : ?>
                            <a title="Inativar Quarto" href="javascript:goInativa(<?= $quartos['id_quarto']?>)" class="btn btn-warning btn-sm btn-danger"><i class="fa-solid fa-xmark"></i></a>
                        <?php else :?>
                            <a title="Ativar Quarto" href="javascript:goAtiva(<?= $quartos['id_quarto']?>)" class="btn btn-info btn-sm btn-sucess"><i class="fa-solid fa-check"></i></a>
                        <?php endif ;?>    
                        <a title="Config Avançada Quarto" href="javascript:goConfig(<?= $quartos['id_quarto']?>)" class="btn btn-warning btn-sm btn-info"><i class="fa-solid fa-gear"></i></a>
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
<div class="modal fade custom-modal" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" role="document"> <!-- Adicione a classe modal-lg para aumentar a largura da modal -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Datas Marcadas</h5>
            </div>
            <div class="modal-body">
            <table class="display compact" style="width:100%" id="produtos_vinculados">
                    <thead>
                        <tr>
                            <th>Nome Cliente</th>
                            <th>Data Entrada</th>
                            <th>Data Saida</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="dados_grid">
                        <!-- Os dados da grid serão inseridos aqui via JavaScript -->
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
    
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

function goConfig(id) {
    Swal.fire({
    title: "Deseja Abrir as configurações do quarto?",
    text: "Essa ação tera impacto na tela de visitante",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sim, Abrir!"
    }).then((result) => {
    if (result.isConfirmed) {
        var baseUrl = '<?php echo base_url(); ?>'; // Certifique-se de que base_url() está definido corretamente em seu código PHP
        var myUrl = baseUrl + 'quarto/config_quarto/' + id;
        window.location.href = myUrl;
    }
    });
}

function goAtiva(id) {
    $.ajax({
        url: "<?php echo site_url('quarto/valida_ativacao/');?>" + id,
        type: 'GET',
        dataType: 'json',
        data: { id: id }, 
        success: function(data) {
            console.log(data); // Para diagnóstico
            if (data.length === 0) {
                // Trata o caso quando não há dados retornados
                Swal.fire({
                title: "Oops...",
                text: "Parece que esse quarto está sem as configurações avançadas, por favor verifique",
                icon: "warning"
                });
            } else {
                $.each(data, function(key, item) {
                    Swal.fire({
                    title: "Deseja Ativar esse quarto",
                    text: "",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Sim, Ativar!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                        var baseUrl = '<?php echo base_url(); ?>'; // Certifique-se de que base_url() está definido corretamente em seu código PHP
                        var myUrl = baseUrl + 'quarto/ativar/' + id;
                        window.location.href = myUrl;
                    }
                    });
                });
            }
        },
        error: function(xhr, status, error) {
            console.error('Erro ao processar a requisição:', error);
        }
    });
}

function goInativa(id) {
    Swal.fire({
    title: "Você deseja Inativar o quarto?",
    text: "",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sim, Inativa"
    }).then((result) => {
    if (result.isConfirmed) {
        var baseUrl = '<?php echo base_url(); ?>'; // Certifique-se de que base_url() está definido corretamente em seu código PHP
        var myUrl = baseUrl + 'quarto/inativar/' + id;
        window.location.href = myUrl;
    }
    });
}


    

function Inativado() {
    Swal.fire({
    title: "Quarto Inativado!",
    text: "Esse quarto esta inativado, suas funções não estão disponiveis",
    icon: "warning"
    });
}

$(document).ready(function(){
    $("body").on("click", ".btn.btn-primary.btn-sm.btn-primary", function(e){
        e.preventDefault();
        
        var idDoQuarto = $(this).attr("id");
        
        $.ajax({
            url: "<?php echo site_url('quarto/obter_dados');?>",
            type: 'GET',
            dataType: 'json',
            data: { idDoQuarto: idDoQuarto }, 
            success: function(data) {
                var html = '';
                $.each(data, function(key, item){
                    html += '<tr>';
                    html += '<td>'+item.nome+'</td>';
                    html += '<td>'+item.data_entrada+'</td>';
                    html += '<td>'+item.data_saida+'</td>';
                    if (item.status == 'Livre') {
                        html += '<td><span class="badge badge-pill pull-right" style="background-color: #f28b05; color: #fff; padding: 8px 10px; margin-top: 5px;">Livre</span></td>';
                    } else if (item.status == 'Ocupado') {
                        html += '<td><span class="badge badge-pill pull-right" style="background-color: #ea0000; color: #fff; padding: 8px 10px; margin-top: 5px;">Ocupado</span></td>';
                    } else {
                        html += '<td><span class="badge badge-pill pull-right" style="background-color: #03ab14; color: #fff; padding: 8px 10px; margin-top: 5px;">Reservado</span></td>';
                    }
                    html += '</tr>';
                });
                $("#dados_grid").html(html);
                new DataTable('#produtos_vinculados');
                $("#myModal").modal('show'); 
            }
        });
    });
});

function aviso() {
    Swal.fire({
    title: "Sucesso!!",
    text: "Quarto Novo Cadastrado, Para libera-lo cadastre as configurções",
    icon: "success"
    });
        
        // Limpa o parâmetro 'aviso' da URL
        limparParametroURL('aviso');
    }

function aviso2() {
    Swal.fire({
    title: "Sucesso!!",
    text: "Quarto Ativado Com Sucesso!",
    icon: "success"
    });
        
        // Limpa o parâmetro 'aviso' da URL
        limparParametroURL('aviso');
    }

function aviso3() {
    Swal.fire({
    title: "Sucesso!!",
    text: "Quarto Inativado Com Sucesso!",
    icon: "success"
    });
        
        // Limpa o parâmetro 'aviso' da URL
        limparParametroURL('aviso');
    }

    // Função para limpar um parâmetro da URL
    function limparParametroURL(nomeParametro) {
        if (history.replaceState) {
            // Obtém a URL atual sem os parâmetros de consulta
            const novaURL = window.location.protocol + "//" + window.location.host + window.location.pathname;

            // Substitui a URL atual sem o parâmetro especificado
            history.replaceState({}, document.title, novaURL);
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        // Verifica se o parâmetro 'aviso' está presente na URL
        const urlParams = new URLSearchParams(window.location.search);
        const avisoParam = urlParams.get('aviso');

        // Se o parâmetro 'aviso' for 'sucesso', exibe a modal
        if (avisoParam === 'insert') {
            aviso();
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        // Verifica se o parâmetro 'aviso' está presente na URL
        const urlParams = new URLSearchParams(window.location.search);
        const avisoParam = urlParams.get('aviso');

        // Se o parâmetro 'aviso' for 'sucesso', exibe a modal
        if (avisoParam === 'inativado') {
            aviso3();
        }
    });
    document.addEventListener("DOMContentLoaded", function() {
        // Verifica se o parâmetro 'aviso' está presente na URL
        const urlParams = new URLSearchParams(window.location.search);
        const avisoParam = urlParams.get('aviso');

        // Se o parâmetro 'aviso' for 'sucesso', exibe a modal
        if (avisoParam === 'ativado') {
            aviso2();
        }
    });

</script>
