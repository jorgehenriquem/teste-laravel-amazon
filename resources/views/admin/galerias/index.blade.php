@extends('layouts.app')
<main>
@section('content')
</main>


<div class="container">



	
	<div class="row">
	<h2 class="center">Galeria de Imagens</h2>


		<nav>
			    <div class="nav-wrapper green ">
			      <div class="col s12">
				        <a href="{{ route ('admin.principal')}}" class="breadcrumb">Inicio</a>
				        <a href="{{ route ('admin.imoveis')}}" class="breadcrumb">Lista de imoveis</a>
				        <a class="breadcrumb">Galeria de Imagens</a>
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
			<th>Descrição</th>
			<th>Imagem</th>
			<th>Ordem</th>
			<th>Ação</th>
			

		</tr>
	</thead>
	<tbody>
	@foreach($registros as $registro)
		<tr>
			<td>{{ $registro->id}}</td>
			<td>{{ $registro->titulos}}</td>
			<td>{{ $registro->descricao}}</td>
			<td><img width="100" src="{{asset($registro->imagem)}}"></td>
			<td>{{ $registro->ordem}}</td>
			<td>
				<a class="btn orange" href="{{ route('admin.galerias.editar', $registro->id)}}"><i class="small material-icons">mode_edit </i></a>
				
				<a class="btn red" href="{{ route('admin.galerias.deletar', $registro->id)}}"><i class="small material-icons">delete </i></a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<div class="right">
	<a class="btn blue" href="{{ route('admin.galerias.adicionar',$imovel->id)}}"><i class="small material-icons">note_add </i></a>
</div>
</div>

</div>

@endsection
