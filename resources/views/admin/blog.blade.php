@extends ('admin.master')
{{-- TITULO; IMAGEM CAPA; CATEGORIA; TAG; CONTEUDO--}}
@section ('content')
  <h4>Inserir uma nova postagem</h4>
  <form>
    <div class="form-group">
      <label for="title">Título</label>
      <input type="text" class="form-control" id="title" placeholder="Título" />
    </div>

    <div class="form-group">
      <label for="cover">Escolha a imagem para capa</label>
      <input type="file" id="cover"></input>
    </div>

    <div class="form-group">
      <label for="category">Categoria</label>
      <input class="form-control" id="category" type="text" placeholder="Categoria" />
    </div>

    <div class="form-group">
      <label for="tags">Tags</label>
      <input class="form-control" id="category" type="text" placeholder="Tags" />
    </div>

    <div class="form-group">
      <label for="content">Conteúdo</label>
      <textarea class="form-control" placeholder="Conteúdo" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
  </form>
@endsection