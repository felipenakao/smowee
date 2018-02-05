@extends ('clube.master')

@section ('clube-content')
  <div class="row">
    <div class="col-lg-12">
      <h2 class="section-heading ">CLUBE SMOWEE</h2>
    </div>
  </div>
  <div class="row clube-de-beneficios-grid">
    <div class="clube-de-beneficios-about">
      <div class="clube-about-caption-full">
        <div class="clube-about-text">
          <h3 class="section-heading ">O que é?</h2>
            <p>O <b class="yellow">Clube Smowee</b> vem com a proposta de promover serviços para facilitar e melhorar a vida dos nossos amigos 420.</p>
            <p>Nosso foco não é só nos produtos mas também no seu bem-estar e lifestyle.</p>
        </div>
      </div>
      <div class="clube-about-bottom">
        <div class="clube-about-caption-block">
          <h3 class="section-heading ">Porque participar?</h2>
          <p>Através de parcerias estrategicamente selecionadas, nosso foco é promover experiências únicas para os nossos membros, desde produtos de tabacarias até viagens canábicas, tudo em um só lugar.</p><p>Além de todo mês concorrer a um <a class="yellow" href="/sorteio">sorteio exclusivo</a> para os Smoweers cadastrados.</p>
        </div>

        <div  class="clube-about-caption-block">
          <h3 class="section-heading ">O que eu ganho?</h2>
          <p>Além de todo mês concorrer a prêmios irados, nesse lançamento vamos disponibilizar o serviço de <b class="yellow">Tabacaria em Casa, Kit Salva Noixxx</b>, possibilitando os nossos membros comprarem Kits exclusivos desenvolvidos por nossa equipe para você ficar o mês inteiro sem se preocupar. Além de itens exclusivos que você só encontra aqui.</p>
          <p>
            <b class="yellow">E o melhor de tudo é que você NÃO PAGA NADA para se inscrever.</b>
          </p>
        </div>

        <div  class="clube-about-caption-block">
          <h3 class="section-heading">E as novidades?</h2>
          <p>Você acha que paramos por aqui? Em breve nós iremos apresentar mais serviços que estamos desenvolvendo, entre eles:</p>
          <p>· <b class="yellow">Turismo Canábico</b> (Focado em viagens e experiências – Em Breve Lançamento);</p>
          <p>· <b class="yellow">Auto-Cultivo</b> (Kit Agora Vai – Em Breve Lançamento);</p>
          <p>· <b class="yellow">Cupom de Descontos</b> (Lojas Físicas e On-line – Em Breve Lançamento;</p>
          <p>E para se manter atualizado das novidades você precisa estar cadastrado no Clube, onde contamos com um canal exclusivo para essa comunicação.</p>
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
          <p>Está esperando o quê para ser um novo membro e aproveitar já.</p>
          <p>
            <b>Não vai lesar e ficar de fora dessa nova marola que está vindo!</b>
          </p>
        <form name="sentMessage" id="cadastroclube" novalidate>
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
              <!-- <div class="form-group">
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
              </div> -->
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
