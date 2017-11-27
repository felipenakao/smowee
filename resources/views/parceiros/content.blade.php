@extends ('parceiros.master')

@section ('content')
  <section id="parceiros">
    <div class="container">
      <div class="row parceiros-flex">
        <div class="parceiros-text">
          <h2>Seja um Parceiro Smowee</h2>
          <br>
          <h3>Parcerias</h3>
          <p>
            Entender que ninguém cresce sozinho é um grande passo para o sucesso de qualquer empresa.
          </p>

          <p>
            Existem diversas maneiras de conduzir uma campanha de marketing digital. A marca pode dar início a publicações temáticas em suas redes sociais, pode organizar uma promoção ou concurso que premie o seu público. Outra maneira, em certos casos até muito mais eficiente, é associar o seu produto ou marca à influenciadores com grande audiência e capacidade de direcioná-los para os seus produtos.
          </p>

          <p>
            Uma boa parceria é sinal de ideias inovadoras, de credibilidade no negócio.
          </p>

          <p>
            Entre em contato conosco através do formulário e saiba mais como juntos poderemos fortalecer a comunidade 420.
          </p>

          <h3>Investidores</h3>
          <p>
            Investir em StartUps é uma excelente maneira de buscar retornos significativos para o seu portfólio, claro.
          </p>
          <p>
            Porém estamos procurando por pessoas que queiram, de alguma forma, fazer parte deste fascinante universo 420.
          </p>
          <p>
            Pessoas que nesse primeiro momento, não esteja tão preocupado com a rentabilidade, mas que queiram, na verdade, contribuir com o Smowee, apoiar o crescimento do ecossistema, estar perto e participar.
          </p>
          <br>
          <p>
            Hoje o Smowee conta com 03 projetos em seu escopo, com datas pré-definidas para início, sendo que um já está em desenvolvimento e validação no Mercado.
          </p>
          <p>São eles:</p>
          <ul>
            <li>Smowee Club: Em produção e validação;</li>
            <li>Faro Fino: Definir com o Caio;</li>
            <li>Aplicativo Smowee: Fevereiro ou Março / 2018;</li>
          </ul>
          <p>Entre em contato conosco através do formulário e saiba mais sobre os nossos projetos e oportunidades.</p>
        </div>

        <div class="parceiros-side">
          <h3 class="section-heading ">Esperamos você!</h2>

          <form name="sentMessage" id="cadastroparceiros" novalidate>
            <div class="row">
              <div class="clube-de-beneficios-side-form-grid">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nome Fantasia *" id="name" required data-validation-required-message="Por favor insira seu nome.">
                  <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                  <input type="email" class="form-control" placeholder="E-mail *" id="email" required data-validation-required-message="Por favor insira seu e-mail.">
                  <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                  <input type="tel" class="form-control" placeholder="Nome do Responsável *" id="responsavel" required data-validation-required-message="Por favor insira seu telefone.">
                  <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                  <input type="date" class="form-control" placeholder="Data de Nascimento *" id="setor" required data-validation-required-message="Por favor insira sua data de nascimento.">
                  <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Assunto *" id="assunto" required data-validation-required-message="Por favor insira sua data de nascimento.">
                  <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                  <textarea rows="8" class="form-control" placeholder="Breve Mensagem *" id="mensagem" required data-validation-required-message="Por favor insira sua data de nascimento."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button type="submit" class="btn btn-xl">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
