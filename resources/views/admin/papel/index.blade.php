@extends('layouts.app')
<main>
@section('content')
</main>


<div class="container">



	
	<div class="row">
	<h2 class="center">Lista de Papeis</h2>


		<nav>
			    <div class="nav-wrapper green ">
			      <div class="col s12">
				        <a href="{{ route ('admin.principal')}}" class="breadcrumb">Inicio</a>
				        <a class="breadcrumb">Lista de Papeis</a>
			       </div>
			    </div>
  		</nav>
	</div>





<div class="row">
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Descrição</th>
			<			

		</tr>
	</thead>
	<tbody>
	@foreach($registros as $registro)
		<tr>
			<td>{{ $registro->id}}</td>
			<td>{{ $registro->nome}}</td>
			<td>{{ $registro->estado}}</td>
			

(12 MINUTOS)

		
			<td>
				<a class="btn orange" href="{{ route('admin.papel.editar', $registro->id)}}"><i class="small material-icons">mode_edit </i></a>
				<a class="btn red" href="{{ route('admin.papel.remover', $registro->id)}}"><i class="small material-icons">delete </i></a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<div class="right">
	<a class="btn blue" href="{{ route('admin.cidades.adicionar')}}"><i class="small material-icons">note_add </i></a>
</div>
</div>

</div>

@endsection
