<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Meu Hotel - Boituva</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?= base_url('application/css/main.css') ?>">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "/meuHotel/imagens/logo.png" type = "image/png">
    </head>
    <body>
        
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "site-name">
                    <span>Pagina Do Visitante</span>
                </div>
                <div class = "site-nav">
                    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
                </div>
            </div>

            <div class = "head-bottom flex">
                <h2>Meu Hotel Boituva</h2>
                <p>O Meu Hotel agora é seu também! Localizado no KM 114 da Rodovia Castelo Branco, na cidade de Boituva-SP, o mais novo hotel da região chegou para oferecer aos hóspedes mais exigentes todo o conforto em um ambiente que mistura o moderno ao contemporâneo. Esperamos recebê-lo em breve aqui no Meu Hotel Boituva! </p>
                <button type = "button" class = "head-btn">GET STARTED</button>
            </div>
        </header>
        <!-- end of header -->

        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <li><a href = "#header">home</a></li>
                <li><a href = "#services">services</a></li>
                <li><a href = "#rooms">rooms</a></li>
                <li><a href = "#customers">customers</a></li>
            </ul>
            <a href="<?= base_url('login/') ?>" >
               <button class="btn log-in" type="button">Log In</button>
            </a>
            <button class = "btn log-in">sig in</button>
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        <!-- body content  -->
        <section class = "services sec-width" id = "services">
            <div class = "title">
                <h2>services</h2>
            </div>
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-utensils"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Food Service/ Food Runner</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-swimming-pool"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Refreshment</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-broom"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Housekeeping</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-door-closed"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Room Security</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
            </div>
        </section>

        <div class = "book">
            <form class = "book-form">
                <div class = "form-item">
                    <label for = "checkin-date">Check In Date: </label>
                    <input type = "date" id = "chekin-date">
                </div>
                <div class = "form-item">
                    <label for = "checkout-date">Check Out Date: </label>
                    <input type = "date" id = "chekout-date">
                </div>
                <div class = "form-item">
                    <label for = "adult">Adults: </label>
                    <input type = "number" min = "1" value = "1" id = "adult">
                </div>
                <div class = "form-item">
                    <label for = "children">Children: </label>
                    <input type = "number" min = "1" value = "1" id = "children">
                </div>
                <div class = "form-item">
                    <label for = "rooms">Rooms: </label>
                    <input type = "number" min = "1" value = "1" id = "rooms">
                </div>
                <div class = "form-item">
                    <input type = "submit" class = "btn" value = "Book Now">
                </div>
            </form>
        </div>

        <section class = "rooms sec-width" id = "rooms">
            <div class = "title">
                <h2>rooms</h2>
            </div>
            
            <div class = "rooms-container">
                <!-- single room -->
                <?php foreach($quartos as $quartos) : ?> 
                <article class = "room">
                    <div class = "room-image">
                        <img src = "/meuHotel/imagens/<?= $quartos['caminho'] ?>" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3><?= $quartos['nome'] ?></h3>
                        <ul>
                            <li>
                            <i class = "fas fa-arrow-alt-circle-right"></i>
                            <?= $quartos['obs_1'] ?>
                            </li>
                            <li>
                            <i class = "fas fa-arrow-alt-circle-right"></i>
                            <?= $quartos['obs_2'] ?>
                            </li>
                            <li>
                            <i class = "fas fa-arrow-alt-circle-right"></i>
                            <?= $quartos['obs_3'] ?>
                            </li>
                        </ul>
                        <p><?= $quartos['descricao'] ?></p>
                        <p class = "rate">
                            <span>R$<?= number_format($quartos['preco'],2, ",", ".") ?> /</span> Per Night
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
            <?php endforeach;?> 
            </div>
            </section>


        <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h2>customers</h2>
                </div>
                <div class = "customers-container">
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>We Loved it</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                        <img src = "/meuHotel/imagens/cus1.jpg" alt = "customer image">
                        <span>Customer Name, Country</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Comfortable Living</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                        <img src = "/meuHotel/imagens/cus2.jpg" alt = "customer image">
                        <span>Customer Name, Country</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Nice Place</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                        <img src = "/meuHotel/imagens/cus3.jpg" alt = "customer image">
                        <span>Customer Name, Country</span>
                    </div>
                    <!-- end of single customer -->
                </div>
            </div>
        </section>
        <!-- end of body content -->
        
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sapiente mollitia doloribus provident? Eos quisquam aliquid vel dolorum, impedit culpa.</p>
                    <ul class = "social-icons">
                        
                    </ul>
                </div>

                
                <div>
                    <h2>Duvidas E Contato</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                        Avenida Antônio Angelo Amadio, 261 Centro Empresarial - Boituva - SP
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +55 (15)3264-2100
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            reservas@meuhotelboituva.com.br
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        
        <script>
            const navBtn = document.getElementById('nav-btn');
            const cancelBtn = document.getElementById('cancel-btn');
            const sideNav = document.getElementById('sidenav');
            const modal = document.getElementById('modal');

            navBtn.addEventListener("click", function(){
                sideNav.classList.add('show');
                modal.classList.add('showModal');
            });

            cancelBtn.addEventListener('click', function(){
                sideNav.classList.remove('show');
                modal.classList.remove('showModal');
            });

            window.addEventListener('click', function(event){
                if(event.target === modal){
                    sideNav.classList.remove('show');
                    modal.classList.remove('showModal');
                }
            });
        </script>
    </body>
</html>