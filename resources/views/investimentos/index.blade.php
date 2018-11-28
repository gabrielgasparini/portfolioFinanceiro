@extends ('layouts.master')

@section ('content')

<div class="row">
  <div class="col-md-12 blog-main">

    <h1> Investimentos </h1>

    @if (\Session::has('success'))
    <br />
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div>
    <br />
    @endif

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Título</th>
          <th>Deposito inicial</th>
          <th>Deposito mensal</th>
          <th>Duração (meses)</th>
          <th colspan="2">Ações</th>
        </tr>
      </thead>
      <tbody>

        @foreach($investimentos as $investimento)
        <tr>
          <td>{{$investimento['titulo']}}</td>
          <td>R$ {{$investimento['deposito_inicial']}}</td>
          <td>R$ {{$investimento['deposito_mensal']}}</td>
          <td>{{$investimento['tempo']}}</td>
          <td>
            <a href="{{action('ProjecaoController@index', $investimento['id'])}}" class="btn btn-success">Projeções</a>
            <a href="{{action('InvestimentoController@edit', $investimento['id'])}}" class="btn btn-warning">Editar</a>
            <form action="{{action('InvestimentoController@destroy', $investimento['id'])}}" method="post" class="delete-form" style="display: inline-block;">
              @csrf
              <input name="_method" type="hidden" value="DELETE">
              <button class="btn btn-danger delete-botton" type="submit" >Deletar</button>
            </form>                  
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div><!-- /.blog-main -->

  @endsection