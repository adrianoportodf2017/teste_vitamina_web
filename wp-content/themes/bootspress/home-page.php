<?php
/**
 * Template Name: HOME-PAGE
 * Template Post Type: page
 */

get_header(); ?>

		
	<main>
            <div class="container text-align-center">
                <h3 class="titulo-home mt-5">HISTÓRIA DA DESJOYAUX,</h3>
                <h4 class="subtitulo-home">Piscinas para família desde 1966</h4>
                <div class="text-secondary text-center mt-3 p-2 text-section-1">
                    Em 1966, na França, Jean Desjoyaux construiu sua primeira piscina com a ideia de que a sua família pudesse aproveitar
                    momentos de alegria na própria casa. É com essa visão que a Desjoyaux começou a desenvolver a sua tecnologia própria, se tornando
                    sinônimo de qualidade, tecnologia e tranquilidade com a invenção de conceitos exclusivos que revolucionaram o mundo da piscina
                </div>
                <div class="container text-center my-3 mt-5 p-5">
                    <div class="row mx-auto my-auto justify-content-center align-itens-center">
                        <div id="recipeCarousel" class="carousel slide carousel-time" data-bs-ride="carousel">
                            <div class="carousel-inner w-100 timeline-inner" role="listbox">

                                <div class="carousel-item active carousel-item-time">
                                    <div class="col-md-6">
                                        <div class="card mt-3 border-0">
                                            <div class="time-linha" style=""></div>

                                            <div class="text-center pt-5 w-100" style="z-index: 99999;">
                                                <button class="btn btn-secondary  border-0 text-dark time-linha-text">
                                                    1966
                                                </button>
                                            </div>

                                            <div class="card-img border-0">
                                                <img src="<?php echo get_template_directory_uri()?>\assets/image/1966.jpg" class="img-fluid">
                                            </div>
                                            <div class="title-slide-home text-center w-100">Lorem ipsum dolor sitamet consectetur</div>
                                            <div class="subtitle-slide-home text-center">Lorem ipsum dolor sitamet consectetur</div>

                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item carousel-item-time">
                                    <div class="col-md-6">
                                        <div class="card mt-3 border-0">
                                            <div class="time-linha" style=""></div>

                                            <div class="text-center pt-5 w-100" style="z-index: 99999;">
                                                <button class="btn btn-secondary  border-0 text-dark time-linha-text">
                                                    1978
                                                </button>
                                            </div>

                                            <div class="card-img border-0">
                                                <img src="<?php echo get_template_directory_uri()?>\assets/image/1978.jpg" class="img-fluid">
                                            </div>
                                            <div class="title-slide-home text-center w-100">Lorem ipsum dolor sitamet consectetur</div>
                                            <div class="subtitle-slide-home text-center">Lorem ipsum dolor sitamet consectetur</div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <a class="carousel-control-prev  w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next  w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon t bg-dark" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="title-2 text-center w-100 m-5"> Juntos, tornamos a piscina dos seus sonhos realidade! </div>

            </div>

            <!-- Aqui você pode adicionar seu conteúdo -->
        </main>

        <!-- Carousel -->
        <section id="slide 2">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption d-flex align-items-start justify-content-center flex-column text-align-center" style=" position: absolute;  top:-300px">
                            <div class="container text-align-center">
                                <h3 class="titulo-home text-light">Por que a Desjoyaux,</h3>
                                <h4 class="subtitulo-home text-light">Bem-Vindos ao que há de mais moderno no mundo das piscinas!</h4>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri()?>\assets/image/slide1.jpg" alt="Los Angeles" class="d-block" style="width: 100%; ">
                        <div class="carousel-caption d-flex align-items-start justify-content-center flex-column text-light">
                            <h3 class="fs-1"> 1</h3>
                            <h3 class="">Líder Mundial em piscinas de concreto</h3>
                            <div class="text-light fs-5 text-justify" style=" text-align: justify; width: 80%;">
                                <p class="text-justify">
                                    Patentes internacionais, mais de 50 anos de experiência, 240.000 piscinas fabricadas e instaladas em todo o mundo, uma representação em 80 países,
                                    e a mais importante rede mundial de piscinas de concreto... Além dos números, é todo o compromisso de uma marca pioneira e líder no seu setor de mercado
                                    que irá escolher quando optar pela Desjoyaux. Porque uma piscina é para toda a vida, construa o seu próximo prazer assente sobre a solidez do grupo Desjoyaux.
                                </p>
                            </div>

                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-flex align-items-start justify-content-center flex-column text-align-center" style=" position: absolute;  top:-300px">
                            <div class="container text-align-center">
                                <h3 class="titulo-home text-light">Por que a Desjoyaux,</h3>
                                <h4 class="subtitulo-home text-light">Bem-Vindos ao que há de mais moderno no mundo das piscinas!</h4>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri()?>\assets/image/slide1.jpg" alt="Los Angeles" class="d-block" style="width: 100%; ">
                        <div class="carousel-caption d-flex align-items-start justify-content-center flex-column text-light">
                            <h3 class="fs-1"> 1</h3>
                            <h3 class="">Líder Mundial em piscinas de concreto</h3>
                            <div class="text-light fs-5 text-justify" style=" text-align: justify; width: 80%;">
                                <p class="text-justify">
                                    Patentes internacionais, mais de 50 anos de experiência, 240.000 piscinas fabricadas e instaladas em todo o mundo, uma representação em 80 países,
                                    e a mais importante rede mundial de piscinas de concreto... Além dos números, é todo o compromisso de uma marca pioneira e líder no seu setor de mercado
                                    que irá escolher quando optar pela Desjoyaux. Porque uma piscina é para toda a vida, construa o seu próximo prazer assente sobre a solidez do grupo Desjoyaux.
                                </p>
                            </div>

                        </div>

                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
        </section>


        <section id="sectiom-3">
            <div class="container mt-5 pt-5 bg-white text-muted text-center  ">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="text-center">
                            <p class=""> As piscinas tradicionais podem oferecer problemas como: Trincas, descolamento de pastilha, vazamentos na tubulação etc.
                                Por isso a nossa tecnologia sempre foi pautada para eliminar esses problemas. </p>

                            <p class=""> Pensando há mais de 50 anos em como construir a piscina dos seus sonhos sem dor de cabeça, a Desjoyaux desenvolveu
                                uma tecnologia exclusiva e patenteada, aprovada por mais de 240.000 clientes em 80 países. </p>

                            <div class="mt-5">

                                <button class="btn btn-primary p-2">VEJA OS DIFERENCIAIS</button>
                            </div>

                            <h4 class="title-2 m-5">Se o mundo inteiro escolhe a Desjoyaux, por que não fazer o mesmo?</h4>

                        </div>
                        <div class="col-sm-1"></div>

                    </div>
                </div>
        </section>

        <section id="section-4">
            <div class="container-fluid bg-light">

                <div class="container text-align-center p-5">
                    <h3 class="titulo-home text-dark">ÚLTIMAS Notícias</h3>
                    <h4 class="subtitulo-home text-dark">De 1966 até hoje, sempre oferecendo o que há de melhor!</h4>
                </div>
                <!-- Section: Images -->
                <section class="">
                    <div class="container text-align-center">
                        <div class="row">
                            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                    <img src="<?php echo get_template_directory_uri()?>\assets/image/noticias.jpg" class="w-100" />
                                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                                        <div class="mask text-muted text-center" style="background-color: rgba(251, 251, 251, 0.2);">Abertura de uma loja
                                            em Fortaleza</div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4 mb-lg-0">
                                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                    <img src="<?php echo get_template_directory_uri()?>\assets/image/noticias.jpg" class="w-100" />
                                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                                        <div class="mask text-muted text-center" style="background-color: rgba(251, 251, 251, 0.2);">Abertura de uma loja
                                            em Fortaleza</div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4 mb-lg-0">
                                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                    <img src="<?php echo get_template_directory_uri()?>\assets/image/noticias.jpg" class="w-100" />
                                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                                        <div class="mask text-muted text-center" style="background-color: rgba(251, 251, 251, 0.2);">Abertura de uma loja
                                            em Fortaleza</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-4 mb-lg-0">
                                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                    <img src="<?php echo get_template_directory_uri()?>\assets/image/noticias.jpg" class="w-100" />
                                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                                        <div class="mask text-muted text-center" style="background-color: rgba(251, 251, 251, 0.2);">Abertura de uma loja
                                            em Fortaleza</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section id="section-5">
            <div class="container-fluid bg-light mt-5 p-5" style="background-image: url('<?php echo get_template_directory_uri()?>\assets/image/fundo-section-4.jpg');   background-size: cover;
