@extends ('admin.master')
{{-- TITULO; IMAGEM CAPA; CATEGORIA; TAG; CONTEUDO--}}
@section ('content')
  <h4>Editar Matéria</h4>
  <form method="post" action="{{action('PostController@update', $post->id)}}">
    {{csrf_field()}}
    <input name="_method" type="hidden" value="PATCH">
    {{--<div class="form-group">
      <label for="title">Título</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Título" value="{{ $post->title }}"/>
    </div>--}}

    <div class="form-group">
      <label for="cover">Informe o link para a imagem de capa</label>
      <input type="text" class="form-control" id="image-cover" name="cover" placeholder="Link imagem capa" value="{{ $post->cover }}"/>
    </div>

    <div class="form-group">
      <label for="category">Categoria</label>
      <!-- <input class="form-control" id="category" name="category_id" type="text" placeholder="Categoria" /> -->
      <select name="category_id" id="category">
        @foreach ($categories as $category)
        <option 
          value="{{$category->id}}"
          @if ($category->id == $post->category_id)
          selected
          @endif
        >
          {{$category->name}}
        </option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="tags">Tags</label>
      <input class="form-control" id="tags" name="tags" type="text" placeholder="Tags" value="{{ $post->tags }}"/>
    </div>

    {{--<div class="form-group">
      <label for="publish-date">Data de publição</label>
      <input class="form-control" id="publish-date" name="publish_date" type="date" placeholder="Tags" value="{{ \Carbon\Carbon::parse($post->publish_date)->format('d/m/Y') }}" />
    </div>--}}

    <div class="form-group">
      <label for="content">Resumo</label>
      <textarea class="form-control" name="abstract" placeholder="Resumo" rows="5">
        {{ $post->abstract }}
      </textarea>
    </div>

    <div class="form-group">
      <label for="content">Conteúdo</label>
      <textarea class="form-control" name="content" id="post-content" placeholder="Conteúdo" rows="10">
        {{ $post->content }}
      </textarea>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
  </form>
@endsection