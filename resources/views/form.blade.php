<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Form</title>
</head>

<body>
    <div class="flex h-screen items-center justify-center bg-gray-100">
        <div class="rounded-lg bg-gray-200 p-4 shadow-lg">
            <form action="/greet" method="post">
                {{ csrf_field() }}
                <div class="mb-4">
                    <label for="nama" class="mb-2 block font-semibold text-gray-600">Nama</label>
                    <input type="text" id="nama" name="nama" class="w-full rounded-lg border border-gray-300 bg-white p-2 focus:border-blue-500 focus:outline-none" />
                </div>
                <div class="mb-4">
                    <label for="kelas" class="mb-2 block font-semibold text-gray-600">Kelas</label>
                    <input type="text" id="kelas" name="kelas" class="w-full rounded-lg border border-gray-300 bg-white p-2 focus:border-blue-500 focus:outline-none" />
                </div>
                <div class="text-center">
                    <button type="submit" class="rounded-full bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-600">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>