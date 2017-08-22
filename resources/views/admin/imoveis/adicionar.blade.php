@extends('layouts.app')
<main>
@section('content')
</main>


<div class="container">
	<h2 class="center">Novo Imovel</h2>
		<div class="row">
		<nav>
			    <div class="nav-wrapper green ">
			      <div class="col s12">
				        <a href="{{ route ('admin.principal')}}" class="breadcrumb">Inicio</a>
				        <a href="{{ route ('admin.imoveis')}}" class="breadcrumb">Lista de Imoveis</a>
				        <a class="breadcrumb">Alterar</a>
			       </div>
			    </div>
  		</nav>
  		</div>


<div class="row">
	<form action="{{ route('admin.imoveis.salvar')}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	@include('admin.imoveis._form')
	
	<button class="btn blue" >Adicionar</button>
	
	</form>
</div>
</div>


@endsection