@extends ('admin.master')
{{-- TITULO; IMAGEM CAPA; CATEGORIA; TAG; CONTEUDO--}}
@section ('content')
  <h4>Inserir uma nova postagem</h4>
  <form method="post" action="{{url('posts')}}">
    {{csrf_field()}}
    <div class="form-group">
      <label for="title">Título</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Título" />
    </div>

    <div class="form-group">
      <label for="cover">Informe o link para a imagem de capa</label>
      <input type="text" class="form-control" id="image-cover" name="cover" placeholder="Link imagem capa" />
    </div>

    <div class="form-group">
      <label for="category">Categoria</label>
      <input class="form-control" id="category" name="category_id" type="text" placeholder="Categoria" />
    </div>

    <div class="form-group">
      <label for="tags">Tags</label>
      <input class="form-control" id="tags" name="tags" type="text" placeholder="Tags" />
    </div>

    <div class="form-group">
      <label for="publish-date">Data de publição</label>
      <input class="form-control" id="publish-date" name="publish_date" type="date" placeholder="Tags" />
    </div>

    <div class="form-group">
      <label for="content">Conteúdo</label>
      <textarea class="form-control" name="content" placeholder="Conteúdo" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
  </form>
@endsection