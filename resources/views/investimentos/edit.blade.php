@extends ('layouts.master')

@section ('content')

    <h1> Editar Investimento - {{$investimento->titulo}} </h1>

    <form method="POST" action="{{action('InvestimentoController@update', $id)}}">
        <div class="form-group">
            <label for="exampleInputEmail1">Título</label>
            <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" value="{{$investimento->titulo}}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Depósito inicial (R$)</label>
            <input type="number" min="1" name="deposito_inicial" step="any" class="form-control" id="exampleInputPassword1"  value="{{$investimento->deposito_inicial}}"  required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Depósito mensal (R$)</label>
            <input type="number" min="1" name="deposito_mensal" step="any" class="form-control" id="exampleInputPassword1"  value="{{$investimento->deposito_mensal}}"  required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tempo de investimento (Meses)</label>
            <input type="number" min="1" name="tempo" step="any" class="form-control" id="exampleInputPassword1"   value="{{$investimento->tempo}}" required>
        </div>  
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">
        @if (\Session::has('success'))
        <br />
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        <br />
        @endif
    </form>

    <br>
    
@endsection