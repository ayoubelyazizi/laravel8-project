<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('All books Overview') }}
        </h2>
    </x-slot>

<div class="py-12">
    <p class="text-lg text-center font-bold m-5 text-white">Books Overview</p>
    <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
        <tr class="text-left border-b-2 border-gray-300">
            <th class="px-4 py-3">Title</th>
            <th class="px-4 py-3">Author</th>
            <th class="px-4 py-3">Genre</th>
            <th class="px-4 py-3">Volume</th>
            <th class="px-4 py-3">Publisher</th>
        </tr>
        @foreach($books as $book)
        <tr class="bg-yellow-100 border-b border-gray-200">
            <td class="px-4 py-3">{{$book['title']}}</td>
            <td class="px-4 py-3">{{$book['author']}}</td>
            <td class="px-4 py-3">{{$book['genre']}}</td>
            <td class="px-4 py-3">{{$book['volume']}}</td>
            <td class="px-4 py-3">{{$book['publisher']}}</td>
        </tr>
        @endforeach


    </table>
</div>
</x-app-layout>
