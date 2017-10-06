@extends ('farofino.master')

@section ('farofino-content')
  <div class="row">
    <div id="farofino-banner"></div>
  </div>

  <div class="crawler-text">
    <h2>Como Funciona?</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit. Sed vitae convallis dui. Nulla semper porttitor risus, sed ultrices felis feugiat sed. Vivamus ac faucibus ligula, in fringilla nisi. Nunc scelerisque nunc id dui feugiat, nec gravida ipsum fringilla. Maecenas vitae orci dapibus, efficitur odio a, dapibus turpis.</p>
  </div>
  <h3 class="section-subheading text-muted">Escolha uma das seçoes para filtrar produtos:</h3>

  <div class="crawler_wrapper">
    <div class="crawler_produto">
      <a href="/farofino/list/">
        <img class="crawler_produto_img" src="/img/crawler/isqueiro.jpg" />
        <h5 class="crawler_produto_title">Isqueiro</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit.</p>
      </a>
    </div>

    <div class="crawler_produto">
      <a href="#">
        <img class="crawler_produto_img" src="/img/crawler/filtros.jpg" />
        <h5 class="crawler_produto_title">Filtros</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit.</p>
      </a>
    </div>

    <div class="crawler_produto">
      <a href="#">
        <img class="crawler_produto_img" src="/img/crawler/bongs.jpg" />
        <h5 class="crawler_produto_title">Bongs</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit.</p>
      </a>
    </div>

    <div class="crawler_produto">
      <a href="#">
        <img class="crawler_produto_img" src="/img/crawler/trituradores.jpg" />
        <h5 class="crawler_produto_title">Trituradores</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit.</p>
      </a>
    </div>

    <div class="crawler_produto">
      <a href="#">
        <img class="crawler_produto_img" src="/img/crawler/blunt.jpg" />
        <h5 class="crawler_produto_title">Blunts</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit.</p>
      </a>
    </div>

    <div class="crawler_produto">
      <a href="#">
        <img class="crawler_produto_img" src="/img/crawler/sedas.jpg" />
        <h5 class="crawler_produto_title">Sedas</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit.</p>
      </a>
    </div>
  </div>
@endsection
