@extends ('layout.master')

@section ('content')
<style>body{
background-image: url('/img/crawler/farofino-pattern.jpg')!important;
background-repeat: repeat;}</style>
  <section id="farofino">
    <div class="container">
      @yield ('farofino-content')
    </div>
  </section>
@endsection
