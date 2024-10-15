<!-- Make a navbar for the admin which has links to products and farmcontroller and categories for the theme -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind css import -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <title>Admin | FarmCorp</title>
</head>

<body>
    <nav class="bg-green-400 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('admin.dashboard') }}" class="text-white text-2xl font-bold">FarmCorp</a>
            <ul class="flex">
                <li class="ml-4"><a href="{{ route('admin.farms') }}" class="text-white">Farms</a></li>
                <li class="ml-4"><a href="{{ route('admin.products') }}" class="text-white">Products</a></li>
                <li class="ml-4"><a href="{{ route('admin.categories') }}" class="text-white">Categories</a></li>
                <li class="ml-4"><a class="text-white">
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                    </a></li>
            </ul>
        </div>
    </nav>
    <div class="container mx-auto p-4">
        @yield('content')
    </div>
