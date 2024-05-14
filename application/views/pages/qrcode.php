<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pix QRcode e Link</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          </div>
        </div>
      </div>

			<div class="col-md-12">
			<?php if(isset($game)) : ?>
					
					<form action="<?= base_url() ?>games/update/<?= $game['id'] ?>" method="post">
				<?php else : ?>
					<form action="<?= base_url() ?>qrcode/gerarqrcode" method="post">
				<?php endif; ?>
				<form action="" method="post">
					<div class="col-md-6">

						<div class="col-md-6">
							<div class="form-group">
								<label for="pixkey">Pix Copia e Cola</label>
								<input type="text" class="form-control" name="pixkey" id="pixkey" onclick="copiar()" placeholder="Chave Pix" value="<?php echo $chavefinal ?>">
                                
							</div>
						</div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <p><a type="button" id="clip_btn" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Copiar código pix" href="javascript:copiar()"><i class="fas fa-clipboard"></i></a></p>
                            </div>    
                        </div>          

				
					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs" title="Salvar Arquivo QRcode"><i class="fas fa-check"></i> Save Qrcode</button>
							<a href="<?= base_url() ?>cobranca" class="btn btn-danger btn-xs"><i class="fa-solid fa-rotate-right"></i>Voltar</a>
						</div>
					</div>
				</form>
			</div>

  </div>
</div>
</main>

<script>
    function copiar() {
  var copyText = document.getElementById("pixkey");
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */
  document.execCommand("copy");
  document.getElementById("clip_btn").innerHTML='<i class="fas fa-clipboard-check"></i>';
    }
</script>

