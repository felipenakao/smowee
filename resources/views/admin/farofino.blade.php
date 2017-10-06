@extends ('admin.master')
{{-- NOME PRODUTO; CATEGORIA; IMAGEM; MARCA; PRECO; DISCRICAO; --}}
@section ('content')
  <h4>Inserir um novo produto</h4>
  <form>
    <div class="form-group">
      <label for="product-name">Nome</label>
      <input type="text" class="form-control" id="product-name" placeholder="Nome do produto" />
    </div>

    <div class="form-group">
      <label for="category">Categoria</label>
      <select class="form-control" id="category">
        <option value="1">teste 1</option>
        <option value="2">teste 2</option>
      </select>
    </div>

    <div class="form-group">
      <label for="image">Selecione uma imagem</label>
      <input type="file" id="image" />
    </div>

    <div class="form-group">
      <label for="brand">Marca</label>
      <select class="form-control" id="brand">
        <option value="1">marca 1</option>
        <option value="2">marca 2</option>
      </select>
    </div>

    <div class="form-group">
      <label for="price">Preço</label>
      <div class="input-group">
        <div class="input-group-addon">$</div>
        <input class="form-control" id="price" placeholder="preço"></input>
      </div>
    </div>

    <div class="form-group">
      <label for="description">Descrição</label>
      <textarea class="form-control" placeholder="Descrição" id="description"></textarea>
    </div>

    <buttun class="btn btn-success" type="submit">Salvar</buttun>
  </form>
@endsection