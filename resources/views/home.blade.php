@extends ('layout.master')

@section('content')
  <!-- Header -->
  <header>
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Smowee 4:20</div>

        <div class="intro-heading">Queimando Preconceitos</div>
      </div>
    </div>
  </header>
  <!-- Header -->
  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="about-bg">
          <div class="about-caption">
            <h2 class="section-heading">QUEM SOMOS</h2>
            <p>O Smowee é uma marca canábica brasileira, criada em 2015, cujo o objetivo é a conscientização e disseminação de informações sobre a planta Cannabis Sativa, utilizando e desenvolvendo tecnologia focada para o nosso público 420.</p>
            <p style="font-size:12pt" class="yellow">Você poderá nos ajudar a construir essa História.</p>
            <img class="mobile" width="100%" style="margin-bottom:10px" src="/img/about/about-bg.jpg" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About -->
  <!-- News -->
  <section id="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-heading">Blog Smowee</h2>
          <h3 class="section-subheading text-muted">Veja as postagens mais recentes do nosso blog.</h3>
        </div>
      </div>

      <div class="row">
        <div class="news-flex">
          <!-- LISTA OS POSTS MAIS VISTOS -->
          @foreach ($topPosts as $topPost)
            <!-- VERIFICA QUAL ITEM EH E COLOCA A DEVIDA MARCACAO -->
            @if ($i === 0)
              <!-- LINHA DE CIMA -->
              <div class="news-grid-middle">
                <div class="news-recents ">
                  <a href="/blog/{{ $topPost->slug }}">
                    <div class="news-img" style="background-image: url('{{ $topPost->cover }}')">
                    <div id="news-cat-1" class="news-cat" style="background-color: {{ $topPost->category_color }}">
                      {{ $topPost->category_name }}
                    </div>
                  </div>

                  <div class="news-caption">
                    <h4>{{ $topPost->title }}</h4>
                  </div>
                </a>
              </div>
            @elseif ($i === 1)
              <!-- SEGUNDA DA PRIMEIRA FILEIRA-->
              <div class="news-recents ">
                <a href="/blog/{{ $topPost->slug }}">
                  <div class="news-img" style="background-image: url('{{ $topPost->cover }}')">
                    <div id="news-cat-1" class="news-cat" style="background-color: {{ $topPost->category_color }}">
                      {{ $topPost->category_name }}
                    </div>
                  </div>

                  <div class="news-caption">
                    <h4>{{ $topPost->title }}</h4>
                  </div>
                </a>
              </div>
            @elseif ($i === 2)
              <!-- PRIMEIRA DA SEGUNDA FILEIRA -->
              <!-- FECHA A DIV DE CIMA -->
                </div>
              <!-- LINHA DE BAIXO -->
              <div class="news-grid-bottom">
                <div class="news-recents ">
                  <a href="/blog/{{ $topPost->slug }}">
                    <div class="news-img" style="background-image: url('{{ $topPost->cover }}')">
                    <div id="news-cat-1" class="news-cat" style="background-color: {{ $topPost->category_color }}">
                      {{ $topPost->category_name }}
                    </div>
                  </div>

                  <div class="news-caption">
                    <h4>{{ $topPost->title }}</h4>
                  </div>
                </a>
              </div>
            @elseif ($i === 3)
              <!-- SEGUNDA DA SEGUNDA FILEIRA-->
              <div class="news-recents ">
                <a href="/blog/{{ $topPost->slug }}">
                    <div class="news-img" style="background-image: url('{{ $topPost->cover }}')">
                      <div id="news-cat-1" class="news-cat" style="background-color: {{ $topPost->category_color }}">
                        {{ $topPost->category_name }}
                      </div>
                  </div>

                  <div class="news-caption">
                    <h4>{{ $topPost->title }}</h4>
                  </div>
                </a>
              </div>
             @elseif ($i === 4)
              <!-- TERCEIRA DA SEGUNDA FILEIRA-->
              <div class="news-recents ">
                <a href="/blog/{{ $topPost->slug }}">
                    <div class="news-img" style="background-image: url('{{ $topPost->cover }}')">
                      <div id="news-cat-1" class="news-cat" style="background-color: {{ $topPost->category_color }}">
                        {{ $topPost->category_name }}
                      </div>
                  </div>

                  <div class="news-caption">
                    <h4>{{ $topPost->title }}</h4>
                  </div>
                </a>
              </div>
            @else
              <!-- ULTIMA -->
                <div class="news-recents ">
                  <a href="/blog/{{ $topPost->slug }}">
                    <div class="news-img" style="background-image: url('{{ $topPost->cover }}')">
                    <div id="news-cat-1" class="news-cat" style="background-color: {{ $topPost->category_color }}">
                      {{ $topPost->category_name }}
                    </div>
                  </div>

                  <div class="news-caption">
                    <h4>{{ $topPost->title }}</h4>
                  </div>
                </a>
              </div>
            </div>
            @endif

            @php
              $i++
            @endphp
          @endforeach
      </div>
    </div>
  </section>
  <!-- News -->
  <!-- Botões Páginas -->
  <section id="home-buttons">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-heading ">Conheça nossas idéias</h2>
        </div>
      </div>

      <div class="row">


        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="/clube" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="smowee-icon"></div>
            </div>
            <img src="/img/clube/about/clube-about-01.jpg" class="img-responsive" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Clube Smowee</h4>
            <p class="text-muted">O Clube Smowee é um clube de benefícios voltado para o usuário do Mundo Cannábico, onde reunimos os melhores serviços relacionados a nossa comunidade em um só lugar. Através de parcerias selecionadas, nossa proposta é trazer um novo conceito e juntar a galera 420.</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="#" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="smowee-icon"></div>
            </div>
            <img src="/img/soon.png" class="img-responsive" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Faro Fino</h4>
            <p class="text-muted">O Faro Fino é um dos nossos projetos pioneiros em contribuição a nossa comunidade 420, um comparativo de preços das Tabacarias Online para que os nossos membros sempre encontrem a melhor oferta.</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="#" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="smowee-icon"></div>
            </div>
            <img src="/img/soon.png" class="img-responsive" alt="">
          </a>
          <div class="portfolio-caption">
              <h4>APP Smowee</h4>
              <p class="text-muted">O App Smowee terá um formato único no Brasil. A sua função será facilitar a vida de quem quer aproveitar ao máximo seu momento 420 (Lançamento Inicial em São Paulo).</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Botões Páginas -->
  <!-- Paralax -->
  <section id="paralax">
    <div class="row">
      <div class="paralax-bg" data-speed="15">
        <span>Acreditamos que um trabalho de conscientização é mais eficaz que a política de repreensão. Baseado em estudos realizados sobre a descriminalização e/ou legalização da Cannabis, pode se notar que o impacto social é de maioria positiva.</span>
      </div>
    </div>
  </section>
  <!-- Paralax -->
  <!-- Instagram -->
  <section id="instagram">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-heading">Instagram Smowee</h2>
        </div>
      </div>

      <div class="row">
        <div id="instafeed"></div>
      </div>
    </div>
  </section >
  <!-- Instagram -->
@endsection
