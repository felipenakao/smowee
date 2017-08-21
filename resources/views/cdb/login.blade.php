@extends ('cdb.master')

@section ('cdb-content')
<div class="row">
  <div class="col-lg-12">
    <h2 class="section-heading ">CLUBE DE BENEFÍCIOS - ** Usuário Logado **</h2>
  </div>
</div>
<div class="row clube-de-beneficios-grid">
  <div class="clube-de-beneficios-about">

      <div class="cdb-slider">
        <div id="cdb-carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#cdb-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#cdb-carousel" data-slide-to="1"></li>
    <li data-target="#cdb-carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/cdb/about/cdb-slider-01.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="img/cdb/about/cdb-slider-02.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="img/cdb/about/cdb-slider-03.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#cdb-carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#cdb-carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

      </div>
  </div>

  <div class="clube-de-beneficios-side">
    <div class="cdb-side-caption">
      <h3 class="section-heading ">Usuário</h2>
        <div class="cdb-user"><img width="26px" height="26px" src="/img/cdb/about/cdb-user.png" />
          <h4>Felipe Nakao</h4>
        </div>

        <div class="cdb-user"><img width="26px" height="26px" src="/img/cdb/about/cdb-email.png" />
          <h4>felipe_nakao@hotmail.com</h4>
        </div>

        <div class="cdb-user"><img width="26px" height="26px" src="/img/cdb/about/cdb-location.png" />
          <h4>São Paulo - SP</h4>
        </div>

        <div class="cdb-user"><img width="26px" height="26px" src="/img/cdb/about/cdb-phone.png" />
          <h4>(11) 99507-0544</h4>
        </div>

        <div class="cdb-exit">
          <button type="submit" class="btn btn-xl">Alterar Dados</button>
          <button type="submit" class="btn btn-xl">Sair</button>
        </div>
    </div>
  </div>
  <div class="row clube-de-beneficios-buttons">
    <a href="tabacaria.html" class="portfolio-link" >
      <div class="clube-de-beneficios-buttons-list col-md-3 col-sm-6">
        <img src="img/home-buttons/button-1.jpg" class="img-responsive" alt="">
        <div class="clube-de-beneficios-buttons-caption">
          <h4>Kit do Mes</h4>
          <p class="text-muted">

O Smowee em parcerias com algumas marcas e fabricantes, iremos enviar produtos para vocês avaliarem e enviarem seu Feedback diretamente para a fabricante com a sua opinião.
             </p>
        </div>
      </div>
    </a>

    <a href="#" class="portfolio-link">
      <div class="clube-de-beneficios-buttons-list col-md-3 col-sm-6">
        <img src="img/home-buttons/button-2.jpg" class="img-responsive" alt="">
        <div class="clube-de-beneficios-buttons-caption">
          <h4>Turismo Cannabico</h4>
          <p class="text-muted">  O Smowee em parcerias com uma plataforma de integração de turismo focada em viagens cannábicas, iremos disponibilizar pacotes de turismo para países que sejam permitidos com toda a segurança e comodidade da nossa parceira MiCasa420.</p>
        </div>
      </div>
    </a>

    <a href="#" class="portfolio-link">
      <div class="clube-de-beneficios-buttons-list col-md-3 col-sm-6">
        <img src="img/soon.png" class="img-responsive" alt="">
        <div class="clube-de-beneficios-buttons-caption">
          <h4>Auto Cultivo</h4>
          <p class="text-muted">O Smowee em parcerias com uma plataforma de integração de turismo focada em viagens cannábicas, iremos disponibilizar pacotes de turismo para países que sejam permitidos com toda a segurança e comodidade da nossa parceira MiCasa420. </p>
        </div>
      </div>
    </a>

    <a href="#" class="portfolio-link">
      <div class="clube-de-beneficios-buttons-list col-md-3 col-sm-6">
        <img src="img/soon.png" class="img-responsive" alt="">
        <div class="clube-de-beneficios-buttons-caption">
          <h4>Cupons de Desconto</h4>
          <p class="text-muted">

O Smowee em parcerias com algumas marcas e tabacarias, iremos disponibilizar cupons de descontos para compras em sites on-lines ou lojas físicas.
           </p>
        </div>
      </div>
    </a>
  </div>
</div>
@endsection
