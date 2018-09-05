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
                <th>ID</th>
                <th>Título</th>
                <th>Texto</th>
                <th colspan="2">Ações</th>
              </tr>
            </thead>
            <tbody>
            
              @foreach($posts as $post)
              <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['titulo']}}</td>
                <td>{{$post['texto']}}</td>
                
                <td><a href="{{action('PostController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
                <td>
                  <form action="{{action('PostController@destroy', $post['id'])}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- /.blog-main -->

@endsection