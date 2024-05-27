<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Cadastro De Configuração Do Quarto</h1>      

    </div>
			<div class="col-md-12">		
				<form action="<?= base_url() ?>quarto/inserte_config" method="post" enctype="multipart/form-data">

				<form action="" method="post" enctype="multipart/form-data">

                <div class="col-md-6">
						<div class="form-group">
							<label for="obs1">Observação 1</label>
							<input type="text" class="form-control" name="obs1" id="obs1" placeholder="Observação 1">
						</div>
				</div>

                <div class="col-md-6">
						<div class="form-group">
							<label for="obs2">Observação 2</label>
							<input type="text" class="form-control" name="obs2" id="obs2" placeholder="Observação 2">
						</div>
				</div>

                <div class="col-md-6">
						<div class="form-group">
							<label for="obs3">Observação 3</label>
							<input type="text" class="form-control" name="obs3" id="obs3" placeholder="Observação 3">
						</div>
				</div>
                <div class="col-md-6">
						<div class="form-group">
						<label for="quarto">Quarto</label>
							<select name="quarto" id="quarto" class="form-control pesquisa__select col-12 selectCustom">
							<?php foreach($config_quarto as $config_quarto) : ?>
							<option value="<?= $config_quarto["id_quarto"] ?>"><?php echo $config_quarto["nome"]; ?></option>
							<?php endforeach;?>
							</select>
						</div>
					</div>
                
                <label>Arquivo</label>
                <input type="file" name="file" accept="image/*"><br><br>
						

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

<style>
	select.selectCustom:focus {
    box-shadow: 0 0 0 0;
    border: 1px solid #ccc;
    outline: 0;
}
select.selectCustom{
  border-radius: 30px !important
}

</style>


