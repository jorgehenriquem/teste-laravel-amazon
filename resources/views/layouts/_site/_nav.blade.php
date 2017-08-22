<nav>
      <div class="nav-wrapper purple">
    <div class="container">
      <a href="{{ route('admin.principal') }}" class="brand-logo">Sitema 1</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('site.home') }}">Home</a></li>
        <li><a href="{{ route('admin.principal') }}">Area de Administração</a></li>
        <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
        <li><a href="{{ route('site.contato') }}">Contato</a></li>

         
        @if(Auth::guest())
                <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                <li><a href="#">{{ Auth::user()->name }}</a></li>


                <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                @endif
        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{ route('admin.principal') }}">Home</a></li>
        <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
        <li><a href="{{ route('site.contato') }}">Contato</a></li>

        
        @if(Auth::guest())
                <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                <li><a href="#">{{ Auth::user()->name }}</a></li>
 
                <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                @endif
      </ul>
    </div>
    </div>
</nav>