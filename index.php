<?php 
include 'templates/header.php';
include 'templates/footer.php';
?>
<!-- Banner -->
<div class="container banner">
    <div class="carousel slide carousel-fade mt-4" id="main-slider" data-ride="carousel">
        <!-- Carousel pagination -->
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/slide_01.jpg" alt="Nuestas instalaciones Carolina Spa">
                <div class="carousel-caption">
                    <h3 class="text-uppercase">Nuevas instalaciones</h3>
                </div>
            </div><!-- repeatable carousel-item -->
            <div class="carousel-item">
                <img src="img/slide_02.jpg" alt="Servicios Carolina Spa">
                <div class="carousel-caption">
                    <h3 class="text-uppercase">Conoce nuestros servicios</h3>
                </div>
            </div><!-- repeatable carousel-item -->
            <div class="carousel-item">
                <img src="img/slide_03.jpg" alt="Promoción Carolina Spa">
                <div class="carousel-caption">
                    <h3 class="text-uppercase">Nuevo sitio web 2x1 en todos los servicios</h3>
                </div>
            </div><!-- repeatable carousel-item -->
        </div><!-- carousel-inner -->
        <!-- carousel prev&next arrows -->
        <a href="#main-slider" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a href="#main-slider" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div><!-- carousel end -->
</div><!-- banner container end -->

<!-- Welcome frase -->
<section class="welcome-frase py-5 mt-4">
    <h2 class="text-center text-capitalize italic-letter">
        <span class="text-lowercase d-block">
            Bienvenido a nuestro
        </span>
        Sitio web
    </h2>
    <p class="text-center mt-4">Te sentirás como nuevo(a) con nuestros <br> masajistas profesionales</p>
</section>
<!-- Welcome frase end -->

<!-- Services -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 text-center mb-4">
            <div class="service">
                <img src="img/servicio_01.jpg" alt="" class="img-fluid">
                <div class="row justify-content-center no-gutters">
                    <div class="col-md-10 service-info">
                        <h3 class="text-uppercase text-center py-4 italic-letter">
                            <span class="text-lowercase d-block">Conoce sobre </span>nosotros
                        </h3>
                        <a href="nosotros.php" class="btn btn-primary btn-block text-uppercase py-3">Leer más</a>
                    </div>
                </div>
            </div><!-- service-image end -->
        </div><!-- repeatable col-md-4 -->
        <div class="col-md-6 col-lg-4 text-center mb-4">
            <div class="service">
                <img src="img/servicio_02.jpg" alt="" class="img-fluid">
                <div class="row justify-content-center no-gutters">
                    <div class="col-md-10 service-info">
                        <h3 class="text-uppercase text-center py-4 italic-letter">
                            <span class="text-lowercase d-block">nuestros </span>servicios
                        </h3>
                        <a href="servicios.php" class="btn btn-primary btn-block text-uppercase py-3">Leer más</a>
                    </div>
                </div>
            </div><!-- service-image end -->
        </div><!-- repeatable col-md-4 -->
        <div class="col-md-6 col-lg-4 text-center mb-4">
            <div class="service">
                <img src="img/servicio_03.jpg" alt="" class="img-fluid">
                <div class="row justify-content-center no-gutters">
                    <div class="col-md-10 service-info">
                        <h3 class="text-uppercase text-center py-4 italic-letter">
                            <span class="text-lowercase d-block">Visita nuestra </span>tienda
                        </h3>
                        <a href="productos.php" class="btn btn-primary btn-block text-uppercase py-3">Leer más</a>
                    </div>
                </div>
            </div><!-- service-image end -->
        </div><!-- repeatable col-md-4 -->
    </div><!-- row end -->
</div>
<!-- Services end -->

