@extends ('clube.master')

@section ('clube-content')

<link rel="stylesheet"  href="/css/lightslider.css"/>

<div class="row">
  <div class="col-lg-12">
    <h2 class="section-heading">KIT SALVA NOIXXX</h2>
  </div>
</div>

<div class="row clube-de-beneficios-grid">
  <div class="clube-single">
    <div class="clube-single-top">
      <div class="clube-single-gallery">
        <ul id="content-slider" class="content-slider">
            <a href="#">
              <li>
                <img src="/img/clube/tabacaria/01.jpg" />
              </li>
            </a>
            <a href="#">
              <li>
                <img src="/img/clube/tabacaria/02.jpg" />
              </li>
            </a>
        </ul>
      </div>
    </div>

    <div class="clube-single-bottom">
      <div class="clube-single-text">
        <h3>Descrição</h3>
        <p class="text">O <b class="yellow">Kit Salva Noixxx</b> conta com produtos de tabacarias pensados em suprir suas necessidades mensais em acessórios, deixando você preocupado com o que realmente importa: <b>Relaxar e curtir a Brisa</b>. Nossa equipe em parceria com a <a target="_blank" href="http://www.ultra420.com.br">Ultra420</a> está sempre atenta no mercado de acessórios buscando todo mês os melhores produtos e novidades no mercado para te entregar no conforto da sua casa. </p>
        <p class="yellow"><b class="yellow">A cada 02 meses um item surpresa será enviado junto com seu kit, e o melhor é de GRAÇA!</b></p>
      </div>

      <div class="clube-single-text"><h3>Como funcionará?</h3>
        <p>Os Smoweers interessados irão receber na porta da sua casa, ou o local que preferir, uma caixa com os principais produtos de uso diário que todo “maconhista” tem que ter, assim você nunca mais deixará de aproveitar seu momento 420 com os amigos ou sozinho.</p>
        <p><b class="yellow">E pode ficar despreocupado que todo nosso serviço é realizado de maneira discreta e ágil.</b></p>
        <p>Obs: Esse serviço está disponível somente para a Cidade de São Paulo, por enquanto.</p>
      </div>

      <div class="clube-single-text">
        <h3>Contém:</h3>
        <ul>
          <li>
            <p>
              3 Sedas Slim Ultra420 Brown
            </p>
          </li>

          <li>
            <p>
              1 pct piteira (100 unid)
            </p>
          </li>

          <li>
            <p>
              1 Isqueiro pequeno
            </p>
          </li>
          <li>
            <p>
              1 Seda de Metro
            </p>
          </li>

          <li>
            <p>
              1 Cerveja Artesanal
            </p>
          </li>

          <li>
            <p>
              Adesivos
            </p>
          </li>

          <li>
            <p>
              Cupom de Desconto Loja Ultra420;
            </p>
          </li>
        </ul>

      </div>

      <div class="clube-single-steps">
        <h3>Passo a Passo</h3>
        <div class="clube-single-steps-list">
          <div style="background-color: #f7614a" id="number-1" class="steps-number">
            <span>
              <img src="/img/clube/step-01.png" />
            </span>
          </div>

          <div class="steps-text">Faça a sua solicitação através do nosso formulário preenchendo todos os dados corretamente.</div>
        </div>

        <div class="clube-single-steps-list">
          <div style="background-color: #10898b" id="number-2" class="steps-number">
            <span>
              <img src="/img/clube/step-02.png">
            </span>
          </div>

          <div class="steps-text">Assim que preencher, clique em ENVIAR. Depois é só aguardar o e-mail com o link de pagamento e as informações sobre planos e vantagens.</div>
        </div>

        <div class="clube-single-steps-list">
          <div style="background-color: #5c65c0" id="number-3" class="steps-number">
            <span>
              <img src="/img/clube/step-03.png" />
            </span>
          </div>

          <div class="steps-text">PRONTO! Após escolher as vantagens e finalizar sua compra, aguarde o produto chegar até sua casa.</div>
        </div>
      </div>
    </div>
  </div>

  <div class="clube-de-beneficios-side">
    <div id="clube-side-product" class="clube-side-caption">
      <h3 class="section-heading ">Usuário</h2>
        <div class="clube-user"><img width="26px" height="26px" src="/img/clube/about/clube-user.png" />
          <h4>Felipe Nakao</h4>
        </div>

        <div class="clube-user"><img width="26px" height="26px" src="/img/clube/about/clube-email.png" />
          <h4>felipe_nakao@hotmail.com</h4>
        </div>

        <div class="clube-user"><img width="26px" height="26px" src="/img/clube/about/clube-location.png" />
          <h4>São Paulo - SP</h4>
        </div>

        <div class="clube-user"><img width="26px" height="26px" src="/img/clube/about/clube-phone.png" />
          <h4>(11) 99507-0544</h4>
        </div>

        <div class="clube-exit">
          <a href="/logout" class="btn btn-xl">Sair</a>
        </div>
    </div>
    <div id="clube-side-product" class="clube-side-caption valor"><h3>
      Valor:
    </h3>
    <p class="yellow">
      R$ 50,00
    </p>
  </div>

    <div id="clube-side-product" class="clube-side-caption">
      <h3 class="section-heading ">Compre agora!</h2>
      <p>Adquira o <span class="yellow">Kit – Salva Noixxx</span> se cadastrando abaixo:</p>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="clube-de-beneficios-side-form-grid">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nome *" id="name" required data-validation-required-message="Por favor insira seu nome.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="E-mail *" id="email" required data-validation-required-message="Por favor insira seu e-mail.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" placeholder="Telefone *" id="phone" required data-validation-required-message="Por favor insira seu telefone.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="date" class="form-control" placeholder="Data de Nascimento *" id="data" required data-validation-required-message="Por favor insira sua data de nascimento.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Cidade *" id="cidade" required data-validation-required-message="Por favor insira sua cidade.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Estado *" id="estado" required data-validation-required-message="Por favor insira seu estado.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" placeholder="CPF *" id="cpf" required data-validation-required-message="Por favor insira seu CPF.">
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="col-lg-12 text-center">
            <div id="success"></div>
            <button type="submit" class="btn btn-xl">Cadastrar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
