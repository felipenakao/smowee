    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">CONTATO</h2>
                    <h3 class="section-subheading text-muted">Entre em contato com a Smowee</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nome *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="E-mail *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Telefone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mensagem *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer>
      <div class="container">
          <div class="row">

              <div class="col-md-7 col-copyright">
                  <img src="img/logo-smowee-footer.png" />
                <span class="copyright">Copyright 2017 - Todos os direitos reservados ao Smowee. Conteúdo para maiores de 18 anos.</span>

              </div>
              <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
              </div>
          </div>
      </div>
    </footer>

      <!-- jQuery -->
      <script type="text/javascript" src="js/instafeed.js"></script>
      <script src="vendor/jquery/jquery.min.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

      <!-- Plugin JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

      <!-- Contact Form JavaScript -->
      <script src="js/jqBootstrapValidation.js"></script>
      <script src="js/contact_me.js"></script>

      <!-- Theme JavaScript -->
      <script src="js/smowee.js"></script>
      <script>
        var userFeed = new Instafeed({
            get: 'user',
            sortBy: 'most-recent',
            userId: '2069783005',
            limit: 14,
            accessToken: '2069783005.aeeff59.b0693c4c7a6749bcabeecac8e1d96591'
        });
        userFeed.run();
      </script>

  </body>

</html>