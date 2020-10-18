<?php 
include 'templates/header.php';
include 'templates/footer.php';
?>
<!-- Hero -->
<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/contacto.jpg" alt="" class="img-fluid">
            <h2 class="d-none d-md-block text-uppercase py-3 px-5 text-light">
                Contacto
            </h2>
        </div>
    </div>
</div><!-- Hero end -->

<!-- General Info -->
<div class="container pt-4">
    <div class="row justify-content-center">
        <main class="col-lg-10 main-content">
            <h2 class="d-block d-md-none text-uppercase text-center">
                Contacto
            </h2>
            <form class="p-5 mt-5 contact-form bg-white d-flex flex-column border border-dark needs-validation"
                novalidate>
                <div class="form-group">
                    <label for="nameInput">Nombre:</label>
                    <input type="text" class="form-control" id="nameInput" placeholder="Escribe tu nombre" required>
                    <div class="invalid-feedback">
                        El nombre es obligatorio
                    </div>
                    <div class="valid-feedback">
                        Correcto
                    </div>
                </div>
                <div class="form-group">
                    <label for="emailInput">Email:</label>
                    <input type="email" class="form-control" id="emailInput" placeholder="Escribe tu email" required>
                    <div class="invalid-feedback">
                        Email inválido
                    </div>
                    <div class="valid-feedback">
                        Correcto
                    </div>
                </div>
                <div class="form-group">
                    <label for="subjectInput">Asunto:</label>
                    <input type="text" class="form-control" id="subjectInput"
                        placeholder="Escribe el asunto del mensaje" required>
                    <div class="invalid-feedback">
                        El asunto del mensaje es obligatorio
                    </div>
                    <div class="valid-feedback">
                        Correcto
                    </div>
                </div>
                <div class="form-group">
                    <label for="messageInput">Mensaje:</label>
                    <textarea class="form-control" id="messageInput" rows="5" required></textarea>
                    <div class="invalid-feedback">
                        El mensaje es obligatorio
                    </div>
                    <div class="valid-feedback">
                        Correcto
                    </div>
                </div>
                <small id="emailHelp" class="form-text text-muted mb-4">Tus datos están seguros y no compartiremos
                    ningún dato proporcionado.</small>
                <input type="submit" class="btn btn-primary text-uppercase" value="Enviar">
            </form>
        </main>
    </div>
</div>

<?php 
include 'templates/footer.php';