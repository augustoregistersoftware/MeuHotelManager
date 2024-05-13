<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - Meu Hotel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/meuHotel/imagens/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('application/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('application/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('application/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('application/vendor/animate/animate.css') ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('application/vendor/css-hamburgers/hamburgers.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('application/vendor/animsition/css/animsition.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('application/vendor/select2/select2.min.css') ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('application/vendor/daterangepicker/daterangepicker.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('application/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('application/css/main_login.css') ?>">
<!--===============================================================================================-->
</head>
<body>
<form action="<?= base_url() ?>login/auth/" method="post">
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/meuHotel/imagens/fundo_login.png');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Meu Hotel Admin Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" id="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#128101;"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#128231;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
                        
					</div>

                    <div class="container-login100-form-btn m-t-32">
                        <a href="<?= base_url('login/esqueci_senha') ?>">Esqueci a Senha ?</a>
                        
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

	
<!--===============================================================================================-->
<!--===============================================================================================-->
<script> 

function avisoErroSenha() {
        Swal.fire({
            title: "Oops....",
            text: "Login ou Senha errado",
            icon: "error"
        });
        
        // Limpa o parâmetro 'aviso' da URL
        limparParametroURL('aviso');
    }

<<<<<<< HEAD
function avisoAcertoSenha() {
    Swal.fire({
    title: "Olá,<?php echo $this->session->userdata('name'); ?>",
    text: "Seja muito bem-vindo(a)! Hoje, vamos nos aventurar juntos em uma jornada cheia de possibilidades. Estou ansioso(a) para explorar, aprender e criar momentos inesquecíveis ao seu lado. Vamos fazer deste dia algo extraordinário!",
    imageUrl: "https://ouch-cdn2.icons8.com/JlfQgQozPSgBq00v8E7N2L96CLHslRQofr_gnO39aRY/rs:fit:608:456/extend:false/wm:1:re:0:0:0.8/wmid:ouch/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9zdmcvNzMx/LzM1MDcyODA3LTky/NmYtNGM5Mi1hZjQw/LTgyNmI0MjQ5MWJi/OS5zdmc.png",
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: "Custom image"
    });
        
        // Limpa o parâmetro 'aviso' da URL
        limparParametroURL('aviso');
=======

function envioEmail()
    {
        const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
        });
        Toast.fire({
        icon: "success",
        title: "E-mail, Enviado com sucesso!"
        });
>>>>>>> f81afb4991797fba446b6cc94a29974b33fe53a5
    }

function envioEmail()
    {
        const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
        });
        Toast.fire({
        icon: "success",
        title: "E-mail, Enviado com sucesso!"
        });
    }

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
        if (avisoParam === 'login_errado') {
            avisoErroSenha();
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        // Verifica se o parâmetro 'aviso' está presente na URL
        const urlParams = new URLSearchParams(window.location.search);
        const avisoParam = urlParams.get('aviso');

        // Se o parâmetro 'aviso' for 'sucesso', exibe a modal
        if (avisoParam === 'envio') {
          envioEmail();
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        // Verifica se o parâmetro 'aviso' está presente na URL
        const urlParams = new URLSearchParams(window.location.search);
        const avisoParam = urlParams.get('aviso');

        // Se o parâmetro 'aviso' for 'sucesso', exibe a modal
        if (avisoParam === 'envio') {
          envioEmail();
        }
    });
</script>

</body>
</html>