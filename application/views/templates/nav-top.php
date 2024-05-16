<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">FinAR <i class="fa-solid fa-money-bill"></i></a>
	<div>
	</div>
  <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-gear"></i></a></a>
        <ul class="dropdown-menu">
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Funções</a></li>
            <li><a href="<?=base_url()?>login">Sair</a></li>
        </ul>
    </li>
</ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Menu</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>dashboard">
              <span data-feather="file"><img src="\finar\imagens\Dashboard_40953.png"></span>
              Dashboard
            </a>
          </li>
					<li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"><img src="\finar\imagens\users_21945.png"></span>
              Usuarios ▼
            </a>
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>cadastro_login">Cadastro De Usuario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>compra">Cadastro De Perfil</a>
              </li>
             </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>clientes">
              <span data-feather="file"><img src="\finar\imagens\date_application_users_customers_2945.png"></span>
              Clientes
            </a>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>produto">
              <span data-feather="file"><img src="\finar\imagens\produtos.png"></span>
              Produto
            </a> 
          
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"><img src="\finar\imagens\truck_13241.png"></span>
              Fornecedor ▼
            </a>
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>fornecedor">Cadastro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>compra">Compras</a>
              </li>
             </ul>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>localizacao">
              <span data-feather="file"><img src="\finar\imagens\1491254387-pindestinationmaplocation_82942.png"></span>
              Localização
            </a>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"><img src="\finar\imagens\economic_sustainability_business_money_financial_icon_189076.png"></span>
              Financeiro ▼
            </a>
          
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>email">Vendas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>email">Cobrança</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>email">Viagem</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>email">Bancos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>email">Forma De Pagamento</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>email">Status</a>
              </li>
            </ul>  
          
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>empresa">
              <span data-feather="file"><img src="\finar\imagens\office_business_work_workplace_home_company_icon_175608.png"></span>
              Empresa
            </a>   

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Copyright © 2024 - Academia Jazz Bell SC ltda.</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        </ul>
      </div>
    </nav>

    <style>
  .sub-menu {
    margin-left: 20px;
    display: none; /* Esconda o submenu inicialmente */
}

.nav-item:hover .sub-menu {
    display: block; /* Mostre o submenu quando o item pai for passado com o mouse */
}

/* Estilo base para a navbar e itens */
.navbar-nav {
    list-style: none;
    padding-left: 0;
}

.nav-item {
    position: relative;
}

.nav-link {
    display: block;
    padding: 8px 12px;
    color: #007bff;
    text-decoration: none;
}

/* Escondendo o menu dropdown por padrão */
.dropdown-menu {
    display: none;
    position: absolute;
    background-color: #ffffff;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    z-index: 1;
    list-style: none;
    width: 100%; /* Ajuste conforme necessário */
    left: 0;
    margin: 0;
    padding: 0;
}

.dropdown-menu li {
    padding: 0;
}

.dropdown-menu a {
    display: block;
    padding: 8px 12px;
    color: #333333;
    text-decoration: none;
}

.dropdown-menu a:hover {
    background-color: #f8f9fa;
}

/* Mostrando o menu dropdown quando o item pai está com hover */
.nav-item:hover .dropdown-menu {
    display: block;
}



</style>