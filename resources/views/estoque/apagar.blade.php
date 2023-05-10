@extends('base')
@section('title', 'Estoque - Apagar')

@section('content')

    <!-- <div class="alert alert-warning" role="alert">
    <p>😒 Tem certeza que deseja apagar?</p>
    </div> -->

    <div class="flex rounded-md bg-yellow-50 p-4 text-sm text-yellow-500" x-cloak x-show="showAlert" x-data="{ showAlert: true }">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mr-3 h-5 w-5 flex-shrink-0">
      <path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
    </svg>

    <div>😒 Tem certeza que deseja apagar?</div>

  </div>


    <p> Você está pretes a apagar {{$estoque['nome']}}. </p>

    <form action="{{route('estoque.apagar', $estoque['id'])}}" method="post">
        @method('delete')
        @csrf

        <button type="button" class="rounded-lg border border-red-500 bg-red-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-red-700 hover:bg-red-700 focus:ring focus:ring-red-200 disabled:cursor-not-allowed disabled:border-red-300 disabled:bg-red-300">Apaga pfv!</button>
        <!-- <button type="submit"></button> -->
    </form>



@endsection