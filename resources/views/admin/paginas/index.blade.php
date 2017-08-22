@extends('layouts.app')
<main>
@section('content')
</main>


<div class="container">



	
	<div class="row">
	<h2 class="center">Lista de Paginas</h2>


		<nav>
			    <div class="nav-wrapper green ">
			      <div class="col s12">
				        <a href="{{ route ('admin.principal')}}" class="breadcrumb">Inicio</a>
				        <a class="breadcrumb">Lista de Paginas</a>
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
			<th>Tipo</th>
			<th>Ação</th>

		</tr>
	</thead>
	<tbody>
	@foreach($paginas as $pagina)
		<tr>
			<td>{{ $pagina->id}}</td>
			<td>{{ $pagina->titulo}}</td>
			<td>{{ $pagina->descricao}}</td>
			<td>{{ $pagina->tipo}}</td>
			<td>
				<a class="btn orange" href="{{ route('admin.paginas.editar', $pagina->id)}}"><i class="small material-icons">mode_edit </i></a>
				
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<div class="right">
	
</div>
</div>

</div>

@endsection
