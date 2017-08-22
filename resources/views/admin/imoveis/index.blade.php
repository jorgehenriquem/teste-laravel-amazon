@extends('layouts.app')
<main>
@section('content')
</main>


<div class="container">



	
	<div class="row">
	<h2 class="center">Lista de Imoveis</h2>


		<nav>
			    <div class="nav-wrapper green ">
			      <div class="col s12">
				        <a href="{{ route ('admin.principal')}}" class="breadcrumb">Inicio</a>
				        <a class="breadcrumb">Lista de Imoveis</a>
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
			<th>Status</th>
			<th>Cidade</th>
			<th>Valor</th>
			<th>Publicado</th>
			<th>imagem</th>
			<th>Ação</th>
			

		</tr>
	</thead>
	<tbody>
	@foreach($registros as $registro)
		<tr>
			<td>{{ $registro->id}}</td>
			<td>{{ $registro->titulos}}</td>
			<td>{{ $registro->status}}</td>
			<td>{{ $registro->cidade->nome}}</td>
			<td>R$ {{ number_format($registro->valor,2,",",".")}}</td>
			<td>{{ $registro->publicar}}</td>
			<td><img width="100" src="{{asset($registro->imagem)}}"></td>
			<td>
				<a class="btn orange" href="{{ route('admin.imoveis.editar', $registro->id)}}"><i class="small material-icons">mode_edit </i></a>
				<a class="btn pink" href="{{ route('admin.galerias', $registro->id)}}"><i class="small material-icons">add_a_photo </i></a>
				<a class="btn red" href="{{ route('admin.imoveis.deletar', $registro->id)}}"><i class="small material-icons">delete </i></a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<div class="right">
	<a class="btn blue" href="{{ route('admin.imoveis.adicionar')}}"><i class="small material-icons">note_add </i></a>
</div>
</div>

</div>

@endsection