">
                <div class="row m-3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 ">
                        <h3 class="titulo-home text-light"> Venha fazer parte da
                            grande família Desjoyaux!
                        </h3>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-1"></div>
                    <div class="col-xl-5">
                        <div class="card mb-3  " style="max-width: 540px; border-radius: 30px;">
                            <div class="row g-0 ">
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri()?>\assets/image/fundo-card.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">É ARQUITETO OU ENGENHEIRO?</h5>
                                        <p class="card-text"><small class="text-muted">Entre em contato conosco e faça parte do programa MyDesjoyaux.
                                                Clique no botão abaixo.</small></p>
                                                <a href="<?php echo site_url()?>/index.php/contato" class="btn btn-primary p-2 m-3 fs-5"> CONTATO</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="card mb-3  " style="max-width: 540px; border-radius: 30px;">
                            <div class="row g-0 ">
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri()?>\assets/image/fundo-card.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">É ARQUITETO OU ENGENHEIRO?</h5>
                                        <p class="card-text"><small class="text-muted">Entre em contato conosco e faça parte do programa MyDesjoyaux.
                                                Clique no botão abaixo.</small></p>
                                                <a href="<?php echo site_url()?>/index.php/contato" class="btn btn-primary p-2 m-3 fs-5"> CONTATO</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>

                </div>
            </div>


            </div>


        </section>
	</main><!-- #primary -->

<?php
get_footer();
