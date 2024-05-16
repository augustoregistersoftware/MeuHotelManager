<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Cadastro De Foto Quarto</h1>      

    </div>
			<div class="col-md-12">		
				<form action="<?= base_url() ?>quarto/inserte_foto" method="post" enctype="multipart/form-data">

				<form action="" method="post" enctype="multipart/form-data">

                <div class="col-md-6">
						<div class="form-group">
							<label for="titulo">Titulo Foto</label>
							<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo Da Foto">
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
						<label for="quarto">Quarto</label>
							<select name="quarto" id="quarto" class="form-control pesquisa__select col-12 selectCustom">
							<?php foreach($quartos as $quartos) : ?>
							<option value="<?= $quartos["id_quarto"] ?>"><?php echo $quartos["nome"]; ?></option>
							<?php endforeach;?>
							</select>
						</div>
					</div>
                
                <label>Arquivo</label>
                <input type="file" name="file" accept="image/*"><br><br>
						

					<div class="col-md-6">
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url() ?>quarto" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
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


