@extends('layouts.header')

@section('content')

<div class="text-center mx-auto w-full max-w-lg">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8" method="POST" action="{{ Route('create.store') }}">

        @csrf

        {{-- <!-- ID -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="id">
                ID :
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="id" type="text">
        </div> --}}

        <!-- CAT ID -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="cat_id">
                CAT_ID :
            </label>
            <input
                class="hover:bg-blue-500 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="cat_id" type="text">
        </div>

        <!-- FOU ID -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="fou_id">
                FOU_ID :
            </label>
            <input
                class="hover:bg-green-500 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="fou_id" type="text">
        </div>

        <!-- RÉFÉRENCE -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="ref">
                Référence :
            </label>
            <input
                class="hover:bg-yellow-300 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="ref" type="text">
        </div>

        <!-- LIBELLE -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="libelle">
                Libellé :
            </label>
            <input
                class="hover:bg-yellow-500 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="libelle" type="text">
        </div>

        <!-- DESCRIPTION -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="desc">
                Description :
            </label>
            <input
                class="hover:bg-red-500 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="desc" type="text">
        </div>

        <!-- PRIX -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="prix">
                Prix :
            </label>
            <input
                class="hover:bg-pink-500 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="prix" type="text">
        </div>

        <!-- STOCK -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="stock">
                Stock :
            </label>
            <input
                class="hover:bg-purple-500 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="stock" type="text">
        </div>

        <!-- Couleur -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="couleur">
                Couleur :
            </label>
            <input
                class="hover:bg-pink-800 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="couleur" type="text">
        </div>

        <!-- PHOTO -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="photo">
                Photo :
            </label>
            <input
                class="hover:bg-gray-300 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="photo" type="text">
        </div>

        <br>

        <div class="flex justify-around">
            <div class="flex">
                <button type="submit"
                    class="ml-12 bg-transparent hover:bg-yellow-500 text-yellow-500 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>Confirmer
                </button>
            </div>
            <div class="flex">
                <a href="#"
                    class="mr-12 bg-transparent hover:bg-red-500 text-red-500 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>Annuler</a>
            </div>
        </div>



</form>
</div>
@endsection