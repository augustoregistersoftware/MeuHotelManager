<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastro de Cobrança</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          </div>
        </div>
      </div>

			<div class="col-md-12">
			<?php if(isset($game)) : ?>
					
					<form action="<?= base_url() ?>games/update/<?= $game['id'] ?>" method="post">
				<?php else : ?>
					<form action="<?= base_url() ?>pagamento_pix/gerarqrcode" method="post">
				<?php endif; ?>
				<form action="" method="post">
					<div class="col-md-6">

		
							<div class="form-group">
								<label for="pixkey">Chave Pix a Receber</label>
								<input type="text" class="form-control" name="pixkey" id="pixkey" placeholder="Chave Pix" value="">
							</div>

						<div class="form-group">
							<label for="descricao">Descrição</label>
							<input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição" value="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="nome">Nome do Beneficiario</label>
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Beneficiario" value="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="cidade">Cidade</label>
							<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" value="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="valor">Valor R$</label>
							<input type="text" class="form-control" name="valor" id="valor" placeholder="R$" value="">
						</div>
					</div>
					

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url() ?>cobranca" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>

