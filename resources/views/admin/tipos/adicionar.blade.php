@extends('layouts.app')
<main>
@section('content')
</main>


<div class="container">
	<h2 class="center">Novo Tipo</h2>
		<div class="row">
		<nav>
			    <div class="nav-wrapper green ">
			      <div class="col s12">
				        <a href="{{ route ('admin.principal')}}" class="breadcrumb">Inicio</a>
				        <a href="{{ route ('admin.tipos')}}" class="breadcrumb">Lista de Tipos</a>
				        <a class="breadcrumb">Novo Tipo</a>
			       </div>
			    </div>
  		</nav>
  		</div>


<div class="row">
	<form action="{{ route('admin.tipos.salvar')}}" method="post">
	{{csrf_field()}}
	@include('admin.tipos._form')
	
	<button class="btn blue" >Adicionar</button>
	
	</form>
</div>
</div>


@endsection