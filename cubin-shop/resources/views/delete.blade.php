@extends('layouts.header')

@section('content')

<p class="text-3xl">Page de suppression</p>

<br><hr><br>



<img class="mx-auto" height="600" width="600" src="{{ Storage::url($url) }}" alt="Photo cube n°{{ $product[0]->pro_id }}">

<p class="text-blue-500 text-2xl text-center"> Êtes-vous sur de vouloir supprimer le {{ $product[0]->pro_libelle}} ?</p>

<br><br>

<form class="text-center" action="{{ Route('delete.store', ['id'=> $product[0]->pro_id]) }}" method="POST">
    @csrf
    <button type="submit" class="mr-4 bg-transparent hover:bg-green-500 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">Oui</button>
    <a href="/products/{{ $product[0]->pro_id }}" class="mr-4 bg-transparent hover:bg-red-500 text-red-500 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">Non</a>
</form>

@endsection
