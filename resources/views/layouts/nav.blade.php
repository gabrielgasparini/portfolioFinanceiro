
<div class="container">

  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <!--<a class="text-muted" href="#">Subscribe</a>-->
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Portfólio financeiro</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <!--<a class="btn btn-sm btn-outline-secondary mr-3" href="#">Projeções de Investimentos</a>-->
        <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Sair</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>            
    </div>
  </div>
</header>

<div class="nav-scroller py-1 mb-2 mt-4">
  <nav class="nav d-flex justify-content-between">
    <a class="btn btn-sm btn-outline-secondary" href="{{ url('investimentos') }}">Investimentos</a>
    <a class="btn btn-sm btn-outline-secondary" href="{{ url('investimentos/create') }}">Cadastrar Investimentos</a>        
  </nav>
</div>


</div>

