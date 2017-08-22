@extends('layouts.app')
<main>
@section('content')
</main>


<div class="container">
	<h2 class="center">Editar usuario</h2>
		<div class="row">
		<nav>
			    <div class="nav-wrapper green ">
			      <div class="col s12">
				        <a href="{{ route ('admin.principal')}}" class="breadcrumb">Inicio</a>
				        <a href="{{ route ('admin.usuarios')}}" class="breadcrumb">Lista de Usuarios</a>
				        <a class="breadcrumb">Editar Usuario</a>
			       </div>
			    </div>
  		</nav>
  		</div>


<div class="row">
	<form action="{{ route('admin.usuarios.atualizar', $usuario->id )}}" method="post">
	{{csrf_field()}}
	
	<input type="hidden" name="_method" value="put">
	
	@include('admin.usuarios._form')
	
	<button class="btn blue" >Editar</button>
	
	</form>
</div>
</div>


@endsection