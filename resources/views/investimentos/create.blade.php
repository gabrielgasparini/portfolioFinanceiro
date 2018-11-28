@extends ('layouts.master')

@section ('content')

    <h1> Cadastrar Investimento </h1>

    <form method="POST" action="{{url('investimentos')}}">
        <div class="form-group">
            <label for="exampleInputEmail1">Título do Investimento</label>
            <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Depósito inicial (R$)</label>
            <input type="number" min="1" name="deposito_inicial" step="any" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Depósito mensal (R$)</label>
            <input type="number" min="1" name="deposito_mensal" step="any" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tempo de investimento (Meses)</label>
            <input type="number" min="1" name="tempo" step="any" class="form-control" id="exampleInputPassword1" required>
        </div>  
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
        {{ csrf_field() }}
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