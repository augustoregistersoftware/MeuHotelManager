<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dashboard</h1>
		<div class="btn-group mr-2">
      
		</div>
    

	</div>
  <div class="cardBox">

    <!-- Card de Cobranças -->
    <a href="<?= base_url() ?>cobranca" class="card-link">
        <div class="card">
		<?php foreach($total_hospedado as $total_hospedado) : ?>
            <div class="numbers"><?= $total_hospedado['quantidade_hospedado']?></div>
		<?php endforeach;?>
            <div class="cardName">Total de Hospedados</div>
            <p>Esse mês</p>
        </div>
        <div class="iconBx">
            <ion-icon name="eye-outline"></ion-icon>
        </div>
    </a>
    
    <!-- Card de Compras -->
    <a href="<?= base_url() ?>solicitacao_compra" class="card-link">
        <div class="card">
		<?php foreach($total_reservado as $total_reservado) : ?>
            <div class="numbers"><?= $total_reservado['quantidade_reservado']?></div>
		<?php endforeach;?>
            <div class="cardName">Total Quartos Reservados</div>
            <p>Esse mês</p>
        </div>
        <div class="iconBx">
            <ion-icon name="cart-outline"></ion-icon>
        </div>
    </a>


    <!-- Card de Lucro -->
    <a href="<?= base_url() ?>bancos" class="card-link">
        <div class="card">
		<?php foreach($total_livre as $total_livre) : ?>
            <div class="numbers"><?= $total_livre['quantidade_livre']?></div>
		<?php endforeach;?>
            <div class="cardName">Total Quartos Finalizados</div>
            <p>Esse mês</p>
        </div>
        <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
        </div>
    </a>

    <a href="<?= base_url() ?>bancos" class="card-link">
        <div class="card">
		<?php foreach($total_faturado as $total_faturado) : ?>
            <div class="numbers">R$ <?= number_format($total_faturado['total_final'],2,",",".")?></div>
		<?php endforeach;?>
            <div class="cardName">Lucro Total Bruto</div>
            <p>Esse mês</p>
        </div>
        <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
        </div>
    </a>

</div>


  <script src="<?php echo base_url('public/assets/js/app.min.js');?>"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('public/assets/bundles/datatables/datatables.min.js');?>"></script>
  <script src="<?php echo base_url('public/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js');?>"></script>
  <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/dataTables.buttons.min.js');?>"></script>
  <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/buttons.flash.min.js');?>"></script>
  <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/jszip.min.js');?>"></script>
  <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/pdfmake.min.js');?>"></script>
  <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/vfs_fonts.js');?>"></script>
  <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/buttons.print.min.js');?>"></script>
  <script src="<?php echo base_url('public/assets/js/page/datatables.js');?>"></script>
  <!-- Template JS File -->
  <script src="<?php echo base_url('public/assets/js/scripts.js');?>"></script>
  <!-- Custom JS File -->
  <script src="<?php echo base_url('public/assets/js/custom.js');?>"></script>


  

  <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>5 Ultimos Clietes Cadastrados</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>CPF</th>
          <th>Data De Nascimento</th>
          <th>CEP</th>
          <th>Endereço</th>
          <th>Bairro</th>
          <th>Numero</th>
          <th>Cidade</th>
          <th>UF</th>
          <th>Telefone</th>
          <th>E-mail</th>
				</tr>
			</thead>
			<tbody>
      <?php foreach($clientes as $clientes) : ?>
          <tr>
            <td><?= $clientes['id_cliente']?></td>
            <td><?= $clientes['nome']?></td>
            <th><?= $clientes['cpf']?></th>
            <td><?= $clientes['data_nascimento']?></td>
            <td><?= $clientes['cep']?></td>
            <td><?= $clientes['endereco']?></td>
            <td><?= $clientes['bairro']?></td>
            <td><?= $clientes['numero']?></td>
            <td><?= $clientes['cidade']?></td>
            <td><?= $clientes['uf']?></td>
            <td><?= $clientes['telefone']?></td>
            <td><?= $clientes['email']?></td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

  <script src="<?php echo base_url('public/assets/js/app.min.js');?>"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('public/assets/bundles/datatables/datatables.min.js');?>"></script>
  <script src="<?php echo base_url('public/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js');?>"></script>
  <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/dataTables.buttons.min.js');?>"></script>
  <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/buttons.flash.min.js');?>"></script>
  <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/jszip.min.js');?>"></script>
  <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/pdfmake.min.js');?>"></script>
  <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/vfs_fonts.js');?>"></script>
  <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/buttons.print.min.js');?>"></script>
  <script src="<?php echo base_url('public/assets/js/page/datatables.js');?>"></script>
  <!-- Template JS File -->
  <script src="<?php echo base_url('public/assets/js/scripts.js');?>"></script>
  <!-- Custom JS File -->
  <script src="<?php echo base_url('public/assets/js/custom.js');?>"></script>
  
	</div>

  <h2>Métricas</h2>  
