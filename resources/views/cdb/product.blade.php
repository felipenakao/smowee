@extends ('cdb.master')

@section ('cdb-content')
<div class="row">
  <div class="col-lg-12">
    <h2 class="section-heading">KIT DO MÊS</h2>
  </div>
</div>
<div class="row clube-de-beneficios-grid">
  <div class="cdb-single">
    <div class="cdb-single-top">
      <div class="cdb-single-gallery">
        <link rel="stylesheet"  href="/css/lightslider.css"/>

        <ul id="content-slider" class="content-slider">
            <a href="#">
              <li>
                <img src="/img/cdb/kit-do-mes/kit-do-mes-01.png" />
              </li>
            </a>

            <a href="#">
              <li>
                <img src="/img/cdb/kit-do-mes/kit-do-mes-02.png" />
              </li>
            </a>

            <a href="#">
              <li>
                <img src="/img/cdb/kit-do-mes/kit-do-mes-01.png" />
              </li>
            </a>

            <a href="#">
              <li>
                <img src="/img/cdb/kit-do-mes/kit-do-mes-02.png" />
              </li>
            </a>

        </ul>

      </div>

    </div>

    <div class="cdb-single-bottom">
      <div class="cdb-single-text">
        <h3>Descrição</h3>
        <p>
          O Smowee em parceria com a <a href="#">Royal Puff</a>, vem com a proposta de melhorar a sua experiência com  produtos de tabacaria, entrega e maneira que você realiza a compra.

        </p>
        </div>
        <div class="cdb-single-text"><h3>Como funcionará?</h3>
        <p>
          Os assinantes irão receber, na porta de casa, uma caixa discreta e recheada com acessórios que ao abrir terá a sensação de todo mês ser presenteado, além de sempre contém um item surpresa.

        </p>
        <p>
          Obs: Esse serviço está disponível somente para a Cidade de São Paulo, por enquanto.

        </p></div>

          <div class="cdb-single-text">
            <h3>Contém:</h3>
            <ul>
              <li>
                <p>
                    3 Sedas King Size
                </p>

              </li>
              <li>
                <p>
                  1 pacote de piteiras (100 unidades)
                </p>

              </li>
              <li>
                <p>
                  1 Item Surpresa
                </p>

              </li>
              <li>
                <p>
                  1 Larica
                </p>

              </li>
              <li>
                <p>
                  Adesivos
                </p>

              </li>
            </ul>

          </div>




      <div class="cdb-single-steps">
        <h3>Passo a Passo</h3>
        <div class="cdb-single-steps-list">
<div style="background-color: #f7614a" id="number-1" class="steps-number">
<span><img src="/img/cdb/step-01.png" /></span>
</div>

<div class="steps-text">

  Cadastre-se no formulário ao lado preenchendo todos os dados corretamente.

</div>
        </div>

        <div class="cdb-single-steps-list">
          <div style="background-color: #10898b" id="number-2" class="steps-number">
          <span><img src="/img/cdb/step-02.png" /></span>
          </div>

<div class="steps-text">

  Assim que preencher tudo, clique em ENVIAR. Aguarde o e-mail com o link para a página de pagamento.
</div>
        </div>

        <div class="cdb-single-steps-list">
          <div style="background-color: #5c65c0" id="number-3" class="steps-number">
          <span><img src="/img/cdb/step-03.png" /></span>
          </div>

<div class="steps-text">

  PRONTO! Assim que finalizar sua compra, aguarde o produto chegar até sua casa.

</div>
        </div>






      </div>
    </div>




  </div>

  <div class="clube-de-beneficios-side">
    <div class="cdb-side-caption">
      <h3 class="section-heading ">Usuário</h2>
        <div class="cdb-user"><img width="26px" height="26px" src="/img/cdb/about/cdb-user.png" />
          <h4>Felipe Nakao</h4>
        </div>

        <div class="cdb-user"><img width="26px" height="26px" src="/img/cdb/about/cdb-email.png" />
          <h4>felipe_nakao@hotmail.com</h4>
        </div>

        <div class="cdb-user"><img width="26px" height="26px" src="/img/cdb/about/cdb-location.png" />
          <h4>São Paulo - SP</h4>
        </div>

        <div class="cdb-user"><img width="26px" height="26px" src="/img/cdb/about/cdb-phone.png" />
          <h4>(11) 99507-0544</h4>
        </div>

        <div class="cdb-exit">
          <button type="submit" class="btn btn-xl">Alterar Dados</button>
          <button type="submit" class="btn btn-xl">Sair</button>
        </div>
    </div>
    <div class="cdb-side-caption valor"><h3>
      Valor:
    </h3>
    <p class="yellow">
      R$ 50,00
    </p>
  </div>

    <div class="cdb-side-caption">
      <h3 class="section-heading ">Compre agora!</h2>
      <p>Adquira o <span class="yellow">Kit do Mês</span> se cadastrando abaixo:</p>
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
              <input type="text" class="form-control" placeholder="Cidade *" id="cidade" required data-validation-required-message="Por favor insira sua data de nascimento.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Data de Nascimento *" id="estado" required data-validation-required-message="Por favor insira sua data de nascimento.">
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
