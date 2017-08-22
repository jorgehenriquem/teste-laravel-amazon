@extends('layouts.app')
<main>
@section('content')
</main>


<div class="container">



	
	<div class="row">
	<h2 class="center">Lista de Cidades</h2>


		<nav>
			    <div class="nav-wrapper green ">
			      <div class="col s12">
				        <a href="{{ route ('admin.principal')}}" class="breadcrumb">Inicio</a>
				        <a class="breadcrumb">Lista de Cidades</a>
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
			<th>Estado</th>
			<th>Sigla</th>
			<th>Ação</th>
			

		</tr>
	</thead>
	<tbody>
	@foreach($registros as $registro)
		<tr>
			<td>{{ $registro->id}}</td>
			<td>{{ $registro->nome}}</td>
			<td>{{ $registro->estado}}</td>
			<td>{{ $registro->sigla_estado}}</td>
		
			<td>
				<a class="btn orange" href="{{ route('admin.cidades.editar', $registro->id)}}"><i class="small material-icons">mode_edit </i></a>
				<a class="btn red" href="{{ route('admin.cidades.deletar', $registro->id)}}"><i class="small material-icons">delete </i></a>
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
