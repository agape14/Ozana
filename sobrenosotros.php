<?php
// Incluir la conexión a la base de datos
include 'db_connection.php';

// Consulta para obtener los contadores
$sqlContadores = "SELECT * FROM contadores";
$resultContadores = $conn->query($sqlContadores);

?>
<!-- about area -->
    <section class="pt-120 pb-120 primary-bg">
       <div class="container">
           <div class="row align-items-center">
               <!--<div class="col-lg-6">
                   <div class="about-image">
                       <img src="assets/img/about-img.jpg" alt="">
                   </div>
               </div>-->
               <div class="col-lg-12">
                   <!-- about inner -->
                   <div class="about-wrap">
                       <!-- section title -->
                        <div class="section-title type2">
                            <!--<span class="schoolbell">Sobre nosotros</span>-->
                            <h2>Sobre Biozana</h2>
                        </div>
                       <!-- End of section title -->
                       <div class="about-area-text">
                           <p>Somos el grupo empresarial HIDROKAL. Tenemos el propósito de responder al llamado de Dios a través del servicio a la sociedad con nuestros productos. Contamos con mas de 10 años de experiencia en la mejora de procesos y logística comercial con un marcado enfoque en el cliente y con una perspectiva de vida que contribuya al desarrollo de nuestros accionistas, trabajadores, socios estratégicos y clientes finales.</p>
                           <div class="about-counter-inner">
                               <div class="row">
                                    <?php while ($row = $resultContadores->fetch_assoc()): ?>
                                        <div class="col-12 col-sm-6">
                                            <!-- single counter -->
                                            <div class="single-counter-inner text-center">
                                                <div class="counter-image">
                                                    <img src="assets/img/icons/water-bottle(2).svg" class="svg" alt="Botella de agua de Biozana 1">
                                                </div>
                                                <span class="counter"><?php echo $row['botellas_1litro']; ?></span>
                                                <p>Botellas de 1 litro</p>
                                            </div>
                                            <!-- End of single counter -->
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <!-- single counter -->
                                            <div class="single-counter-inner text-center">
                                                <div class="counter-image">
                                                    <img src="assets/img/icons/water-bottle(1).svg" class="svg" alt="Botella de agua de Biozana 2">
                                                </div>
                                                <span class="counter"><?php echo $row['clientes_satisfechos']; ?></span>
                                                <p>Clientes satisfechos</p>
                                            </div>
                                            <!-- End of single counter -->
                                        </div>
                                    <?php endwhile; ?>
                                   
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- End of about inner -->
               </div>
           </div>
       </div> 
    </section>
    <!-- End of about area -->