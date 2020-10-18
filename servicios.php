<?php 
include 'templates/header.php';
include 'templates/footer.php';
?>
<!-- Hero -->
<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/servicios.jpg" alt="" class="img-fluid">
            <h2 class="d-none d-md-block text-uppercase py-3 px-5 text-light">
                Servicios
            </h2>
        </div>
    </div>
</div><!-- Hero end -->

<!-- General Info -->
<div class="container pt-4">
    <div class="row">
        <main class="col-lg-8 main-content">
            <h2 class="d-block d-md-none text-uppercase text-center">
                Servicios
            </h2>
            <div id="services-accordion">
                <div class="card">
                    <a class="btn btn-link p-0 text-light" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne" role="button">
                        <div class="card-header" id="headingOne">
                            <h3 class="mb-0 text-lg-left">

                                Servicio 1

                            </h3>
                        </div>
                    </a><!-- card heading accordion -->
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#services-accordion">
                        <div class="card-body">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eligendi inventore
                                obcaecati eveniet eius ipsam aspernatur tenetur, sequi nemo aut cupiditate amet
                                ducimus nam enim dolorum dignissimos voluptatem necessitatibus totam!
                            </p>
                        </div>
                    </div><!-- card body accordion -->
                </div><!-- repeatable card -->
                <div class="card">
                    <a class="btn btn-link p-0 text-light" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo" role="button">
                        <div class="card-header" id="headingTwo">
                            <h3 class="mb-0 text-lg-left">

                                Servicio 2

                            </h3>
                        </div>
                    </a><!-- card heading accordion -->
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#services-accordion">
                        <div class="card-body">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eligendi inventore
                                obcaecati eveniet eius ipsam aspernatur tenetur, sequi nemo aut cupiditate amet
                                ducimus nam enim dolorum dignissimos voluptatem necessitatibus totam!
                            </p>
                        </div>
                    </div><!-- card body accordion -->
                </div><!-- repeatable card -->
                <div class="card">
                    <a class="btn btn-link p-0 text-light" data-toggle="collapse" data-target="#collapseThree"
                        aria-expanded="true" aria-controls="collapseThree" role="button">
                        <div class="card-header" id="headingThree">
                            <h3 class="mb-0 text-lg-left">

                                Servicio 3

                            </h3>
                        </div>
                    </a><!-- card heading accordion -->
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#services-accordion">
                        <div class="card-body">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eligendi inventore
                                obcaecati eveniet eius ipsam aspernatur tenetur, sequi nemo aut cupiditate amet
                                ducimus nam enim dolorum dignissimos voluptatem necessitatibus totam!
                            </p>
                        </div>
                    </div><!-- card body accordion -->
                </div><!-- repeatable card -->
            </div>
        </main>
        <!-- Sidebar -->
        <aside class="col-lg-4 pt-4 pt-lg-0 mb-5">
            <div class="sidebar p-3 text-light">
                <h2 class="text-center text-uppercase mt-4">
                    Nuevos clientes
                </h2>
                <p class="text-center lead mt-4">
                    Recive 20% de descuento con éste cupón
                </p>
                <div class="cupon p-2 my-4">
                    <p class="text-uppercase text-center m-0">
                        <span>20% de descuento</span><br>en todos nuestros servicios
                    </p>
                </div>
            </div>
        </aside><!-- sidebar end -->
    </div><!-- main row end -->
</div><!-- main container end -->

<!-- Call to action -->
<div class="container-fluid py-5 booking">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center text-light">
            <h3 class="text-uppercase display-4">Realiza una cita</h3>
            <p class="my-5 lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod rerum quasi rem ullam
                magnam cupiditate quibusdam sapiente eligendi autem maxime vitae, facere in expedita laborum
                perspiciatis ipsam, mollitia consequuntur! Possimus.</p>
            <a href="#" class="btn btn-primary btn-lg text-uppercase">Agendar</a>
        </div>
    </div>
</div><!-- Call to action end -->

<?php 
include 'templates/footer.php';