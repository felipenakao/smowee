@extends ('blog.master')

@section ('blog-content')
  <div class="blog-content">
    <div class="news-recents">
      <a href="single.html">
      <div class="news-img  " style="background-image: url('/img/news/recents/recents-1.jpg')">
        <div id="news-cat-1" class="news-cat">Saúde</div>
      </div>

      <div class="news-caption hvr-bounce-to-top">
        <h4>Título da Postagem</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non ligula id purus iaculis congue. Cras vitae ultrices velit, non scelerisque nibh. Suspendisse facilisis massa dolor, sit amet tincidunt est pretium eget.</p>
      </div>
      </a>
    </div>

    <div class="news-recents">
      <div class="news-img" style="background-image: url('/img/news/recents/recents-2.jpg')">
        <div id="news-cat-3" class="news-cat">
          Tecnologia
        </div>
      </div>
      <div class="news-caption">
        <h4>Título da Postagem</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non ligula id purus iaculis congue. Cras vitae ultrices velit, non scelerisque nibh. Suspendisse facilisis massa dolor, sit amet tincidunt est pretium eget.
        </p>
      </div>
    </div>

    <div class="news-recents">
      <div class="news-img" style="background-image: url('/img/news/recents/recents-3.jpg')">
        <div id="news-cat-2" class="news-cat">
          Cotidiano
        </div>

      </div>
      <div class="news-caption">
        <h4>Título da Postagem</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non ligula id purus iaculis congue. Cras vitae ultrices velit, non scelerisque nibh. Suspendisse facilisis massa dolor, sit amet tincidunt est pretium eget.
        </p>
      </div>
    </div>

      <div class="news-recents">
        <div class="news-img" style="background-image: url('/img/news/recents/recents-4.jpg')">
          <div id="news-cat-4" class="news-cat">
            Economia
          </div>
        </div>
        <div class="news-caption">
            <h4>Título da Postagem</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non ligula id purus iaculis congue. Cras vitae ultrices velit, non scelerisque nibh. Suspendisse facilisis massa dolor, sit amet tincidunt est pretium eget.
            </p>
        </div>
      </div>

      <div class="news-recents">
        <div class="news-img" style="background-image: url('/img/news/recents/recents-5.jpg')">
          <div id="news-cat-1" class="news-cat">
            Saúde
          </div>
        </div>
        <div class="news-caption ">
            <h4>Título da Postagem</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non ligula id purus iaculis congue. Cras vitae ultrices velit, non scelerisque nibh. Suspendisse facilisis massa dolor, sit amet tincidunt est pretium eget.
            </p>
        </div>
      </div>

      <div class="news-recents">
        <div class="news-img" style="background-image: url('/img/news/recents/recents-6.jpg')">
          <div id="news-cat-4" class="news-cat">
            Economia
          </div>
        </div>
        <div class="news-caption">
            <h4>Título da Postagem</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non ligula id purus iaculis congue. Cras vitae ultrices velit, non scelerisque nibh. Suspendisse facilisis massa dolor, sit amet tincidunt est pretium eget.
            </p>
        </div>
      </div>

      <div class="news-recents">
        <div class="news-img" style="background-image: url('/img/news/recents/recents-7.jpg')">
          <div id="news-cat-3" class="news-cat">
            Tecnologia
          </div>
        </div>
        <div class="news-caption">
            <h4>Título da Postagem</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non ligula id purus iaculis congue. Cras vitae ultrices velit, non scelerisque nibh. Suspendisse facilisis massa dolor, sit amet tincidunt est pretium eget.
            </p>
        </div>
      </div>

      <ul id="blog-navigation">
        <div class="blog-navigation-newer"><< Página anterior</div>
        <li class="blog-navigation-pages">1</li>
        <li class="blog-navigation-pages">2</li>
        <li class="blog-navigation-pages">3</li>
        <div class="blog-navigation-older">Próxima página >></div>
      </ul>
  </div>
@endsection