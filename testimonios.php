<?php
// Incluir la conexión a la base de datos
include 'db_connection.php';

// Consulta para obtener los testimonios
$sqlTestimonios = "SELECT * FROM Testimonios";
$resultTestimonios = $conn->query($sqlTestimonios);

?>
<!-- testimonial area -->
    <section class="pt-120 pb-130 blue-bg2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <span class="schoolbell">Nuestros comentarios</span>
                        <h2 class="text-white">Testimonios</h2>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testionial-carousel-wrap">
                        <div class="owl-carousel testimonial-carousel">
                        <?php while ($row = $resultTestimonios->fetch_assoc()): ?>
                            <div class="single-testimonial">
                                <img src="assets/img/qort-icon.png" class='qurt-icon1' alt="">
                                <p><?php echo $row['detalle']; ?></p>
                                <div class="testimonial-author media">
                                    <img src="assets/img/team/author1.png" alt="Icono de autor 1">
                                    <div class="testimonial-author-deg">
                                            <h4><?php echo $row['nombre']; ?></h4>
                                            <p><?php echo $row['cargo_entidad']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of testimonial area -->