<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootspress
 */

?>
		<?php if ( ! is_page_template( 'full-width-without-container.php' ) ): ?>
			</div><!-- .content-area .row -->
		</div><!-- .container -->
		<?php endif; ?>
	</div><!-- #content -->

	<footer class="bg-light">
            <div class="container-fluid bg-light" style="background-image: url('<?php echo get_template_directory_uri()?>/assets/image/fundo-footer.png'); background-size: auto; margin-top: -55px; ">
                <div class="row m-5 text-align-center justify-content-center align-item-center">
                    <div class="col-xl-12 p-2 text-center">
                        <img src="<?php echo get_template_directory_uri()?>/assets/image/logo.png" alt="Logo" class="m-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3 text-start">
                                    <h6 class="text-primary">A DESJOYAUX </h6>
                                    <div class="text-muted ">
                                        <p class="text-muted ">@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                    </div>

                                </div>
                                <div class="col-sm-3 text-start">
                                    <h6 class="text-primary">DIFERENCIAIS</h6>
                                    <div class="text-muted ">
                                        <p class="text-muted ">@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                    </div>

                                </div>
                                <div class="col-sm-3 text-start">
                                    <h6 class="text-primary">FALE COM A GENTE</h6>
                                    <div class="text-muted ">
                                        <p>+55 (11) 99876.5432</p>
                                        <h6 class="text-primary">E-MAIL</h6>
                                        <p>fale@desjoyaux.com</p>
                                        <h6 class="text-primary">ENDEREÇO</h6>
                                        <p>Av. Lorem Ipsum, 987 - Bairro</p>
                                        <button class="btn btn-primary p-2 m-2">SEJA UM FRANQUEADO</button>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-start">
                                    <h6 class="text-primary">REDES SOCIAIS</h6>
                                    <div class="text-muted ">
                                        <p class="text-muted ">@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                        <p>@Item</p>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <hr>
                        <small class="text-muted">
                            Este site usa cookies e dados pessoais de acordo com os nossos Termos de Uso e Política de Privacidade.
                        </small>
                        <h6 class="text-primary"> CONFIGURAÇÕES DE COOKIE</h6>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 text-start"><small>Desjoyaux |  Todos os Direitos Reservados</small></div>
                                <div class="col-sm-6 text-end"><small>DESENVOLVIMENTO: VITAMINA.WEB</small></div>

                            </div>
                </div>
            </div>
        </footer>





        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            let items = document.querySelectorAll('.carousel-time .carousel-item-time')
            items.forEach((el) => {
                const minPerSlide = 4
                let next = el.nextElementSibling
                for (var i = 1; i < minPerSlide; i++) {
                    if (!next) {
                        // wrap carousel by using first child
                        next = items[0]
                    }
                    let cloneChild = next.cloneNode(true)
                    el.appendChild(cloneChild.children[0])
                    next = next.nextElementSibling
                }
            })
        </script>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
