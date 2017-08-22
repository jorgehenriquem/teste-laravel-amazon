<nav>
            <div class="nav-wrapper purple">

            <div class="container ">
              <a href="{{ route('admin.principal') }}" class="brand-logo"><i class="material-icons">business </i></a>  
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class=" hide-on-med-and-down">
              <div class=" container right">
                <li><a href="{{ route('site.home') }}">Home</a></li>


                
                
                @if(Auth::guest())
                <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                 
                <li><a href='#' data-activates='dropdown1' class='dropdown-button' >{{ Auth::user()->name }} </a></li>
                
          
              


                <li><a href="{{route('admin.usuarios')}}">Usuarios<a></li> 
                <li><a href="{{route('admin.imoveis')}}">Imoveis<a></li> 
                <li><a href="{{route('admin.tipos')}}">Tipos<a></li> 
                <li><a href="{{route('admin.cidades')}}">Cidades<a></li> 
                <li><a href="{{route('admin.slides')}}">Slides<a></li> 
                <li><a href="{{route('admin.paginas')}}">Paginas<a></li>  
                <li><a href="{{ route('site.sobre') }}">Sobre</a></li>   
                <li><a href="{{route('admin.login.sair')}}">Sair</a></li>
                </ul>
               </div>
                @endif

                

                </ul>
              </ul>
              <ul class="side-nav" id="mobile-demo">
                <li><a href="{{ route('admin.principal') }}">Inicio</a></li>
                
                @if(Auth::guest())
                <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else

                <li><a a class='dropdown-button' href='#' data-activates='dropdown1'>{{ Auth::user()->name }} </a></li>

                <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#">{{ Auth::user()->name }}<a></li>
                <li><a href="{{route('admin.usuarios')}}">Usuarios<a></li> 
                <li><a href="{{route('admin.paginas')}}">Paginas<a></li>                 
                </ul>
                <li><a href="{{route('admin.usuarios')}}">Usuarios<a></li> 
                <li><a href="{{route('admin.imoveis')}}">Imoveis<a></li> 
                <li><a href="{{route('admin.tipos')}}">Tipos<a></li>  
                <li><a href="{{route('admin.cidades')}}">Cidades<a></li> 
                <li><a href="{{route('admin.slides')}}">Slides<a></li> 
                <li><a href="{{route('admin.paginas')}}">Paginas<a></li>    
                <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
                <li><a href="{{route('admin.login.sair')}}">Sair</a></li>

                @endif
              </ul>
            </div>
            </div>
  </nav>