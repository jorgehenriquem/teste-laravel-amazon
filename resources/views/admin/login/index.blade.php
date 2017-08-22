@extends('layouts.app')

<main>
@section('content')

<div class="container">
<h2>Entrar</h2>
<form action="{{ route('admin.login') }}" method="post">
	{{ csrf_field() }}
	@include('admin.login._form')
		<button class="btn purple ">Entrar</button>
		
</form>
</main>
</div>

@endsection