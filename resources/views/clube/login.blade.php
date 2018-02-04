@extends ('clube.master')

@section ('clube-content')
  <div class="row">
    <div class="col-lg-12">
      <h2 class="section-heading ">CLUBE DE BENEFÍCIOS</h2>
    </div>
  </div>
  <div class="row clube-de-beneficios-grid">
    <div class="clube-de-beneficios-about">
      <div class="clube-about-caption-full">
        <div class="clube-about-text">
          <h3 class="section-heading ">O que é?</h2>
          <p>O <b class="yellow">Smowee</b> acaba de lançar uma novidade para a cultura 420.</p>
          <p>É o <b class="yellow">Clube de Benefícios Smowee</b>, que nasce com a proposta de promover e mostrar todos os produtos, <b class="yellow">serviços</b> e <b class="yellow">benefícios</b> realmente especiais.</p>
        </div>
      </div>
      <div class="clube-about-bottom">
        <div class="clube-about-caption-block">
          <h3 class="section-heading ">Porque participar?</h2>
          <p>Através das parcerias realizadas, nosso foco é promover experiências únicas para os nossos membros, desde acessórios de tabacarias até viagens cannábicas, tudo em um só lugar.</p>
        </div>

        <div  class="clube-about-caption-block">
          <h3 class="section-heading ">O que eu ganho?</h2>
          <p>Nesse Lançamento já contamos com o serviço de <a class="yellow" href="#">Tabacaria em Casa</a> disponibilizando o <a class="yellow" href="#">Kit do Mês</a>, onde nossos <a class="yellow" href="#">membros</a> receberão mensalmente, através da contratação da assinatura, uma caixa com acessórios de tabacaria suficiente para passar o mês sem se preocupar e o mais importante: <span class="yellow">Sem sair de casa!</span></p>
        </div>

        <div  class="clube-about-caption-block">
          <h3 class="section-heading">E as novidades?</h2>
          <p>* Em breve disponibilizaremos os serviços de <b>Turismo Canábico</b>, <b>Jardinagem</b>, <b>Cupom de Desconto</b> e o <b>Sampling</b>. *</p>
        </div>
      </div>
    </div>

    <div class="clube-de-beneficios-side">
      <div class="clube-side-caption">
        <h3 class="section-heading ">Acessar</h3>
        <form action="{{ route('login') }}" method="POST"name="clube-login" id="clube-login" novalidate>
          {{ csrf_field() }}
          <div class="row">
            <div class="clube-de-beneficios-side-form-grid">
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="E-mail *" id="email" required data-validation-required-message="Por favor insira seu e-mail.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Senha *" id="password" required data-validation-required-message="Por favor insira sua senha.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button type="submit" class="btn btn-xl">Acessar</button>
            </div>
            <div class="col-lg-12 text-center esqueci">
              <a href="#">Esqueci minha senha</a>
            </div>
          </div>
        </form>
      </div>
      <div class="clube-side-caption">
        <h3 class="section-heading ">Cadastre-se agora!</h2>
        <p>Está esperando o quê para ser um novo <a class="yellow" href="#">membro</a> e aproveitar tudo isso?!</p>
        <p>Não vai <span class="yellow">lesar</span> e ficar de fora dessa nova marola que está vindo!</p>
        <form name="sentMessage" id="cadastroclube" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="clube-de-beneficios-side-form-grid">
              <div class="form-group">
                <label for="name">Nome *</label>
                <input name="name"type="text" class="form-control" placeholder="Nome *" id="name" required data-validation-required-message="Por favor insira seu nome.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label for="email">E-mail *</label>
                <input name="email" type="email" class="form-control" placeholder="E-mail *" id="email" required data-validation-required-message="Por favor insira seu e-mail.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label for="phone">Telefone *</label>
                <input name="telephone" type="tel" class="form-control" placeholder="Telefone *" id="phone" required data-validation-required-message="Por favor insira seu telefone.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label for="data">Data de Nascimento *</label>
                <input name="birth_day" type="date" class="form-control" placeholder="Data de Nascimento *" id="data" required data-validation-required-message="Por favor insira sua data de nascimento.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label for="cidade">Cidade *</label>
                <input name="city" type="text" class="form-control" placeholder="Cidade *" id="cidade" required data-validation-required-message="Por favor insira sua data de nascimento.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label for="cpf">CPF *</label>
                <input name="cpf" type="number" class="form-control" placeholder="CPF *" id="cpf" required data-validation-required-message="Por favor insira seu CPF.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label for="pasword">Senha *</label>
                <input name="password" type="password" class="form-control" placeholder="Senha *" id="password" required data-validation-required-message="Por favor insira sua senha.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label for="pasword-confirm">Repita sua Senha *</label>
                <input id="password-confirm"  name="password_confirmation" type="password" class="form-control" placeholder="Repita sua Senha *" required data-validation-required-message="Por favor insira sua senha novamente.">
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
