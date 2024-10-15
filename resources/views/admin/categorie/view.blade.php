<!--- category view --->

@extends('layouts.adminLayout')

@section('content')
    <h1 class="text-3xl font-bold">Categories</h1>
    <a href="{{ route('admin.category.create') }}" class="bg-green-400 text-white py-2 px-4 rounded mt-5 inline-block">Add Category</a>
    <table class="table-auto w-full mt-5">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td class="border px-4 py-2">{{ $category->id }}</td>
                    <td class="border px-4 py-2">{{ $category->name }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.category.edit', $category->id) }}" class="bg-blue-400 text-white py-1 px-2 rounded">Edit</a>
                        <form action="{{ route('admin.category.delete', $category->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-400 text-white py-1 px-2 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
