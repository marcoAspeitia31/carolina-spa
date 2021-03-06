<?php 
include 'templates/header.php';
include 'templates/footer.php';
?>

<!-- Hero -->
<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/nosotros.jpg" alt="" class="img-fluid">
            <h2 class="d-none d-md-block text-uppercase py-3 px-5 text-light">
                Nosotros
            </h2>
        </div>
    </div>
</div><!-- Hero end -->

<!-- General Info -->
<div class="container pt-4">
    <div class="row">
        <main class="col-lg-8 main-content">
            <h2 class="d-block d-md-none text-uppercase text-center">
                Nosotros
            </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quaerat eos natus dicta tempore
                magni. Nisi dolorem eligendi qui, deserunt quas ipsum aspernatur, dignissimos commodi similique
                minus inventore nobis soluta!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aliquid. Deleniti sequi necessitatibus
                maxime amet praesentium modi consequatur blanditiis quod eum, obcaecati nulla. Tempora aperiam
                itaque fuga numquam, labore provident.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quaerat eos natus dicta tempore
                magni. Nisi dolorem eligendi qui, deserunt quas ipsum aspernatur, dignissimos commodi similique
                minus inventore nobis soluta!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aliquid. Deleniti sequi necessitatibus
                maxime amet praesentium modi consequatur blanditiis quod eum, obcaecati nulla. Tempora aperiam
                itaque fuga numquam, labore provident.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quaerat eos natus dicta tempore
                magni. Nisi dolorem eligendi qui, deserunt quas ipsum aspernatur, dignissimos commodi similique
                minus inventore nobis soluta!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aliquid. Deleniti sequi necessitatibus
                maxime amet praesentium modi consequatur blanditiis quod eum, obcaecati nulla. Tempora aperiam
                itaque fuga numquam, labore provident.</p>
            <h2 class="text-center text-uppercase italic-letter mb-4">
                <span class="text-lowercase d-block">
                    Conoce nuestras
                </span>
                instalaciones
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-3">
                    <a href="#" data-target="#image-1" data-toggle="modal">
                        <img src="img/galeria_mini_01.jpg" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <a href="#" data-target="#image-2" data-toggle="modal">
                        <img src="img/galeria_mini_02.jpg" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <a href="#" data-target="#image-3" data-toggle="modal">
                        <img src="img/galeria_mini_03.jpg" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="modal fade" id="image-1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <img src="img/galeria_grande_01.jpg" alt="" class="img-fluid">
                            </div>
                        </div><!-- modal-content end -->
                    </div><!-- modal-dialog end -->
                </div><!-- repeatable modal -->
                <div class="modal fade" id="image-2" tabindex="-1" role="dialog" aria-labelledby="Imagen 2"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <img src="img/galeria_grande_02.jpg" alt="" class="img-fluid">
                            </div>
                        </div><!-- modal-content end -->
                    </div><!-- modal-dialog end -->
                </div><!-- repeatable modal -->
                <div class="modal fade" id="image-3" tabindex="-1" role="dialog" aria-labelledby="Imagen 3"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <img src="img/galeria_grande_03.jpg" alt="" class="img-fluid">
                            </div>
                        </div><!-- modal-content end -->
                    </div><!-- modal-dialog end -->
                </div><!-- repeatable modal -->
            </div>
        </main>
        <!-- SIDEBAR SCHEDULES-->
        <aside class="col-lg-4 pt-4 pt-lg-0 text-light align-self-start">
            <div class="sidebar schedules">
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
        </aside>
        <!-- SIDEBAR SCHEDULES END -->
    </div>
</div>

<?php 
include 'templates/footer.php';