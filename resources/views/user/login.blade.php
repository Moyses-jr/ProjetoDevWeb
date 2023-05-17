{{-- views/estoque/index.blade.php --}}
@extends('base')

@section('title', 'Login')

@section('content')


<form action="{{route('user.login')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Username" class="mb-2 rounded-md">
    <br>
    <input type="password" name="password" placeholder="Senha" class="mb-2 rounded-md">
    <br>
    <input type="submit" value="Continuar" class=" mb-2 bg-green-500 p-2 rounded-lg cursor-ponter"></input>
</form>

@endsection