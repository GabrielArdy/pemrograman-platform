<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Menu</title>
</head>

<body>
    <div class="mt-7  text-2xl text-center font-bold">Menu</div>

    <div class="flex justify-center items-center mt-5">
        <div class="bg-gray-200 p-4 rounded-lg shadow-lg">
            <a href="{{ route('welcome') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full mb-2 block text-center">Welcome Page</a>
            <a href="{{ route('direct') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full mb-2 block text-center">Landing Page</a>
            <a href="{{ route('landing') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full mb-2 block text-center">Controller</a>
            <a href="{{ route('form') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full mb-2 block text-center">Form</a>
        </div>
    </div>
    </div>
</body>

</html>