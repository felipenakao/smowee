@extends ('clube.master')

@section ('clube-content')
<div class="row">
  <div class="col-lg-12">
    <h2 class="section-heading ">CLUBE</h2>
  </div>
</div>

<div class="row clube-de-beneficios-grid">
  <div class="clube-de-beneficios-about">
    <div class="clube-slider">
      <div id="clube-carousel" class="carousel slide" data-ride="carousel">
        <!-- Slides -->
        <ol class="carousel-indicators">
          <li data-target="#clube-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#clube-carousel" data-slide-to="1"></li>
          <li data-target="#clube-carousel" data-slide-to="2"></li>
        </ol>
        <!-- Slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/clube/about/clube-slider-01.jpg" alt="Los Angeles">
          </div>

          <div class="item">
            <img src="img/clube/about/clube-slider-02.jpg" alt="Chicago">
          </div>

          <div class="item">
            <img src="img/clube/about/clube-slider-03.jpg" alt="New York">
          </div>
        </div>

        <a class="left carousel-control" href="#clube-carousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Anterior</span>
        </a>

        <a class="right carousel-control" href="#clube-carousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </div>
  </div>

  <div id="clube-login-side" class="clube-de-beneficios-side">
    <div id="clube-login-side-caption" class="clube-side-caption">
      <h3 class="section-heading ">Usuário</h2>
        <div class="clube-user"><img width="26px" height="26px" src="/img/clube/about/clube-user.png" />
          <h4>Felipe Nakao</h4>
        </div>

        <div class="clube-user"><img width="26px" height="26px" src="/img/clube/about/clube-email.png" />
          <h4>felipe_nakao@hotmail.com</h4>
        </div>

        <div class="clube-user"><img width="26px" height="26px" src="/img/clube/about/clube-location.png" />
          <h4>São Paulo - SP</h4>
        </div>

        <div class="clube-user"><img width="26px" height="26px" src="/img/clube/about/clube-phone.png" />
          <h4>(11) 99507-0544</h4>
        </div>

        <div class="clube-exit">
          <button type="submit" class="btn btn-xl">Alterar Dados</button>
          <a href="/logout" class="btn btn-xl">Sair</a>
        </div>
    </div>
  </div>

  <div class="row clube-de-beneficios-text">
    <h3>Bem vindo ao Clube de Benefícios Smowee!</h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu condimentum urna. Sed sit amet dui in ligula vehicula ultrices. Nunc dolor quam, pharetra at placerat at, lobortis ac nisl. Quisque commodo, massa eu pellentesque tempus, arcu eros pretium nisi, sed consequat ligula est eget tortor. Phasellus ipsum quam, ultrices eget velit sit amet, viverra rutrum ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis id odio rutrum, tempus urna at, vestibulum magna. Proin sit amet purus sed felis semper volutpat ut ut orci. Praesent pellentesque tincidunt felis, ut ultricies justo facilisis tempor. Nullam at accumsan augue. Nulla sed arcu et lorem dignissim malesuada vitae vitae erat.
    </p>
  </div>

  <div class="row clube-de-beneficios-buttons">
    <a href="tabacaria.html" class="portfolio-link" >
      <div class="clube-de-beneficios-buttons-list col-md-3 col-sm-6">
        <img src="img/home-buttons/button-3.jpg" class="img-responsive" alt="">
        <div class="clube-de-beneficios-buttons-caption">
          <h4>Tabacaria em Casa</h4>
          <p class="text-muted">O Smowee em parcerias com algumas marcas e fabricantes, iremos enviar produtos para vocês avaliarem e enviarem seu Feedback diretamente para a fabricante com a sua opinião.</p>
        </div>
      </div>
    </a>

    <a href="#" class="portfolio-link">
      <div class="clube-de-beneficios-buttons-list col-md-3 col-sm-6">
        <img src="img/soon.png" class="img-responsive" alt="">
        <div class="clube-de-beneficios-buttons-caption">
          <h4>Turismo Canábico</h4>
          <p class="text-muted">O Smowee em parcerias com uma plataforma de integração de turismo focada em viagens cannábicas, iremos disponibilizar pacotes de turismo para países que sejam permitidos com toda a segurança e comodidade da nossa parceira MiCasa420.</p>
        </div>
      </div>
    </a>

    <a href="#" class="portfolio-link">
      <div class="clube-de-beneficios-buttons-list col-md-3 col-sm-6">
        <img src="img/soon.png" class="img-responsive" alt="">
        <div class="clube-de-beneficios-buttons-caption">
          <h4>Auto-Cultivo</h4>
          <p class="text-muted">Aqui você encontrará o suporte necessário para começar ou melhor sua experiência com o cultivo da Planta, estamos fechando parcerias e Em Breve lançaremos essa novidade.</p>
        </div>
      </div>
    </a>

    <a href="#" class="portfolio-link">
      <div class="clube-de-beneficios-buttons-list col-md-3 col-sm-6">
        <img src="img/soon.png" class="img-responsive" alt="">
        <div class="clube-de-beneficios-buttons-caption">
          <h4>Cupons de Desconto</h4>
          <p class="text-muted">Aqui quem é Smoweer sempre tem desconto nas melhores tabacarias e sites on-line, estamos fechando parcerias e Em Breve lançaremos essa novidade.</p>
        </div>
      </div>
    </a>
  </div>
  <!-- Instagram -->
    <div class="row">
      <h3 style="text-align: center">#clubeSMOWEE</h3>
      <div id="instafeed" class="instafeed-clube"></div>
    </div>
  </div>
  <!-- Instagram -->
</div>
@endsection
