@extends ('admin.master')
{{-- TITULO; IMAGEM CAPA; CATEGORIA; TAG; CONTEUDO--}}
@section ('content')
  <h4>Matérias</h4>
  <hr>
  <table class="table table-striped table-admin">
    <tr>
        <th>Nome</th>
        <th><i class="fa fa-tag"></i></th>
        <th><i class="fa fa-eye"></i></th>
        <th><i class="fa fa-thumbs-up"></i></th>
        <th><i class="fa fa-calendar"></i></th>
        <th></th>
    </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->tags }}</td>
            <td>{{ $post->views }}</td>
            <td>{{ $post->up_votes }}</td>
            <td>{{ $post->publish_date}}</td>
            <td></td>
        </tr>
    @endforeach
  </table>
@endsection