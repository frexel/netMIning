<?php
require_once("./php/send-mail.php");

if (isset($_POST["mensaje"])) {
    sendEmail();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NET MINING | Expertos en Criptomonedas</title>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css" />

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/net-mining.css" />

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="152x152" href="icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
    <link rel="manifest" href="icons/site.webmanifest">
    <link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- captcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <nav class="
        navbar navbar-expand-lg navbar-light
        bg-light
        sticky-top
        max-vw-100
      " aria-label="Navbar" id="mainNav">
        <div class="container">
            <a class="navbar-brand" data-easing="easeInOutQuad" href="#"><img src="img/LogoFull.png" class="logo" alt="Net Mining" /></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsBtns" aria-controls="navbarsBtns" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarsBtns">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end w-100">
                    <li class="nav-item">
                        <a class="nav-link blue text-uppercase montserrat-light" onclick="closeNav()" href="#rig-minero">rig
                            minero</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link blue text-uppercase montserrat-light" onclick="closeNav()" href="#quienes-somos">quiénes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link blue text-uppercase montserrat-light" onclick="closeNav()" href="#contacto">contacto</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-100 nav-line position-absolute bottom-0 end-0"></div>
    </nav>
    <div class="container w-md-100">
        <section class="row">
            <div class="col-12 intro text-center">
                <h1 class="montserrat-bold white mb-3 text-shadow titulo text-uppercase">
                    Rigs de Minería
                </h1>
                <p class="white my-3 text-shadow somos-expertos">
                    Somos expertos en montaje y configuración<br class="d-none d-md-block"> de todo tipo de rigs de
                    minería de criptomonedas.
                </p>
                <a class="btn btn-primary btn-minery white mt-5" data-easing="easeInOutQuad" href="#contacto">Empezá a
                    minar</a>
            </div>
        </section>

        <section class="row py-md-5">
            <div class="card col-10 offset-1 col-md-4 offset-md-4 border-0 card-bg cardRig my-md-5 pb-3 pb-md-5" data-aos="fade-up">
                <img src="img/IconCripto.svg" class="iconCripto" alt="">

                <div class="card-body p-3">
                    <h5 class="card-title dark section-title text-center mb-3 mt-md-3 mb-md-5">¿Qué es una
                        criptomoneda?
                    </h5>
                    <p class="card-text justify-text">
                        La criptomoneda, también llamada moneda virtual o criptodivisa, es <strong>dinero
                            digital.</strong>
                    </p>
                    <p class="card-text justify-text">Las criptomonedas más conocidas son Bitcoin y Ether, pero se
                        continúan creando nuevas cripto-monedas. La gente <strong>podría
                            usar criptomonedas para hacer pagos rápidos y para evitar los cargos de
                            transacción.</strong>
                    </p>
                </div>

                <div id="rig-minero"></div>
            </div>
        </section>
        <section class="row my-5">
            <div class="col-10 offset-1 col-md-4 offset-md-2">
                <h2 class="section-title blue text-center my-4 text-sm-start">Rigs de minado <br class="d-none d-md-block"> de Criptomonedas</h2>
                <p class="text justify-text">Montamos rigs de minería a medida, sólo tienes que decirnos cuál es tu
                    presupuesto o la potencia de minado que
                    necesitas. También podemos ofrecerte equipos ya montados y listos para minar.</p>
                <p class="text justify-text">Trabajamos con los dos fabricantes predominantes en el mercado, AMD con sus
                    RX/580 RX serie 5000 / 6000 y Nvidia con sus
                    RTX serie 2000 / 3000.</p>
                <div class="mt-5 w-50 d-none d-block">
                    <img src="img/AMDNividia.png" class="img-fluid" alt="">
                </div>
                <div class="mt-4 w-100 d-md-none">
                    <img src="img/AMDNividia.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="d-none d-md-flex col-md-4 no-gutters justify-content-center align-items-center mx-5">
                <img src="img/Rig-de-mineria-amd-eclom.jpg" class="img-fluid" alt="">
            </div>
        </section>

        <div class="row">
            <div class="col-10 offset-1 col-md-4 offset-md-4 text-center">
                <a class="btn btn-primary btn-minery white my-5 blue-bg d-inline-block reserva-tu-rig" href="#contacto">Reservá tu rig de
                    minado</a>
                <hr class="w-50 mx-auto">
            </div>
        </div>

        <section class="row my-5 pt-md-5">
            <ul class="nav nav-pills mb-4 d-md-flex flex-md-column col-md-3 ms-md-3 justify-content-center order-md-last" id="pills-tab" role="tablist">
                <li class="nav-item mx-3" role="presentation">
                    <a class="bitcoins-tab active" id="pills-bitcoin-tab" data-bs-toggle="pill" data-bs-target="#pills-bitcoin" role="tab" aria-controls="pills-bitcoin" aria-selected="true">
                        <img src="img/IconBitcoin.svg" class="tabIcons">
                    </a>
                </li>
                <li class="nav-item mx-3 my-md-5" role="presentation">
                    <a class="bitcoins-tab" id="pills-chia-tab" data-bs-toggle="pill" data-bs-target="#pills-chia" role="tab" aria-controls="pills-chia" aria-selected="true">
                        <img src="img/IconChia.svg" class="tabIcons">
                    </a>
                </li>
                <li class="nav-item mx-3" role="presentation">
                    <a class="bitcoins-tab" id="pills-ether-tab" data-bs-toggle="pill" data-bs-target="#pills-ether" role="tab" aria-controls="pills-ether" aria-selected="true">
                        <img src="img/iconEther.svg" class="tabIcons">
                    </a>
                </li>
            </ul>

            <div class="col-10 offset-1 col-md-4 offset-md-4 card-bg charts">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-bitcoin" role="tabpanel" aria-labelledby="pills-bitcoin-tab">
                        <h3 class="montserrat-bold yellow text-center mb-4 text-uppercase">Bitcoin</h3>
                        <img src="img/progresoBitcoin.png" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="pills-chia" role="tabpanel" aria-labelledby="pills-chia-tab">
                        <h3 class="montserrat-bold green text-center mb-4 text-uppercase">Chia</h3>
                        <img src="img/progresoChia.png" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="pills-ether" role="tabpanel" aria-labelledby="pills-ether-tab">
                        <h3 class="montserrat-bold violet text-center mb-4 text-uppercase">Ether</h3>
                        <img src="img/progresoEther.png" class="img-fluid">
                    </div>
                </div>
            </div>

            <ul class="d-none " id="pills-tab" role="tablist">
                <li class="nav-item mx-3" role="presentation">
                    <a class="bitcoins-tab active" id="pills-bitcoin-tab" data-bs-toggle="pill" data-bs-target="#pills-bitcoin" role="tab" aria-controls="pills-bitcoin" aria-selected="true">
                        <img src="img/IconBitcoin.svg" class="tabIcons">
                    </a>
                </li>
                <li class="nav-item mx-3" role="presentation">
                    <a class="bitcoins-tab" id="pills-chia-tab" data-bs-toggle="pill" data-bs-target="#pills-chia" role="tab" aria-controls="pills-chia" aria-selected="true">
                        <img src="img/IconChia.svg" class="tabIcons">
                    </a>
                </li>
                <li class="nav-item mx-3" role="presentation">
                    <a class="bitcoins-tab" id="pills-ether-tab" data-bs-toggle="pill" data-bs-target="#pills-ether" role="tab" aria-controls="pills-ether" aria-selected="true">
                        <img src="img/iconEther.svg" class="tabIcons">
                    </a>
                </li>
            </ul>
        </section>

        <section class="row my-md-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 offset-1 col-md-4 offset-md-4">
                        <div class="w-100 d-flex justify-content-center">
                            <img src="img/ChiaHoja.png" class="chia-hoja mx-auto mt-md-0" alt="">
                        </div>
                        <h2 class="section-title green text-center mb-2 mt-2">Chia Coin</h2>
                        <p class="mb-5 text-center"><strong>La criptomoneda de la que tanto se habla</strong></p>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-10 offset-1 col-md-3 offset-md-0">
                        <h3 class="montserrat-bold green sub-title text-center my-4">¿Qué es?</h3>
                        <p class="mb-5 justify-text">
                            Al igual que el Bitcoin o Ehereum, Chia Coin es una criptomoneda más, pero tiene su
                            particularidad.
                            <strong> Para minarla no
                                se necesitan placas de video,</strong> sino que todo el trabajo está en las
                            <strong>unidades de
                                almacenamiento (HDD).</strong>
                        </p>
                    </div>
                    <div class="col-10 offset-1 col-md-3 offset-md-0 ms-md-4">
                        <h3 class="montserrat-bold green sub-title text-center my-4">¿Como minan?</h3>
                        <p class="mb-5 justify-text">
                            El minado de esta criptomoneda se completa almacenando. Lo más importante para minar Chia
                            Coin es la
                            capacidad y no
                            tanto el rendimiento. En simples palabras, de su capacidad depende la ganancia de los
                            mineros.
                        </p>
                    </div>
                    <div class="col-10 offset-1 col-md-3 offset-md-0 ms-md-4">
                        <h3 class="montserrat-bold green sub-title text-center my-4">Ventaja</h3>
                        <p class="mb-5 justify-text">
                            A diferencia de Ether o Bitcoin, Chia <strong>es más ecológico</strong> ya que las unidades
                            consumen <strong>mucha
                                menos
                                energía.</strong> A raíz de
                            todo esto es que se está produciendo una escasez de discos SSD y HDD de gran capacidad.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <div class="row no-gutters chia-separador d-flex flex-column justify-content-center">
            <h2 class="section-title text-center white">Consultanos por <br>Rig de CHIA COIN</h2>
            <div id="quienes-somos"></div>
        </div>

        <div class="row">
            <div class="col-10 offset-1 col-md-2 offset-md-5 mb-md-3 mt-md-5 ">
                <div class="w-100 d-flex justify-content-center">
                    <img src="img/LogoFull.png" class="chia-hoja mx-auto mt-md-0" alt="">
                </div>
            </div>
        </div>
        <section class="row mb-md-4">
            <div class="col-10 offset-1">
                <h2 class="section-title text-center mb-5 mt-2">¿Quienes somos?</h2>
                <p class="mb-3 sm-justify-text text-md-center">Somos una empresa apasionada por el mundo de la
                    criptomineria.</p>
                <p class="mb-3 sm-justify-text text-md-center">Siendo parte de <strong>NET LA PLATA</strong> contamos
                    con
                    más de 15 años
                    de experiencia en el sector de soluciones informáticas.</p>
                <p class="mb-3 sm-justify-text text-md-center">Hoy somos líderes en la Ciudad, contando con un
                    laboratorio
                    integrado por
                    expertos altamente calificados.</p>
                <p class="mb-3 sm-justify-text text-md-center">Nuestra meta es brindar asesoramiento y soluciones de
                    forma
                    integral,
                    apostando a la innovación, la confianza y la
                    calidad del servicio.</p>
            </div>
        </section>

        <section class="row d-md-flex justify-content-md-center mb-md-5 pb-md-5">
            <div class="col-10 offset-1 p-0 col-md-3 offset-md-0">
                <div class="card border-0 card-bg px-2 py-3 quienes-somos-card my-4">
                    <div class="w-100 d-flex justify-content-center ">
                        <img src="img/iconAsesoramiento.svg" class="qs-icon mx-auto mt-md-0" alt="">
                    </div>
                    <h3 class="sub-title text-center montserrat-bold text-uppercase">Asesoramiento personalizado</h3>
                    <p class="text-center">
                        Cada cliente requiere de nuestra atencion y enfoque para llevar adelante su proyectos en la
                        criptomeria.
                    </p>
                </div>
            </div>
            <div class="col-10 offset-1 p-0 col-md-3 offset-md-0 ms-md-4">
                <div class="card border-0 card-bg px-2 py-3 quienes-somos-card my-4">
                    <div class="w-100 d-flex justify-content-center ">
                        <img src="img/iconServicio.svg" class="qs-icon mx-auto mt-md-0" alt="">
                    </div>
                    <h3 class="sub-title text-center montserrat-bold text-uppercase">SERVICIO TÉCNICO</h3>
                    <p class="text-center">
                        Contamos con especialistas altamente calificados para trabajar bajo misión crítica.
                    </p>
                </div>
            </div>
            <div class="col-10 offset-1 p-0 col-md-3 offset-md-0 ms-md-4">
                <div class="card border-0 card-bg px-2 py-3 quienes-somos-card my-4">
                    <div class="w-100 d-flex justify-content-center ">
                        <img src="img/iconGarantia.svg" class="qs-icon mx-auto mt-md-0" alt="">
                    </div>
                    <h3 class="sub-title text-center montserrat-bold text-uppercase">GARANTÍA</h3>
                    <p class="text-center">
                        Todos nuestros equipos están certificados, garantizando así, un producto final de excelencia.
                    </p>
                    <div id="contacto"></div>
                </div>
            </div>
        </section>

        <!-- FORM -->
        <section class="row my-5 pb-2">
            <div class="col-10 offset-1">
                <h2 class="section-title text-center mt-2">TENEMOS OPCIONES DE RIG MINERO<br class="d-none d-md-block">
                    EN STOCK Y A MEDIDA</h2>
                <p class="my-4 text-center">
                    Dejanos tu consulta
                </p>

                <?php
                if ($_Envio == "ok") {
                    echo '<div class="alert alert-success" role="alert" style="max-width: 70%; margin: 0 auto;"> Hemos enviado tu mensaje con éxito! </div>';
                }
                ?>

                <?php
                if ($_Recaptcha == "fail") {
                    echo '<div class="alert alert-danger" role="alert" style="max-width: 70%; margin: 0 auto;"> Ha fallado la comprobación anti-spam, vuelva a intentar </div>';
                }
                ?>

                <form class="text-center mt-5" action="#contacto" method="POST">
                    <div class="form-group mb-3 row d-flex justify-content-center">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-10 col-lg-5">
                            <input id="nombre" name="nombre" placeholder="Nombre y Apellido" type="text" required="required" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group mb-3 row d-flex justify-content-center">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-10 col-lg-5">
                            <input id="email" name="email" placeholder="e-mail" type="text" required="required" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group mb-3 row d-flex justify-content-center">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-10 col-lg-5">
                            <input id="asunto" name="asunto" placeholder="Asunto" type="text" required="required" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group mb-3 row d-flex justify-content-center">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-10 col-lg-5">
                            <textarea id="mensaje" name="mensaje" placeholder="Mensaje (máximo 250 caracteres)" type="text" required="required" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="g-recaptcha d-flex justify-content-center" data-sitekey="6LeFoVobAAAAAPJCm7eiidChrmmbXc_bkrHOVlV8"></div>
                    </div>
                    <div class="form-group mb-3" style="margin-top: 9vh">
                        <button name="submit" type="submit" class="btn btn-primary btn-minery white blue-bg" style="margin: 0 auto">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <footer class="row grey-bg mt-5 py-4">
            <div class="col-10 offset-1">
                <h2 class="section-title text-center my-4 my-md-5">Datos de contacto</h2>
                <div class="container d-md-flex justify-content-md-around">
                    <div class="row col-md-3">
                        <div class="col-2 offset-1 d-flex justify-content-center">
                            <span><i class="footer-icon fas fa-map-marker-alt"></i></span>
                        </div>
                        <div class="col-9 col-md-9">
                            <h3 class="footer-sub-title montserrat-bold text-uppercase mb-0">Dirección</h3>
                            <p>48 #928 - Ofi 2D - La
                                Plata</p>
                        </div>
                    </div>
                    <div class="row col-md-3">
                        <div class="col-2 offset-1 d-flex justify-content-center">
                            <span><i class="footer-icon fas fa-clock"></i></span>
                        </div>
                        <div class="col-9 col-md-9">
                            <h3 class="footer-sub-title montserrat-bold text-uppercase mb-0">Horario</h3>
                            <p>L a V de 9:00 a 17:00hs</p>
                        </div>
                    </div>
                    <div class="row col-md-3">
                        <div class="col-2 offset-1 d-flex justify-content-center">
                            <span><i class="footer-icon fab fa-whatsapp"></i></span>
                        </div>
                        <div class="col-9 col-md-9">
                            <h3 class="footer-sub-title montserrat-bold text-uppercase mb-0">Teléfono</h3>
                            <p>011 2875-1051</p>
                        </div>
                    </div>
                    <div class="row col-md-3">
                        <div class="col-2 offset-1 d-flex justify-content-center">
                            <span><i class="footer-icon fas fa-envelope"></i></span>
                        </div>
                        <div class="col-9 col-md-9">
                            <h3 class="footer-sub-title montserrat-bold text-uppercase mb-0">Email</h3>
                            <p>info@netmining.ar</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="d-none d-md-flex row dark-bg py-3">
            <div class="offset-1 col-5 d-flex flex-row justifycontent-center align-items-center">
                <div class="col-2 d-flex justify-content-center">
                    <a class="navbar-brand" href="#"><img src="img/LogoFull.png" class="footerLogo" alt="Net Mining" /></a>
                </div>
                <div>
                    <p class="white mb-0 rights">© Net Mining Arg 2021</p>
                    <p class="white rights mb-0">Todos los derechos reservados</p>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <a class="white social-links w-auto" href="https://www.facebook.com/NET-Mining-102557972077532/https://www.facebook.com/NET-Mining-102557972077532/"><i class="fab fa-facebook-f"></i></a>
                <a class="white social-links-instagram w-auto" href="https://www.instagram.com/netminingarg/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="row d-md-none flex-column justify-contente-center dark-bg py-3 text-center">
            <a class="navbar-brand mt-3" href="#"><img src="img/LogoFull.png" class="footerLogo" alt="Net Mining" /></a>

            <div class="d-flex flex-row justify-content-center my-3">
                <a class="white social-links w-auto" href="https://www.facebook.com/NET-Mining-102557972077532/"><i class="fab fa-facebook-f"></i></a>
                <a class="white social-links-instagram w-auto ms-4" href="https://www.instagram.com/netminingarg/"><i class="fab fa-instagram"></i></a>
            </div>

            <p class="white mb-0 rights">© Net Mining Arg 2021</p>
            <p class="white rights">Todos los derechos reservados</p>
        </div>

        <div class="row dark-bg" style="min-height: 5vh;"></div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- ACA VA SCRIPT DE ELLOS -->
    <script>
        window.onload = function() {
            var ldk = document.createElement("script");
            ldk.type = "text/javascript";
            ldk.async = true;
            ldk.src =
                "https://s.cliengo.com/weboptimizer/5d2a59a7e4b0c3ac552278c7/60afcdaec9551a002a21eaa9.js?platform=onboarding_modular";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ldk, s);
        };
    </script>

    <script>
        let closeNav = function() {
            document.getElementById('navbarsBtns').classList.remove('show');
        }

        console.log(document)
    </script>
</body>

</html>