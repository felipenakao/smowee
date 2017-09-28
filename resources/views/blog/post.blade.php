@extends ('blog.master')

@section ('blog-content')
  <div class="blog-content-single">
    <img style="object-fit:cover;" class="single-featured-image" src="{{ $post[0]->cover }}"/>
    <div class="blog-content-single-grid">
      <h4>{{ $post[0]->title }}</h4>

      <div class='blog-content-single-meta'>
        <span>Autor: {{ $post[0]->writer }}</span>
        <span>Data: {{ $post[0]->publish_date }}</span>
        <span>Categoria: {{ $post[0]->category_name }}</span>
        <span>Tags: {{ $post[0]->tags }}</span>
      </div>
      <div class='blog-content-single-meta' style="justify-content:space-between">
        <div class="blog-views">
          <img width="24px" src="/img/blog/views.png" />
          <span class="">Visualizações:</span>
          <span class="">{{ $post[0]->views }}</span>
        </div>

        {{-- <div class="blog-facebook">
          <img width="24px" src="/img/blog/blog-facebook.png" />
          <span class="">23</span>
          <span class="">Compartilhamentos</span>
          <button>Compartilhar</button>
        </div>

        <div class="blog-likes">
          <img width="24px" src="/img/blog/likes.png" />

          <span class="">77</span>
            <span class="">Curtidas neste post</span>
          <button>Curtir</button>
        </div> --}}


      </div>
      <p>
        {{ $post[0]->content }}
      </p>
    </div>
  </div>
@endsection
