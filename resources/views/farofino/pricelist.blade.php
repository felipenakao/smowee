@extends ('farofino.master')

@section ('farofino-content')
  <div class="row">
    <div id="farofino-banner"></div>
  </div>

  <div class="crawler_wrapper_list">
    <h2>CATEGORIA - ISQUEIROS</h2>
    <div class="crawler_side_list">
      <div class="crawler_side_title">Filtrar por:</div>
      <div class="crawler_side_filter">
        <p>Filtrar por Preço:</p>
        <select>
          <option value="">Menor preço</option>
          <option value="">Maior preço</option>
        </select>
      </div>

      <div class="crawler_side_filter">
        <p>Filtrar por Marca:</p>
        <p><input type="checkbox" />Nome da Marca</p>
        <p><input type="checkbox" />Nome da Marca</p>
        <p><input type="checkbox" />Nome da Marca</p>
        <p><input type="checkbox" />Nome da Marca</p>
        <p><input type="checkbox" />Nome da Marca</p>
      </div>

      <div class="crawler_side_filter">
        <p>Filtrar por Loja:</p>
        <p><input type="checkbox"/>Nome da Loja</p>
        <p><input type="checkbox"/>Nome da Loja</p>
        <p><input type="checkbox"/>Nome da Loja</p>
        <p><input type="checkbox"/>Nome da Loja</p>
        <p><input type="checkbox"/>Nome da Loja</p>
      </div>
    </div>

    <div class="crawler_content_list">
      <div class="crawler_produto_list">
        <img class="crawler_produto_list_img" src="/img/crawler/isqueiro.jpg" />
        <div class="crawler_produto_list_caption">
          <h4>Nome do Isqueiro - NOME DA LOJA</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit.</p>
        </div>
        <div class="crawler_produto_list_go">
          <p class="price">R$50,00</p>
          <div class="button_loja">Ir para a loja</div>
        </div>
      </div>

      <div class="crawler_produto_list">
        <img class="crawler_produto_list_img" src="/img/crawler/isqueiro.jpg" />
        <div class="crawler_produto_list_caption">
          <h4>Nome do Isqueiro - NOME DA LOJA</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit.</p>
        </div>
        <div class="crawler_produto_list_go">
          <p class="price">R$50,00</p>
          <div class="button_loja">Ir para a loja</div>
        </div>
      </div>

      <div class="crawler_produto_list">
        <img class="crawler_produto_list_img" src="/img/crawler/isqueiro.jpg" />
        <div class="crawler_produto_list_caption">
          <h4>Nome do Isqueiro - NOME DA LOJA</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit.</p>
        </div>
        <div class="crawler_produto_list_go">
          <p class="price">R$50,00</p>
          <div class="button_loja">Ir para a loja</div>
        </div>
      </div>

      <div class="crawler_produto_list">
        <img class="crawler_produto_list_img" src="/img/crawler/isqueiro.jpg" />
        <div class="crawler_produto_list_caption">
          <h4>Nome do Isqueiro - NOME DA LOJA</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit.</p>
        </div>
        <div class="crawler_produto_list_go">
          <p class="price">R$50,00</p>
          <div class="button_loja">Ir para a loja</div>
        </div>
      </div>

      <div class="crawler_produto_list">
        <img class="crawler_produto_list_img" src="/img/crawler/isqueiro.jpg" />
        <div class="crawler_produto_list_caption">
          <h4>Nome do Isqueiro - NOME DA LOJA</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet imperdiet velit.</p>
        </div>
        <div class="crawler_produto_list_go">
          <p class="price">R$50,00</p>
          <div class="button_loja">Ir para a loja</div>
        </div>
      </div>
    </div>
  </div>
@endsection
