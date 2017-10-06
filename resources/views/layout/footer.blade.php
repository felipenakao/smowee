<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">CONTATO</h2>
                <h3 style="color:#fec503;" class="section-subheading text-muted">Entre em contato com a Smowee</h3>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nome *" id="name" required data-validation-required-message="Por favor insira seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="E-mail *" id="email" required data-validation-required-message="Por favor insira seu e-mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Telefone *" id="phone" required data-validation-required-message="Por favor insira o seu telefone.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Mensagem *" id="message" required data-validation-required-message="Por favor insira uma mensagem."></textarea>
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
      <div class="col-md-10 col-copyright">
        <img src="/img/logo-smowee-footer.png" />
        <span class="copyright">Copyright 2017 - Todos os direitos reservados ao Smowee. Conteúdo para maiores de 18 anos.</span>
        <span style="margin-left:10px"><a href="#">Mídia / Assessoria / Parcerias</a></span>

      </div>
      <div class="col-md-2">
        <ul class="list-inline social-buttons">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>

        </ul>

      </div>
    </div>
  </div>
</footer>

<!-- jQuery -->
<script type="text/javascript" src="/js/instafeed.js"></script>
<script type="text/javascript">
    var userFeed = new Instafeed({
        get: 'user',
        userId: '2243081801',
        accessToken: '2243081801.1677ed0.e516befc56e5453d9d23808306605e42'
    });
    userFeed.run();
</script>
<script src="/jquery/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.js"></script>
<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
<!-- Contact Form JavaScript -->
<script src="/js/jqBootstrapValidation.js"></script>
<script src="/js/contact_me.js"></script>
<!-- Theme JavaScript -->
<script src="/js/smowee.js"></script>

<script src="/js/lightslider.js"></script>

<script type="text/javascript">

  $(document).ready(function(){
    $("#content-slider").lightSlider({
      loop:true,
      keyPress:true,
      enableTouch:false,
      enableDrag:false,
      controls: true,
      pager: false,
    });
  });

  $('div.paralax-bg').each(function(){
    var $obj = $(this);

    $(window).scroll(function() {
      var yPos = -($(window).scrollTop() / $obj.data('speed'));
      var bgpos = '50% '+ yPos + 'px';
      $obj.css('background-position', bgpos );
    });
  });


</script>
