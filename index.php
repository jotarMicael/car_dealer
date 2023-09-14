<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);

require_once 'utils/const.php';

$actual = 'index';

?>

<!DOCTYPE html>
<html>

<?php require_once 'templates/header/header.php' ?>

<body>

    <?php require_once 'templates/navbar/navbar.php' ?>

    <section class="banner" id="top" style="background-image: url(img/homepage-banner-image-1920x700.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                        <div class="blue-button">
                            <a href="contact.php">Contáctanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">
                            <br>
                            <h4>Sobre nosotros</h4>
                            <p>Aenean hendrerit metus leo, quis viverra purus condimentum nec. Pellentesque a sem
                                semper, lobortis mauris non, varius urna. Quisque sodales purus eu tellus
                                fringilla.<br><br>Mauris sit amet quam congue, pulvinar urna et, congue diam.
                                Suspendisse eu lorem massa. Integer sit amet posuere tellus, id efficitur leo. In hac
                                habitasse platea dictumst. Vel sequi odit similique repudiandae ipsum iste, quidem
                                tenetur id impedit, eaque et, aliquam quod.</p>
                            <div class="blue-button">
                                <a href="about-us.php">Descubre más.</a>
                            </div>

                            <br>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="img/about-1-720x480.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h1 style="color:#4883ff; margin-bottom:15px; background-color:none; border:none;">Vehículos
                            </h1>

                            <div class="form-group">

                                <input type="text" class="form-control form-control-border border-width-2 input-search_"
                                    id="search_vehicle" placeholder="Buscar vehículo...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="view_vechicles">
                    <?php
                    $vehicles =
                        array(
                            array("name" => "FORD", "year" => "2019", "color" => "Azul", "km" => "30.000", "power" => "95", "cc" => "1800", "gearbox" => "Manual", "fuel" => "Diesel", "description" => "4 puertas", "type" => "Usado", "price" => "11999.00", "images" => array("Imagen1", "Imagen2", "Imagen3", "Imagen4")),
                            array("name" => "CHEVROLET", "year" => "2015", "color" => "Rojo", "km" => "100.000", "power" => "195", "cc" => "1500", "gearbox" => "Manual", "fuel" => "Nafta Súper", "description" => "Cierre centralizado", "type" => "Nuevo", "price" => "12999.00", "images" => array("Imagen1", "Imagen2", "Imagen3", "Imagen4")),
                            array("name" => "TAUNUS", "year" => "2016", "color" => "Verde", "km" => "10.000", "power" => "91", "cc" => "1300", "gearbox" => "Manual", "fuel" => "Diesel", "description" => "Automático", "type" => "Usado", "price" => "21999.00", "images" => array("Imagen1", "Imagen2", "Imagen3", "Imagen4")),
                            array("name" => "KIA", "year" => "2020", "color" => "Amarillo", "km" => "200.000", "power" => "85", "cc" => "2000", "gearbox" => "Automático", "fuel" => "Eléctrico", "description" => "Estacionamiento asistido", "price" => "31999.00", "type" => "Usado", "images" => array("Imagen1", "Imagen2", "Imagen3")),
                            array("name" => "FORD", "year" => "2019", "color" => "Azul", "km" => "20.000", "cc" => "1600", "power" => "115", "gearbox" => "Manual", "fuel" => "Híbrido", "description" => "4 puertas", "type" => "Nuevo", "price" => "33999.00", "images" => array("Imagen1", "Imagen2", "Imagen3", "Imagen4")),
                            array("name" => "CHEVROLET", "year" => "2015", "color" => "Rojo", "km" => "5.000", "cc" => "2000", "power" => "221", "gearbox" => "Automático", "fuel" => "Híbrido", "description" => "Cierre centralizado", "price" => "23999.00", "type" => "Nuevo", "images" => array("Imagen1", "Imagen2", "Imagen3", "Imagen4")),
                            array("name" => "TAUNUS", "year" => "2016", "color" => "Verde", "km" => "50.000", "cc" => "2500", "power" => "125", "gearbox" => "Automático", "fuel" => "Eléctrico", "description" => "Automático", "price" => "24999.00", "type" => "Usado", "images" => array("Imagen1", "Imagen2", "Imagen3", "Imagen4")),
                            array("name" => "KIA", "year" => "2020", "color" => "Amarillo", "km" => "72.000", "cc" => "1800", "power" => "77", "gearbox" => "Manual", "fuel" => "Diesel", "description" => "Estacionamiento asistido", "price" => "19999.00", "type" => "Usado", "images" => array("Imagen1", "Imagen2", "Imagen3"))
                        );

                    foreach ($vehicles as $v) {


                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="featured-item">
                                <div class="thumb">
                                    <div class="thumb-img">
                                        <img src="img/product-<?= rand(1, 6) ?>-720x480.jpg" alt="">
                                    </div>
                                    <div class="overlay-content">
                                        <strong><i class="fa fa-dashboard"></i>
                                            <?= $v['km']; ?>km
                                        </strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong><i class="fa fa-cube"></i>
                                            <?= $v['cc']; ?> cc
                                        </strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong><i class="fa fa-cog"></i>
                                            <?= $v['gearbox'] ?>
                                        </strong>
                                    </div>
                                </div>
                                <div class="down-content">
                                    <h4>
                                        <?= $v['name']; ?>
                                    </h4>

                                    <br>

                                    <p>
                                        <?= $v['power']; ?> hp /
                                        <?= $v['fuel']; ?> /
                                        <?= $v['year']; ?> /
                                        <?= $v['type']; ?>
                                    </p>

                                    <p><!--<span><del><sup>$</sup>11999.00 </del> <strong><sup>$</sup>11779.00</strong></span>-->
                                        <span><strong>$
                                                <?= $v['price']; ?>
                                            </strong></span>
                                    </p>

                                    <div class="text-button">
                                        <a href="car-details.php">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>




                </div>
            </div>
        </section>

        <!--   <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Latest blog posts</span>
                            <h2>Lorem ipsum dolor sit amet ctetur.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="img/blog-1-720x480.jpg" alt="">
                                </div>

                                <div class="overlay-content">
                                    <strong title="Author"><i class="fa fa-user"></i> John Doe</strong>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                                </div>
                            </div>

                            <div class="down-content">
                                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda
                                    nam facere voluptatibus totam veritatis. </p>

                                <div class="text-button">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="img/blog-2-720x480.jpg" alt="">
                                </div>

                                <div class="overlay-content">
                                    <strong title="Author"><i class="fa fa-user"></i> John Doe</strong>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                                </div>
                            </div>

                            <div class="down-content">
                                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda
                                    nam facere voluptatibus totam veritatis. </p>

                                <div class="text-button">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="img/blog-3-720x480.jpg" alt="">
                                </div>

                                <div class="overlay-content">
                                    <strong title="Author"><i class="fa fa-user"></i> John Doe</strong>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                                </div>
                            </div>

                            <div class="down-content">
                                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda
                                    nam facere voluptatibus totam veritatis. </p>

                                <div class="text-button">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
                <div class="inner">
                    <div class="section-heading">
                        <span>Contact Us</span>
                        <h2>Vivamus nec vehicula felis</h2>
                    </div>
                    <div class="blue-button">
                        <a href="contact.html">Talk to us</a>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section class="popular-places" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Testimonials</span>
                            <h2>Lorem ipsum dolor sit amet</h2>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel owl-theme">
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="img/popular_item_1.jpg" alt="">
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis
                                    nulla at quia quaerat."</span>
                            </div>
                            <div class="plus-button">
                                <a href="testimonials.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="img/popular_item_2.jpg" alt="">
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis
                                    nulla at quia quaerat."</span>
                            </div>
                            <div class="plus-button">
                                <a href="testimonials.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="img/popular_item_3.jpg" alt="">
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis
                                    nulla at quia quaerat."</span>
                            </div>
                            <div class="plus-button">
                                <a href="testimonials.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="img/popular_item_4.jpg" alt="">
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis
                                    nulla at quia quaerat."</span>
                            </div>
                            <div class="plus-button">
                                <a href="testimonials.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="img/popular_item_5.jpg" alt="">
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis
                                    nulla at quia quaerat."</span>
                            </div>
                            <div class="plus-button">
                                <a href="testimonials.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="img/popular_item_1.jpg" alt="">
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis
                                    nulla at quia quaerat."</span>
                            </div>
                            <div class="plus-button">
                                <a href="testimonials.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <img src="img/popular_item_2.jpg" alt="">
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis
                                    nulla at quia quaerat."</span>
                            </div>
                            <div class="plus-button">
                                <a href="testimonials.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </main>

    <?php require_once 'templates/footer/footer.php';
    require_once 'templates/footer/subfooter.php';
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/search_vehicles.js"></script>
</body>

</html>