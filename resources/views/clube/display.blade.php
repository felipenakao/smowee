@extends ('clube.master')

@section ('clube-content')
<div class="row">
  <div class="col-lg-12">
    <h2 class="section-heading ">CLUBE SMOWEE</h2>
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
          <a href="/sorteio">
            <div class="item active">
              <img src="img/clube/about/clube-slider-01.jpg" alt="Sorteio Smowee">
            </div>
          </a>
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
      <h3 class="section-heading ">Smoweer</h2>
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
          <!-- <button type="submit" class="btn btn-xl">Alterar Dados</button> -->
          <button type="submit" class="btn btn-xl">Sair</button>
        </div>
    </div>
  </div>

  <div class="row clube-de-beneficios-text">
    <h3>Bem vindo ao Clube de Benefícios Smowee!</h3>
    <p>
      Agora sim você é um Smoweer oficial e ficamos muito felizes por ter você junto conosco nessa empreitada pela descriminalização e/ou legalização da nossa planta.
    </p>
    <p>
      Esperamos fazer dessa experiência algo agradável e prazeroso e que a cada dia você se sinta melhor por fazer parte dessa comunidade.
    </p>
    <p>
      Use a hashtag <b class="yellow">#CBSMOWEE</b> no Instagram para ter a sua foto divulgada na nossa aérea exclusiva de assinantes.
    </p>
  </div>

  <div class="row clube-de-beneficios-buttons">
    <a href="/clube/tabacaria" class="portfolio-link">
      <div class="clube-de-beneficios-buttons-list col-md-3 col-sm-6">
        <img src="img/home-buttons/button-3.jpg" class="img-responsive" alt="">
        <div class="clube-de-beneficios-buttons-caption">
          <h4>Tabacaria em Casa (Kit Salva Noixxx)</h4>
          <p class="text-muted">O <b class="yellow">Kit Salva Noixxx</b> conta com produtos de tabacarias pensados em suprir suas necessidades mensais em acessórios, deixando você preocupado com o que realmente importa: <b>Relaxar e curtir a Brisa</b>. Nossa equipe em parceria com a <b class="yellow">Ultra420</b> está sempre atenta no mercado de acessórios buscando todo mês os melhores produtos e novidades no mercado para te entregar no conforto da sua casa. </p>
          <p class="yellow"><b class="yellow">A cada 02 meses um item surpresa será enviado junto com seu kit, e o melhor é de GRAÇA!</b></p>
        </div>
      </div>
      </a>

    <a href="#" class="portfolio-link">
      <div class="clube-de-beneficios-buttons-list col-md-3 col-sm-6">
        <img src="img/soon.png" class="img-responsive" alt="">
        <div class="clube-de-beneficios-buttons-caption">
          <h4>Turismo Canábico</h4>
          <p class="text-muted">Em parceria com umas das mais inovadoras plataformas de integração de turismo focada em viagens canábicas, o <b class="yellow">MiCasa420</b> vem com o foco e a missão de disponibilizar pacotes de turismo para países onde a Cannabis Sativa seja permitida com toda a segurança e comodidade que você espera. EM BREVE lançaremos essa novidade.</p>
        </div>
      </div>
    </a>

    <a href="#" class="portfolio-link">
      <div class="clube-de-beneficios-buttons-list col-md-3 col-sm-6">
        <img src="img/soon.png" class="img-responsive" alt="">
        <div class="clube-de-beneficios-buttons-caption">
          <h4>Auto-Cultivo</h4>
          <p class="text-muted">Aqui você encontrará o suporte necessário para começar ou melhorar sua experiência com o cultivo da planta. EM BREVE lançaremos essa novidade.</p>
        </div>
      </div>
    </a>

    <a href="#" class="portfolio-link">
      <div class="clube-de-beneficios-buttons-list col-md-3 col-sm-6">
        <img src="img/soon.png" class="img-responsive" alt="">
        <div class="clube-de-beneficios-buttons-caption">
          <h4>Cupons de Desconto</h4>
          <p class="text-muted">Aqui quem é Smoweer sempre tem descontos na hora que quiser nas melhores tabacarias e sites on-line, o mais difícil vai ser decidir aonde usar. EM BREVE lançaremos essa novidade.</p>
        </div>
      </div>
    </a>
  </div>
  <!-- Instagram -->
    <div class="row">
      <h3 style="text-align: center">#CBSMOWEE</h3>
      <div id="instafeed" class="instafeed-clube"></div>
    </div>
  </div>
  <!-- Instagram -->
</div>
@endsection
