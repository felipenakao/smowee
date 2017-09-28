@inject('Str', 'Illuminate\Support\Str')
@extends ('blog.master')

@section ('blog-content')
  <div class="blog-content">

    @foreach ($posts as $post)
      <div class="news-recents">
        <a href="/blog/{{ $post->slug }}">
        <div class="news-img  " style="background-image: url('{{ $post->cover }}')">
          <div id="news-cat-1" class="news-cat" style="background-color: {{ $post->category_color }}">
            {{ $post->category_name }}
          </div>
          <div class="blog-meta">
            <div class="blog-views">
              <img width="24px" src="/img/blog/views.png" />
              <span class="blog-likes-count">300</span>
            </div>
            {{-- <div class="blog-comments">
              <img width="24px" src="/img/blog/comments.png" />
              <span class="blog-likes-count">3</span>
            </div>
            <div class="blog-likes">
              <img width="24px" src="/img/blog/likes.png" />
              <span class="blog-likes-count">77</span>
            </div> --}}
          </div>
        </div>

        <div class="news-caption">
          <h4>{{ $post->title}}</h4>
          <p>
            {{ $Str::limit($post->content, 250)}}
          </p>
        </div>
        </a>
      </div>
    @endforeach

      <ul id="blog-navigation">
        <div class="blog-navigation-newer"><< Página anterior</div>
        <li class="blog-navigation-pages">1</li>
        <li class="blog-navigation-pages">2</li>
        <li class="blog-navigation-pages">3</li>
        <div class="blog-navigation-older">Próxima página >></div>
      </ul>
  </div>
@endsection
