<div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="img/logo.png" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='<?= $actual == 'index' ? 'active' : '' ?>'><a href="index.php">Inicio</a></li>
                                <li class='<?= $actual == 'about-us' ? 'active' : '' ?>' ><a href="about-us.php">Sobre nosotros</a></li>
                                <!--<li><a href="cars.html">Vehículos</a></li>-->

                               <!-- <li>
                                    <a href="#">Menú</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.php">Sobre nosotros</a></li>
                                        <li><a href="team.html">Equipo</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="terms.html">Terms</a></li>
                                    </ul>
                                </li>-->

                                <li class='<?= $actual == 'contact-us' ? 'active' : '' ?>'><a class="nav-link" href="contact.php">Contáctanos</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>