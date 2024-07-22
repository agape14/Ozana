<?php
    include 'header.php';
?>
<!-- page title -->
    <div class="page-title-wrap primary-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- page title content -->
                    <div class="page-title-content text-center">
                        <h1 class="h2">Ponerse en contacto</h1>
                    </div>
                    <!-- End of page title content -->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.End of page title -->
    
    <!-- contact info -->
    <section class="pt-120 top-shape">
        <div class="conatct-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- single contact info -->
                        <div class="single-conatct-info">
                            <h4>Acerca de nosotros</h4>
                            <p>Somos el grupo empresarial HIDROKAL. Tenemos el propósito de responder al llamado de Dios a través del servicio a la sociedad con nuestros productos. Contamos con mas de 10 años de experiencia en la mejora de procesos y logística comercial con un marcado enfoque en el cliente y con una perspectiva de vida que contribuya al desarrollo de nuestros accionistas, trabajadores, socios estratégicos y clientes finales.</p>
                        </div>
                        <!-- End of single contact info -->
                    </div>
                    <div class="col-md-4">
                        <!-- single contact info -->
                        <div class="single-conatct-info">
                            <h4>Direccion</h4>
                            <p>Comas, Lima, Perú</p>
                        </div>
                        <!-- End of single contact info -->
                    </div>
                    <div class="col-md-4">
                        <!-- single contact info -->
                        <div class="single-conatct-info">
                            <h4>Contacto</h4>
                            <a href="+51947758615">+51 974 261 306</a>
                            <a href="ventas@biozana.com.pe">ventas@biozana.com.pe</a>
                        </div>
                        <!-- End of single contact info -->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.contact info-->
    </section><!-- /.End of contact info -->

    <!-- contact form -->
    <section class="pt-90 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <span class="schoolbell">Contacta con nosotros</span>
                        <h2>Enviar mensaje</h2>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <!-- contact form -->
                    <div class="contact-form contact-page-form parsley-validate">
                        <form action="sendmail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Nombres completos" class="theme-input-style" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Correo Electronico" class="theme-input-style" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Escribe el detalle del mensaje" class="theme-input-style"></textarea>
                                    <div class="submite-btn text-center">
                                        <button type="submit" class="btn" disabled>Enviar Mensaje</button>
                                    </div>
                                </div>
                            </div>
                        </form><!--/.form-->
                    </div><!-- /.End of contact form -->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.End ofcontact form -->

    <!-- map -->
    <div class="google-map">
        <div id="google-map"></div>
    </div>
    <!-- End of map -->
    <?php
        include 'footer.php';
    ?>