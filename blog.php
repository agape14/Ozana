<?php
    include 'header.php';
    include 'db_connection.php';

    // Consulta para obtener los blogs
    $sqlBlogs = "SELECT * FROM Blog ORDER BY id DESC";
    $resultBlogs = $conn->query($sqlBlogs);
?>

    <!-- page title -->
    <div class="page-title-wrap primary-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- page title content -->
                    <div class="page-title-content text-center">
                        <h2 class="h2">Blogs</h2>
                    </div><!-- End of page title content -->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!-- /.End of page title -->

    <!-- our blog -->
    <section class="pt-120 pb-120 top-shape">
        <div class="container">
            <div class="row">
            <?php while ($row = $resultBlogs->fetch_assoc()): ?>
                <div class="col-lg-12">
                    <div class="blog-details-wrap">
                        <!-- blog details image -->
                        <div class="blog-details-image">
                            <img src="assets/img/blog/<?php echo $row['imagen']; ?>" alt="">
                            <div class="post-date">
                                <?php
                                setlocale(LC_TIME, 'es_ES.UTF-8'); 
                                $fecha = strtotime($row['fecha']);
                                $dia = date("d", $fecha);
                                $mes = strftime("%B", $fecha);
                                $mes = ucfirst($mes); // Convierte la primera letra del mes a mayúscula
                                $anio = date("Y", $fecha);
                                ?>
                                <p><span><?php echo $dia; ?></span> <?php echo $mes; ?></p>
                            </div>
                        </div><!-- /.blog details image -->

                        <!-- blog details head -->
                        <div class="blog-details-head">
                            <h2><?php echo $row['titulo']; ?></h2>
                        </div>

                        <!-- post body -->
                        <div class="blog-details-body">
                            <p><?php echo $row['descripcion']; ?></p>
                        </div><!--/.post body -->

                        <!-- post tag and share -->
                        <div class="post-tag-share d-flex align-items-center">
                            <div class="post-tag">
                                <h4>Etiqueta:</h4>
                                <a href="#"><?php echo $row['etiqueta']; ?></a>
                            </div>
                        </div><!-- /.End of post tag and share -->

                    </div><!-- /.blog details wrap -->
                </div><!-- /.col -->
            <?php endwhile; ?>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.End of our blog -->

<?php
    include 'footer.php';
?>