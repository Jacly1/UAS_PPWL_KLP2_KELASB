@extends('layouts.app', ['title' => 'Tambah Produk'])
@section('content')

<div class="w-2/4 mx-auto">
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

    <form action="{{ route('products.create') }}" method="post" class="p-2">
        @csrf
        <div class="mx-5 mb-3">
            <div class="mb-3">
                <label for="namaProduk" class="block mb-2 text-sm font-medium text-gray-900">Task Name</label>
                <div class="mt-2">
                    <input type="text" name="namaProduk" id="namaProduk" class="block p-2.5 w-full text-sm rounded-lg border bg-gray-700 border-gray-600 text-white focus:ring-blue-500 focus:border-blue-500" required></input>
                </div>
                @error('namaProduk')
                <div>
                    <p class="text-red-500 text-base">{{ $message }}</p>
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Task Description</label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="block p-2.5 w-full text-sm rounded-lg border bg-gray-700 border-gray-600 text-white focus:ring-blue-500 focus:border-blue-500" required></textarea>
                @error('deskripsi')
                <div>
                    <p class="text-red-500 text-base">{{ $message }}</p>
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                <select name="status" id="status" class="block p-2.5 w-full text-sm rounded-lg border bg-gray-700 border-gray-600 text-white focus:ring-blue-500 focus:border-blue-500" required>
                    <option value="to do">To Do</option>
                    <option value="in process">In Process</option>
                    <option value="done">Done</option>
                </select>
                @error('status')
                <div>
                    <p class="text-red-500 text-base">{{ $message }}</p>
                </div>
                @enderror
            </div>

            <div class="flex space-x-4 mt-5">
                <button type="submit" class="w-full text-center text-white text-lg font-bold tracking-wider uppercase bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 rounded-lg px-5 py-2.5">
                    Add Task
                </button>
                <a href="{{ url('products') }}" class="w-full text-center text-lg font-bold tracking-wider uppercase bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 text-white rounded-lg px-5 py-2.5">
                    Cancel
                </a>
            </div>
        </div>
    </form>
</div>

@endsection