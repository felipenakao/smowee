@extends ('layout.master')

@section ('content')
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="ad-blog-header">ANÚNCIO</span>
          <h2 class="section-heading">Blog Smowee</h2>
          <h3 class="section-subheading text-muted">Veja as postagens mais recentes do nosso blog.</h3>
        </div>
      </div>

      <div class="row blog-wrapper">

        @yield('blog-content')

        <div class="sidebar">
          <ul>
            <h4>Categorias</h4>
            <li id="news-cat-sidebar-1">Saúde</li>
            <li id="news-cat-sidebar-2">Cotidiano</li>
            <li id="news-cat-sidebar-3">Tecnologia</li>
            <li id="news-cat-sidebar-4">Economia</li>
          </ul>

          <ul>
            <li style="width:auto; height:150px;background-color:yellowgreen;">ANÚNCIO</li>
          </ul>

          {{-- <ul class="flex-wrap">
            <h4>Arquivo</h4>
            <li>Janeiro</li>
            <li>Fevereiro</li>
            <li>Março</li>
            <li>Abril</li>
            <li>Maio</li>
            <li>Junho</li>
            <li>Julho</li>
          </ul>

          <ul>
            <li style="width:auto; height:300px;background-color:yellowgreen;">ANÚNCIO</li>
          </ul>

          <ul class="flex-wrap">
            <h4>Buscar por Tags</h4>
            <li>420</li>
            <li>Cannabis</li>
            <li>Medicina</li>
            <li>Bob Dylan</li>
            <li>Cultivadores</li>
            <li>Curiosidades</li>
            <li>Uruguai</li>
            <li>Ganjah</li>
            <li>Farmácias</li>
          </ul>
        </div> --}}
      </div>
    </div>
  </section>
@endsection