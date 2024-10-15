<!-- Create page for category. it contains a form to create a new category with the fields  of  name, image -->
@extends('layouts.adminLayout')

@section('content')
    <h1 class="text-3xl font-bold">Add Category</h1>
    <form action="{{ route('admin.category.store') }}" method="POST" class="mt-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md border-3">
        </div>
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <button type="submit" class="bg-green-400 text-white py-2 px-4 rounded">Add Category</button>
    </form>

@endsection
