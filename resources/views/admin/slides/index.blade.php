@extends('layouts.app')
<main>
@section('content')
</main>


<div class="container">



	
	<div class="row">
	<h2 class="center">Lista de Slides</h2>


		<nav>
			    <div class="nav-wrapper green ">
			      <div class="col s12">
				        <a href="{{ route ('admin.principal')}}" class="breadcrumb">Inicio</a>
				        <a class="breadcrumb">Lista de Slides</a>
			       </div>
			    </div>
  		</nav>
	</div>





<div class="row">
<table>
	<thead>
		<tr>
			<th>Ordem</th>
			<th>Titulo</th>
			<th>Descrição</th>
			<th>Publicado</th>
			<th>Imagem</th>
			<th>Ação</th>
			

		</tr>
	</thead>
	<tbody>
	@foreach($registros as $registro)
		<tr>
			<td>{{ $registro->ordem}}</td>
			<td>{{ $registro->titulos}}</td>
			<td>{{ $registro->descricao}}</td>
			<td>{{ $registro->publicado}}</td>
			<td><img width="100" src="{{asset($registro->imagem)}}"></td>
			<td>
				<a class="btn orange" href="{{ route('admin.slides.editar', $registro->id)}}"><i class="small material-icons">mode_edit </i></a>
				
				<a class="btn red" href="{{ route('admin.slides.deletar', $registro->id)}}"><i class="small material-icons">delete </i></a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<div class="right">
	<a class="btn blue" href="{{ route('admin.slides.adicionar')}}"><i class="small material-icons">note_add </i></a>
</div>
</div>

</div>

@endsection
