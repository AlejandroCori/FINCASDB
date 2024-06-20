<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="#, with Bootstrap 4" />
    <meta name="google" content="nositelinkssearchbox">
    <meta name="author" content="Jhoamir Adhemar Patty Salazar">
    <title>FINCAS </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleindex.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Finca Los Flores</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Descubre</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="T_Administrador.php">Ingresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="background-main">
        <main class="main">
            <h1 class="main-title">Finca Los Flores es 
                <a href="" class="typewrite" data-period="3000" data-type='[ "Divertida", "Relajante", "Natural", "Comoda" ]'>
                    <span class="wrap"></span>
                </a>
            </h1>
        </main>
        <div class="text-center">
            <a class="main-link btn btn-lg"  href="">
              <!--  See more
                <i class="fa fa-chevron-down"></i> <!-->
            </a> 
        </div>
    </header>
    
    <section class="about-us" id="about">
        <div class="container">
            <div class="text-center">
                <h2>Sobre Nosotros</h2>
                <div class="line-shape"></div>
                <p>
                Somos un apasionado grupo de estudiantes de la carrera de Ingeniería de Sistemas en la prestigiosa Universidad Privada Franz Tamayo. Unidos por nuestra visión de transformar la gestión de fincas, estamos desarrollando un avanzado sistema de información diseñado para revolucionar la manera en que los propietarios administran sus propiedades.

Nuestra Misión
En Las Flores, creemos en el poder de la tecnología para simplificar la vida y potenciar los negocios agrícolas. Nuestra misión es proporcionar una herramienta eficiente y fácil de usar que permita a los propietarios de fincas gestionar sus recursos de manera más efectiva, optimizar procesos y tomar decisiones informadas basadas en datos precisos.

Nuestra Visión
Aspiramos a ser líderes en innovación tecnológica aplicada al sector agrícola, creando soluciones que no solo faciliten la administración de fincas, sino que también promuevan la sostenibilidad y el crecimiento del sector. Queremos ser tu socio de confianza en el camino hacia una gestión agrícola más inteligente y eficiente.

Nuestro Compromiso
Estamos comprometidos con la excelencia y la innovación. Cada miembro de nuestro equipo aporta una perspectiva única y un conjunto de habilidades especializadas para asegurar que nuestro sistema de información cumpla con los más altos estándares de calidad y funcionalidad.
                </p>        
            </div>
        </div>
    </section>
    <br>
    <!--<section class="services-class" id="services">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">At Your Service</h2>
                <div class="line-shape"></div>
            </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-gem text-primary mb-3 sr-icon-1"></i>
                <h3 class="mb-3">Sturdy Templates</h3>
                <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
                <h3 class="mb-3">Ready to Ship</h3>
                <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
                <h3 class="mb-3">Up to Date</h3>
                <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
                <h3 class="mb-3">Made with Love</h3>
                <p class="text-muted mb-0">You have to make your websites with love these days!</p>
                </div>
            </div>
            </div>
        </div> <!-->
    </section>
    <br>
    <div class="container text-center" id="portfolio">
            <h2 class="portfolio-title">Descubre Los Flores: Tu Refugio Natural de Aventura y Relax</h2>
            <div class="line-shape"></div>
    </div>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" src="assets/img/img/r-1.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Alojamiento en Cabañas y Camping</h2>
                        <p>Experimenta una estancia única en nuestras acogedoras cabañas estilo A-frame, perfectamente integradas en el paisaje. Para los amantes del camping, ofrecemos áreas designadas para tiendas de campaña, rodeadas de jardines coloridos y vistas espectaculares. En Las Flores, la comodidad se une con la aventura para brindarte una experiencia incomparable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" src="assets/img/img/r-2.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Conéctate con la Naturaleza en Familia</h2>
                        <p>Ven con tu familia y amigos a Los Flores y disfruta de un entorno tranquilo y pintoresco. Nuestro mirador ofrece vistas impresionantes y una atmósfera perfecta para relajarte y tomar fotografías memorables. Juntos, podrán explorar la belleza natural que nos rodea y compartir momentos inolvidables.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" src="assets/img/img/r-3.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Diversión y Aventuras al Aire Libre</h2>
                        <p>Sumérgete en la naturaleza y disfruta de una emocionante jornada llena de actividades al aire libre en Los Flores. Nuestro parque cuenta con un área de juegos rústicos donde podrás encontrar columpios, toboganes y balancines construidos de manera artesanal, rodeados de un exuberante bosque que te conecta con la esencia de la naturaleza.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contactanos</h2>
                    <div class="line-shape"></div>
                    <p>En Los Flores, estamos comprometidos con ofrecerte la mejor experiencia posible. Si tienes alguna pregunta, necesitas asistencia o simplemente deseas saber más sobre nuestros servicios y cómo podemos ayudarte a mejorar la gestión de tu finca, no dudes en ponerte en contacto con nosotros. ¡Nos encantaría escucharte!</p>
                </div>
            </div>
        </div>
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <label for="exampleInputUsername">Tu nombre</label>
                            <input type="text" class="form-control" id="" placeholder=" Ingresa tu nombre">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Correo Electronico</label>
                            <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Ingresa tu correo">
                        </div>	
                        <div class="form-group">
                            <label for="telephone">Numero de celular</label>
                            <input type="tel" class="form-control" id="telephone" placeholder=" Digita tu numero">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for ="description">Mensaje</label>
                            <textarea  class="form-control" id="description" placeholder="Ingresa tu mensaje"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Mandar Mensaje</button>
                    </div>        
                </div>
            </form>
        </div>
    </section>
    <br>
        <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="https://github.com/AlejandroCori/FINCASDB">
                    <i class="fab fa-github"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; Your Website 2024</p>
        </div>
    </footer>
    <br>
</body>
</html>