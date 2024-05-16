<head>
<title>Login - Meu Hotel</title>
<link rel="icon" type="image/png" href="/meuHotel/imagens/logo.png">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<form class="login" action="<?= base_url() ?>login/esqueceu_senha/" method="post">
  <div class="column">
    <div class="header">
      <div class="logo">
      <i class="fa-solid fa-hotel"></i>
         MeuHotel
      </div>
    </div>
    <div class="form">
      <h1>Forgot Password</h1>
      <div class="form-page">
        <div class="segmented">
          
          <div class="segmented-focus"></div>
        </div>
        <div class="field">
            <input class="input-textbox" type="text" name="email" id="email" placeholder="E-mail">
          <label class="label" for="user-email"></label>
        </div>
        <div class="field">
          <input class="input-textbox" type="text" name="cemail" id="cemail" placeholder="Confirmar E-mail">
          <label class="label" for="user-email"></label>
        </div>
        <div class="field">
          <input class="input-textbox" type="text" name="nome" id="nome" placeholder="Nome">
          <label class="label" for="user-email"></label>
        </div>
        <button class="btn" type="submit">Continue</button>
        <a class="btn" href="<?= base_url('Login') ?>">Voltar</a>
        <div class="or"></div>
        <div class="social">
        </div>
      </div>
    </div>
    <div class="footer">
      <ul class="footer-nav">
        <li><a href="#">Todos os Direitos Reservados ©</a></li>
      </ul>
    </div>
  </div>
  <div class="column column--bg">
    <img class="bg-img" src="/meuHotel/imagens/fundo_login.png" />
  </div>
</form>

<script> 

document.getElementById('cemail').addEventListener('change', function() {
        var email = document.getElementById('email').value;
        var cmail = this.value;

        if (email === cmail) {
            
        } else {
            this.value = "";
            controleDialog();
        }
    });

    function controleDialog(){
        Swal.fire({
            title: "Oops....",
            text: "Os e-mails não coincidem. O campo de confirmação de e-mail foi limpo.",
            icon: "warning"
        });
	}
</script>

<style>
    @import url('https://use.fontawesome.com/releases/v6.5.1/css/all.css');
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');

/* TikTok @Code The World */

* {
  border: 0;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  height: 100vh;
}

.login {
  display: flex;
  margin: auto;
  width: 100%;
  height: 100%;
  color: hsl(223, 10%, 10%);
  font: 1em/1.5 "DM Sans", sans-serif;
}

.column {
  width: 50%;
  background-color: white;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  overflow: auto;
  padding: 1.5em;
  position: relative;
}

.header {
  width: 100%;
  padding: 1.5em 0;
}

.logo {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.5em;
  line-height: 1;
  margin: auto;
  width: 9rem;
}

.form {
  width: 22em;
  flex-shrink: 0;
  margin: 3em 0;
  height: min-content;
}

h1 {
  font-size: 2em;
  margin: 0 0 1.5rem;
  text-align: center;
}

.segmented {
  position: relative;
  background-color: hsl(233, 10%, 90%);
  border-radius: 0.75em;
  display: flex;
  margin-bottom: 1.5em;
  min-height: 3em;
}

.segmented-btn {
  border-radius: 0.875em;
  box-shadow: 0 0 0 0.1875em var(--focus-t) inset;
  color: hsl(223, 10%, 40%);
  cursor: pointer;
  outline: transparent;
  padding: 0.75em;
  width: 100%;
  background-color: transparent;
  position: relative;
  z-index: 1;
}

.segmented-btn[aria-selected=true] {
  color: hsl(223, 10%, 10%);
}

.segmented-focus {
  background-color: white;
  border-radius: 0.625em;
  pointer-events: none;
  position: absolute;
  top: 0.25em;
  bottom: 0.25em;
  left: 0.25em;
  width: calc(50% - 0.5em);
}

.field {
  position: relative;
  margin-bottom: 2.25em;
}

.input-textbox {
  width: 100%;
  background-color: transparent;
  border-radius: 0.75em;
  box-shadow: 0 0 0 0.125em hsl(233, 10%, 80%) inset;
  outline: transparent;
  padding: 1.5em 1em 0.5em 1em;
  padding-inline-end: 3.5em;
  appearance: none;
}

.label {
  color: hsl(var(--hue), 10%, 30%);
  cursor: text;
  display: flex;
  position: absolute;
  bottom: 0.4em;
  left: 1em;
  pointer-events: none;
}

.btn {
  width: 100%;
  background-color: hsl(223, 90%, 50%);
  border-radius: 0.75em;
  box-shadow:
    0 0 0 0.1em hsl(223deg 10% 90% / 0%),
    0 0 0 0.3em hsl(223deg 90% 50% / 0%);
  color: white;
  margin-bottom: 1.5em;
  padding: 1em;
  cursor: pointer;
  display: block;
  outline: transparent;
}

.or {
  color: hsl(223, 10%, 40%);
  display: flex;
  align-items: center;
  font-size: 0.75em;
  line-height: 2;
  margin-bottom: 1.5em;
  text-align: center;
}

.or:before,
.or:after {
  background-color: hsl(223, 10%, 70%);
  content: "";
  display: block;
  flex: 1;
  height: 1px;
}

.or:before {
  margin-inline-end: 0.75em;
}

.or:after {
  margin-inline-start: 0.75em;
}

.social {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 1.5em;
  margin-bottom: 1.5em;
}

.social-btn {
  width: 3.4em;
  height: 3.4em;
  border-radius: 50%;
  box-shadow: 0 0 0 0.2em hsl(223deg 90% 50% / 0%);
  cursor: pointer;
  outline: transparent;
}

.footer {
  width: 100%;
}

.footer-nav {
  display: flex;
  justify-content: center;
  gap: 1rem;
  font-size: 0.75em;
  line-height: 1.3;
  list-style: none;
}

a {
  border-radius: 0.25em;
  box-shadow: 0 0 0 0.2em hsl(223deg 90% 50% / 0%);
  color: hsl(223, 90%, 50%);
  outline: transparent;
}

.column--bg {
  width: 50%;
  display: flex;
  justify-content: center;
  padding: 0;
  overflow: hidden;
}

.bg-img {
  display: block;
  object-fit: cover;
  width: 100%;
  height: 100%;
}
</style>