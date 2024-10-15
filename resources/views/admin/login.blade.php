<!-- green and white themed login page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind css import -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <title>Login | FarmCorp</title>
</head>
<body>
    <div class="flex justify-center items-center h-screen bg-green-400">
        <div class="bg-white p-16 rounded-lg shadow-2xl w-1/3">
            <h2 class="text-3xl font-bold mb-10 text-center">Login</h2>
            <form action="{{ route('admin.log.auth') }}" method="POST">
                @csrf
                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-600">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:border-green-400" placeholder="Your Email" required>
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-600">Password</label>
                    <input type="password" name="password" id="password" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:border-green-400" placeholder="Your Password" required>
                </div>
                <button type="submit" class="w-full bg-green-400 py-3 rounded text-white hover:bg-green-500">Login</button>
            </form>
        </div>
    </div>

</body>
</html>
