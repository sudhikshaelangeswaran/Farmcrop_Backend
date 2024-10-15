<!-- show all the products -->
@extends('layouts.adminLayout')

@section('content')
    <h1 class="text-3xl font-bold">Products</h1>
    <a href="{{ route('admin.products.create') }}" class="bg-green-400 text-white py-2 px-4 rounded mt-5 inline-block">Add Product</a>
    <table class="table-auto w-full mt-5">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Price</th>
                <th class="border px-4 py-2">Category</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="border px-4 py-2">{{ $product->id }}</td>
                    <td class="border px-4 py-2">{{ $product->name }}</td>
                    <td class="border px-4 py-2">{{ $product->price }}</td>
                    <td class="border px-4 py-2">{{ $product->category->name }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.product.edit', $product->id) }}" class="bg-blue-400 text-white py-1 px-2 rounded">Edit</a>
                        <form action="{{ route('admin.product.delete', $product->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-400 text-white py-1 px-2 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
