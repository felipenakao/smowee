@extends ('parceiros.master')

@section ('content')
  <section id="parceiros">
    <div class="container">
      <div class="row parceiros-flex">
        <div class="parceiros-text">
          <h2>Seja um Parceiro Smowee</h2>
          <br>
          <h3>Mídia</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tortor est, euismod a elit vel, maximus gravida velit. Mauris id congue nibh. Pellentesque sit amet volutpat turpis. Praesent placerat malesuada dapibus. Proin sit amet ornare lacus. Aenean vel condimentum quam, ac dapibus augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur euismod ac lacus id posuere. Ut volutpat orci at pellentesque bibendum. Morbi vehicula viverra urna ut fringilla. Maecenas consectetur massa enim, sit amet vestibulum est congue eget. Nulla pulvinar facilisis sapien, et tincidunt nunc tristique sed. Aenean dictum, justo quis posuere gravida, lorem nibh euismod neque, eget maximus ante diam nec turpis. Aliquam lorem leo, luctus ut sollicitudin in, mollis id odio.
          </p>

          <h3>Assessoria</h3>
          <p>
            In auctor metus vitae justo hendrerit pretium. Cras ac congue mi. Vestibulum mattis eros ut velit interdum aliquam. Cras non quam ultricies, molestie mi ac, lacinia augue. Vivamus malesuada eros massa, a consequat nunc tempor quis. Duis efficitur, libero ac aliquam suscipit, lacus nibh pharetra risus, ac consectetur diam diam quis leo. Sed tempus ligula vitae diam fermentum gravida.
          </p>

          <h3>Parcerias</h3>
          <p>
            Nam ac tellus ac massa pellentesque gravida quis at risus. Duis id ante ac tellus viverra euismod non non erat. Donec vel tempus lacus. Praesent faucibus purus nec semper vestibulum. Phasellus sodales nisl sapien, vitae tincidunt mi vehicula sit amet. Duis convallis tincidunt dignissim. Aenean vitae mauris vitae orci egestas elementum eu in nisi. Sed ut augue eu sem tempus dictum consequat a lacus. Praesent at congue purus. Ut sed lorem ligula. Sed sem lorem, vulputate nec mi commodo, eleifend vehicula felis. Ut vehicula tempor ultrices. Proin non risus a est luctus molestie sed a arcu. Vivamus nibh mi, lacinia sit amet nisl pretium, finibus tincidunt lectus. Nam venenatis massa non mollis accumsan.
          </p>
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
                  <input type="date" class="form-control" placeholder="Setor/Segmento *" id="setor" required data-validation-required-message="Por favor insira sua data de nascimento.">
                  <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Assunto *" id="assunto" required data-validation-required-message="Por favor insira sua data de nascimento.">
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