<!-- Schedules -->
<div class="schedules my-5 text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center text-uppercase font-weight-bold mt-5">horarios</h2>
                <p class="text-center lead mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum,
                    dolorum
                    voluptates quis alias quidem explicabo ipsum quia temporibus accusantium autem saepe, pariatur
                    beatae vitae iure rem corrupti suscipit laborum et!</p>
                <table class="table table-hover text-center mt-3 mb-5 text-light">
                    <thead>
                        <tr>
                            <th class="text-center">Día</th>
                            <th class="text-center">De</th>
                            <th class="text-center">Hasta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lunes</td>
                            <td>09:00</td>
                            <td>19:00</td>
                        </tr>
                        <tr>
                            <td>Martes</td>
                            <td>09:00</td>
                            <td>19:00</td>
                        </tr>
                        <tr>
                            <td>Miércoles</td>
                            <td>09:00</td>
                            <td>19:00</td>
                        </tr>
                        <tr>
                            <td>Jueves</td>
                            <td>09:00</td>
                            <td>19:00</td>
                        </tr>
                        <tr>
                            <td>Viernes</td>
                            <td>09:00</td>
                            <td>19:00</td>
                        </tr>
                        <tr>
                            <td>Sábado</td>
                            <td>09:00</td>
                            <td>19:00</td>
                        </tr>
                        <tr>
                            <td>Domingo</td>
                            <td>09:00</td>
                            <td>19:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 schedules-image">
                <img src="img/bg_horarios.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!-- Products -->
<section class="container pb-5 products">
    <h2 class="text-center italic-letter text-uppercase mt-4">
        <span class="text-lowercase d-block">nuestros</span>productos
    </h2>
    <div class="row py-5">
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <a href="producto.php">
                    <img src="img/producto_mini_01.jpg" alt="Producto Carolina Spa" class="card-img-top">
                </a>
                <div class="card-body">
                    <h3 class="card-title text-center text-uppercase">Producto 1</h3>
                    <p class="card-text text-uppercase">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit.</p>
                    <p class="lead text-center product-pricing mb-0">$25</p>
                </div>
            </div><!-- card end -->
        </div><!-- repeatable card group -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <a href="producto.php">
                    <img src="img/producto_mini_02.jpg" alt="Producto Carolina Spa" class="card-img-top">
                </a>
                <div class="card-body">
                    <h3 class="card-title text-center text-uppercase">Producto 2</h3>
                    <p class="card-text text-uppercase">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit.</p>
                    <p class="lead text-center product-pricing mb-0">$25</p>
                </div>
            </div><!-- card end -->
        </div><!-- repeatable card group -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <a href="producto.php">
                    <img src="img/producto_mini_03.jpg" alt="Producto Carolina Spa" class="card-img-top">
                </a>
                <div class="card-body">
                    <h3 class="card-title text-center text-uppercase">Producto 3</h3>
                    <p class="card-text text-justify text-uppercase">Lorem ipsum dolor, sit amet consectetur
                        adipisicing
                        elit.</p>
                    <p class="lead text-center product-pricing mb-0">$25</p>
                </div>
            </div><!-- card end -->
        </div><!-- repeatable card group -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <a href="producto.php">
                    <img src="img/producto_mini_04.jpg" alt="Producto Carolina Spa" class="card-img-top">
                </a>
                <div class="card-body">
                    <h3 class="card-title text-center text-uppercase">Producto 4</h3>
                    <p class="card-text text-uppercase">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit.</p>
                    <p class="lead text-center product-pricing mb-0">$25</p>
                </div>
            </div><!-- card end -->
        </div><!-- repeatable card group -->
    </div>
</section><!-- products end -->

<!-- Call to action -->
<div class="container-fluid py-5 booking">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center text-light">
            <h3 class="text-uppercase display-4">Realiza una cita</h3>
            <p class="my-5 lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod rerum quasi rem ullam
                magnam cupiditate quibusdam sapiente eligendi autem maxime vitae, facere in expedita laborum
                perspiciatis ipsam, mollitia consequuntur! Possimus.</p>
            <a href="contacto.php" class="btn btn-primary btn-lg text-uppercase">Agendar</a>
        </div>
    </div>
</div><!-- Call to action end -->

<?php 
include 'templates/footer.php';