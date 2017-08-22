@extends('layouts.app')
<main>
@section('content')
</main>


<div class="container">



	
	<div class="row">
	<h2 class="center">Lista de Tipos</h2>


		<nav>
			    <div class="nav-wrapper green ">
			      <div class="col s12">
				        <a href="{{ route ('admin.principal')}}" class="breadcrumb">Inicio</a>
				        <a class="breadcrumb">Lista de Tipos</a>
			       </div>
			    </div>
  		</nav>
	</div>





<div class="row">
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Titulo</th>
			

		</tr>
	</thead>
	<tbody>
	@foreach($registros as $registro)
		<tr>
			<td>{{ $registro->id}}</td>
			<td>{{ $registro->titulo}}</td>
		
			<td>
				<a class="btn orange" href="{{ route('admin.tipos.editar', $registro->id)}}"><i class="small material-icons">mode_edit </i></a>
				<a class="btn red" href="{{ route('admin.tipos.deletar', $registro->id)}}"><i class="small material-icons">delete </i></a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<div class="right">
	<a class="btn blue" href="{{ route('admin.tipos.adicionar')}}"><i class="small material-icons">note_add </i></a>
</div>
</div>

</div>

@endsection