<div class="dashboard">
<div class="metrics-container">
  <div class="metric">
    <div class="icon icon-online">📦</div>
    <div class="metric-description">
      <div>Quartos Iniciados</div>
      <?php if($diferenca_compra['diferenca_percentual'] > 0) : ?>
        <div class="percentage positive">+<?= number_format($diferenca_compra['diferenca_percentual'],2,",",".")?>%</div>
        <div class="number"><?= $diferenca_compra['quantidade_hoje']?></div>
      <?php else :?>
        <div class="percentage negative"><?= number_format($diferenca_compra['diferenca_percentual'],2,",",".")?>%</div>
        <div class="number"><?= $diferenca_compra['quantidade_hoje']?></div>
      <?php endif ; ?>  
      <div>últimas 24 horas</div>
    </div>
  </div>
  <div class="metric">
    <div class="icon icon-offline">🛍️</div>
    <div class="metric-description">
      <div>Quartos Fechados</div>
      <div class="percentage negative">-17%</div>
      <div class="number">1100</div>
      <div>últimas 24 horas</div>
    </div>
  </div>
  <div class="metric">
    <div class="icon icon-new">👥</div>
    <div class="metric-description">
      <div>Novos Clientes</div>
      <div class="percentage positive">+25%</div>
      <div class="number">849</div>
      <div>últimas 24 horas</div>
    </div>
  </div>
</div>
</div>

</main>


<script>
	function abrirGraficoEstoque(){
		document.getElementById("d1").setAttribute("open","");
	}

  function boas_vindas(){
    Swal.fire({
  title: "Olá,<?php echo $this->session->userdata('name'); ?>",
  text: "Seja muito bem-vindo(a)! Hoje, vamos nos aventurar juntos em uma jornada cheia de possibilidades. Estou ansioso(a) para explorar, aprender e criar momentos inesquecíveis ao seu lado. Vamos fazer deste dia algo extraordinário!",
  imageUrl: "https://ouch-cdn2.icons8.com/JlfQgQozPSgBq00v8E7N2L96CLHslRQofr_gnO39aRY/rs:fit:608:456/extend:false/wm:1:re:0:0:0.8/wmid:ouch/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9zdmcvNzMx/LzM1MDcyODA3LTky/NmYtNGM5Mi1hZjQw/LTgyNmI0MjQ5MWJi/OS5zdmc.png",
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: "Custom image"
});
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
        if (avisoParam === 'login_certo') {
          boas_vindas();
        }
    });
</script>



<style>
	/* ======================= Cards ====================== */

.card-link {
  text-decoration: none;
  color: inherit;
    /* Adicione quaisquer outros estilos necessários para manter a aparência do seu card */
}
.cardBox {
  position: relative;
  width: 100%;
  padding: 20px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 30px;
}

.cardBox .card {
  position: relative;
  background: var(--white);
  padding: 30px;
  border-radius: 20px;
  display: flex;
  justify-content: space-between;
  cursor: pointer;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
}

.cardBox .card .numbers {
  position: relative;
  font-weight: 500;
  font-size: 2.5rem;
  color: var(--blue);
}

.cardBox .card .cardName {
  color: var(--black2);
  font-size: 1.1rem;
  margin-top: 5px;
}

.cardBox .card .iconBx {
  font-size: 3.5rem;
  color: var(--black2);
}

.cardBox .card:hover {
  background: var(--blue);
}
.cardBox .card:hover .numbers,
.cardBox .card:hover .cardName,
.cardBox .card:hover .iconBx {
  color: var(--white);
}


body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: #f0f0f0;
  margin: 0;
  padding: 20px;
}
.dashboard {
  display: flex;
  justify-content: space-between; /* Espaço entre as colunas de métricas */
}
.metrics-container {
  text-align: center;
  width: calc(50% - 10px); /* Ajusta a largura para duas colunas */
  background: white;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin-bottom: 10px;
}
  .metric {
    display: flex;
    align-items: center;
    background: #fff;
    margin-bottom: 10px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    transition: transform 0.3s ease;
  }
  .metric:hover {
    transform: translateY(-5px);
  }
  .icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
  }
  .metric-description {
    flex-grow: 1;
    text-align: left;
  }
  .percentage {
    font-size: 1.2em;
    font-weight: bold;
  }
  .number {
    font-size: 1.5em;
    font-weight: bold;
  }
  .positive { color: #4CAF50; }
  .negative { color: #F44336; }
  .icon-online { background: #E8F5E9; color: #4CAF50; }
  .icon-offline { background: #FFEBEE; color: #F44336; }
  .icon-new { background: #E3F2FD; color: #2196F3; }
  .main-content {
    flex-grow: 1; /* Ocupa o espaço restante */
    padding-left: 20px;
  }


</style>