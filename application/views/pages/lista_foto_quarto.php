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
                    <a title="Abrir Carrosel De Foto" href="javascript:goAbrir(<?= $fotos['id_quarto']?>)" class="btn btn-danger btn-sm btn-info"><i class="fa-solid fa-layer-group"></i></a>
                    <!--<a title="Abrir Foto" href="javascript:goAbrir(<?= $fotos['id_quarto']?>)" class="btn btn-danger btn-sm btn-info"><i class="fa-solid fa-camera"></i></a>-->
                    <a title="Abrir Foto" href="#" class="btn btn-info btn-sm btn-info abrir-foto" data-toggle="modal" data-target="#modalFoto" data-caminho="\meuHotel\imagens\<?= $fotos['caminho'] ?>"><i class="fa-solid fa-camera"></i></a>
                    <a title="Baixar Imagem" class="btn btn-info btn-sm btn-info abrir-foto" onclick="downloadImage('/meuHotel/imagens/<?= $fotos['caminho'] ?>')"><i class="fa-solid fa-arrow-down"></i></a>
                    <a title="Deletar Foto" href="javascript:goDelete(<?= $fotos['id_foto_quarto']?>)" class="btn btn-danger btn-sm btn-danger"><i class="fa-solid fa-xmark"></i></a>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <div class="toggle-switch">
            <input type="checkbox" id="toggle-rocket" class="toggle-input" onclick="toggleRocket()" checked>
            <label for="toggle-rocket" class="toggle-label"></label>
        </div>
        <div class="flash" id="flash">
            <i title="Dica de Cadastro" class="fas fa-rocket"></i>
            <div class="notification-badge"></div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        new DataTable('#documentos')
    </script>
    
</main>

<!-- Modal -->
<div class="modal fade" id="modalFoto" tabindex="-1" role="dialog" aria-labelledby="modalFotoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalFotoLabel">Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="" class="img-fluid" id="fotoExibida">
      </div>
    </div>
  </div>
</div>

<script>
function goAbrir(id) {
    swal({
        title: "Deseja Realmente Ver as Fotos?",
        text: "",
        icon: "warning",
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

$(document).ready(function() {
    // Ao clicar no link
    $('.abrir-foto').click(function() {
      // Obter o caminho da foto do atributo data-caminho
      var caminhoFoto = $(this).data('caminho');
      // Definir o src da imagem dentro da modal
      $('#fotoExibida').attr('src', caminhoFoto);
    });
  });

  function downloadImage(imagePath) {
    const link = document.createElement('a');
    link.href = imagePath;
    link.download = imagePath.substring(imagePath.lastIndexOf('/') + 1);  // Isso define o nome do arquivo para o nome original da imagem.
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

let rocketVisible = true;

function toggleRocket() {
    const rocket = document.getElementById('flash');
    rocketVisible = !rocketVisible;
    rocket.style.display = rocketVisible ? 'block' : 'none';
}

const flash = document.getElementById('flash');
    flash.addEventListener('click', () => {
        ajuda();
    });

    function ajuda(){
        swal("Dica Na Tela De Foto ;)", "No Botão CARROSEL ele ira mostra em formato dinamico todas as fotos do quarto, no botão ABRIR FOTO ele mostrar avulso cada foto no cadastro do quarto e no ultimo botão voce pode baixar a imagem que quiser");
    }
    // Na sua função de visualização

</script>

<style>
    

.flash {
    width: 60px; /* Largura da div */
    height: 60px; /* Altura da div */
    background-color: blue; /* Cor de fundo da div */
    border-radius: 50%; /* Torna a div redonda */
    position: fixed; /* Posição fixa */
    bottom: 20px; /* Distância do fundo */
    right: 20px; /* Distância da direita */
    display: flex; /* Para centralizar o ícone */
    justify-content: center; /* Para centralizar o ícone */
    align-items: center; /* Para centralizar o ícone */
    cursor: pointer; /* Mostrar o cursor como um ponteiro */
}

.flash i {
    font-size: 2.5em; /* Tamanho do ícone */
    color: white; /* Cor do ícone */
    display: flex; /* Para centralizar o ícone */
    justify-content: center; /* Para centralizar o ícone */
}

.toggle-switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.toggle-input {
  display: none;
}

.toggle-label {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  border-radius: 34px;
  transition: background-color 0.3s;
}

.toggle-label::after {
  content: "";
  position: absolute;
  top: 2px;
  left: 2px;
  width: 30px;
  height: 30px;
  background-color: white;
  border-radius: 50%;
  transition: transform 0.3s;
}

.toggle-input:checked + .toggle-label {
  background-color: #2196F3;
}

.toggle-input:checked + .toggle-label::after {
  transform: translateX(26px);
}

</style>
