<div class="slider">
	<ul class="slides">
	@foreach($slides as $slide)
		<li onclick="window.location='{{ $slide->link }}'">
			<img src="{{ asset($slide->imagem) }}" alt="ampola">
			<div class="caption {{ $direcaoImagem[rand(0,2)] }}">
				<h3>{{$slide->titulo}}</h3>
				<h5>{{$slide->titulo}}</h5>
				@if($slide->link != null)
				<a href="{{$slide->link}}" class="btn btn-large blue">Mais...</a>
				@endif
			</div>
		</li>
	@endforeach
	</ul>
	

</div>