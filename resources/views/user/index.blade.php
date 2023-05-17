{{-- views/estoque/index.blade.php --}}
@extends('base')

@section('title', 'Usuários')

@section('content')

<p> Deu Tudo certo 👍</p>
<p> Ou tudo certo ?!</p>
<br>
<a class=" mb-2 bg-green-500 p-2 rounded-lg cursor-ponter" href="{{route('user.create')}}">Adicionar Usuário</a>

@endsection