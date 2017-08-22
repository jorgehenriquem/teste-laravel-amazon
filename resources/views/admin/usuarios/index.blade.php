@extends('layouts.app')
<main>
@section('content')
</main>


<div class="container">



	
	<div class="row">
	<h2 class="center">Lista de Usuarios</h2>


		<nav>
			    <div class="nav-wrapper green ">
			      <div class="col s12">
				        <a href="{{ route ('admin.principal')}}" class="breadcrumb">Inicio</a>
				        <a class="breadcrumb">Lista de Usuarios</a>
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
			<th>Email</th>
			<th>Ação</th>

		</tr>
	</thead>
	<tbody>
	@foreach($usuarios as $usuario)
		<tr>
			<td>{{ $usuario->id}}</td>
			<td>{{ $usuario->name}}</td>
			<td>{{ $usuario->email}}</td>
			<td>
				<a class="btn orange" href="{{ route('admin.usuarios.editar', $usuario->id)}}"><i class="small material-icons">mode_edit </i></a>
				<a class="btn red" href="{{ route('admin.usuarios.deletar', $usuario->id)}}"><i class="small material-icons">delete </i></a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<div class="right">
	<a class="btn blue" href="{{ route('admin.usuarios.adicionar')}}"><i class="small material-icons">note_add </i></a>
</div>
</div>

</div>

@endsection
