@extends('layouts.app')
<main>
@section('content')
</main>


<div class="container">
	<h2 class="center">Editar Paginas</h2>
		<div class="row">
		<nav>
			    <div class="nav-wrapper green ">
			      <div class="col s12">
				        <a href="{{ route ('admin.principal')}}" class="breadcrumb">Inicio</a>
				        <a href="{{ route ('admin.paginas')}}" class="breadcrumb">Lista de Paginas</a>
				        <a class="breadcrumb">Editar Pagina</a>
			       </div>
			    </div>
  		</nav>
  		</div>


<div class="row">
	<form action="{{ route('admin.paginas.atualizar', $pagina->id )}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	
	<input type="hidden" name="_method" value="put">
	
	@include('admin.paginas._form')
	
	<button class="btn blue" >Editar</button>
	
	</form>
</div>
</div>


@endsection