<!-- view all farmhouses -->

@extends('layouts.adminLayout')

@section('content')
    <h1 class="text-3xl font-bold">Farmhouses</h1>
    <a href="{{ route('admin.farmhouse.create') }}" class="bg-green-400 text-white py-2 px-4 rounded mt-5 inline-block">Add Farmhouse</a>
    <table class="table-auto w-full mt-5">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Location</th>
                <th class="border px-4 py-2">Description</th>
                <th class="border px-4 py-2">Image</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($farmhouses as $farmhouse)
                <tr>
                    <td class="border px-4 py-2">{{ $farmhouse->id }}</td>
                    <td class="border px-4 py-2">{{ $farmhouse->name }}</td>
                    <td class="border px-4 py-2">{{ $farmhouse->location }}</td>
                    <td class="border px-4 py-2">{{ $farmhouse->description }}</td>
                    <td class="border px-4 py-2"><img src="{{ asset('storage/public/farmhouse/' . $farmhouse->image) }}" alt="{{ $farmhouse->name }}" class="w-32"></td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.farmhouse.edit', $farmhouse->id) }}" class="bg-blue-400 text-white py-1 px-2 rounded">Edit</a>
                        <form action="{{ route('admin.farmhouse.delete', $farmhouse->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-400 text-white py-1 px-2 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
