<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Cadastro De Quarto</h1>      

    </div>
			<div class="col-md-12">		
				<form action="<?= base_url() ?>quarto/inserte_quarto" method="post" enctype="multipart/form-data">

				<form action="" method="post" enctype="multipart/form-data">

                <div class="col-md-6">
						<div class="form-group">
							<label for=nomeo">Nome</label>
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
						</div>
				</div>

                <div class="col-md-6">
						<div class="form-group">
							<label for="descricao">Descrição</label>
							<input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição">
						</div>
				</div>

                <div class="col-md-6">
						<div class="form-group">
							<label for="qtde_adulto">Quantidade De Adulto</label>
							<input type="number" class="form-control" name="qtde_adulto" id="qtde_adulto" placeholder="Quantidade De Adulto">
						</div>
				</div>

                <div class="col-md-6">
						<div class="form-group">
							<label for="qtde_crianca">Quantidade De Criança</label>
							<input type="number" class="form-control" name="qtde_crianca" id="qtde_crianca" placeholder="Quantidade De Criança">
						</div>
				</div>

                <div class="col-md-6">
						<div class="form-group">
							<label for="preco">Preço</label>
							<input type="number" class="form-control" name="preco" id="preco" placeholder="R$">
						</div>
				</div>
						

					<div class="col-md-6">
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url() ?>quarto/cadastro" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>			
					</div>
				</form>
			</div>

    </main>
  </div>
</div>



