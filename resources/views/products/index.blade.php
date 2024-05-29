@extends('layouts.app')
@extends('layouts.backend')

@section('content')

<style>
    .div{
    background-image: url('https://th.bing.com/th/id/OIG3.PlajwzWLxXYklM8DgnYr?pid=ImgGn');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat; /* Mencegah pengulangan gambar */
    background-attachment: fixed; /* Membuat gambar tetap saat scrolling */
    display: flex;
    flex-direction: column;
    padding: 34px 26px;
}
</style>
<div class="mx-32 mt-10" >
    @if (session()->has('success'))
    <div id="alert-3" class="flex items-center p-3 mb-1 text-white rounded-lg bg-green-400 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span class="text-3xl"><i class="bi bi-check2-circle"></i></span>
        <span class="sr-only">Info</span>
        <div class="ms-3 text-sm font-medium">
            {{ session('success') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-400 text-white rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-800 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    @elseif (session()->has('fail'))
    <div id="alert-2" class="flex items-center p-3 mb-1 text-white rounded-lg bg-red-700" role="alert">
        <i class="bi bi-exclamation-triangle-fill text-3xl"></i>
        <span class="sr-only">Info</span>
        <div class="ms-3 text-sm font-medium">
            {{ session('fail') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-700 text-white rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-800 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    @endif
    <div class="p-4">
        <a href="/tambah-produk" class="inline-block text-center text-white font-medium rounded-lg text-sm px-4 py-2 bg-green hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-800 focus:ring-opacity-50 mb-4">Assign New Task</a>
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-white">
                <thead class="text-xs uppercase bg-orange text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-1/6">Task Title</th>
                        <th scope="col" class="px-6 py-3 w-2/5">Task Description</th>
                        <th scope="col" class="px-6 py-3 w-1/3">Status</th>
                        <th scope="col" class="px-6 py-3 w-1/6">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium whitespace-nowrap text-white">{{ $product->nama_produk }}</td>
                        <td class="px-6 py-4">{{ $product->deskripsi }}</td>
                        <td class="px-6 py-4">{{ $product->status }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('edit', $product->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('hapus', $product->id) }}" method="POST" class="inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="ml-2 font-medium text-red-600 dark:text-red-500 hover:underline"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>



@endsection