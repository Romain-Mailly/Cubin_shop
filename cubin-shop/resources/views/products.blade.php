@extends('layouts.header')

@section('content')


<p class="text-4xl">Liste des produits</p>

<br><hr><br>

<form action="{{ Route('create') }}">
    <button class="bg-transparent hover:bg-yellow-500 text-yellow-700 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded"
        type="submit">Créer un produit</button>
</form>


<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
@if (count($products) > 0)
        @foreach($products as $product)
       
            <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                <a href="products/{{$product->pro_id }}">
                    <img class="object-center object-cover rounded h-50 w-50" src=" {{Storage::url('photos_cube/'. $product->pro_id.'.'.$product->pro_photo)}}" alt="photo">
                </a>
                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2"><a href="products/{{$product->pro_id }}">{{ $product->pro_libelle }}</a></p>
                    <p class="text-base text-gray-400 font-normal">{{ $product->pro_prix }}</p>
                </div>
            </div>
            
            
            @endforeach
        </div>
    </section>
</>
        @else
        <span>Aucun post en base de données</span>
    @endif




@endsection