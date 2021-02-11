<x-librarian-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Adding Books') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form id="form" method="POST" action="{{route('books.store')}}" class="bg-gray-700 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                    @method('POST') 
                <div></div>
                <br>
                <h1 class="block text-white font-bold mb-2 text-xl text-center">ADD BOOK TO YOUR LIBRARY</h1>
                <br>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="name">
                        Title
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="title" id="name" type="text" placeholder="" required>
                </div>
                
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="name">
                        Author
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="author" id="name" type="text" placeholder="" required>
                </div>
                
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="name">
                        Genre
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="genre" id="name" type="text" placeholder="" required>
                </div>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="name">
                        Volume n°
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="volume" id="name" type="text" placeholder="" required>
                </div>
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="name">
                        Publisher or Editor
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="publisher" id="name" type="text" placeholder="" required>
                </div>
    
    
                
                <div class="flex items-center justify-between">
                    <button id="submit"
                        class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        <i class="fab fa-whatsapp"></i> save
                    </button>
                </div>
    
                <div class="mb-4">
    
     
            </form>

        </div>
    </div>
</x-librarian-layout>