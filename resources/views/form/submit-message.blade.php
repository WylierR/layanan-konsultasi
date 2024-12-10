<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-blue-50">
    <div class="flex justify-center items-start min-h-screen">
        <div class="w-full max-w-4xl p-4 bg-white rounded-lg shadow-md">
            <div class="bg-black text-white p-6 rounded-lg">
                <h1 class="text-center text-2xl lg:text-4xl font-bold">LAYANAN KONSULTASI INSPEKTORAT</h1>
            </div>
            <div class="mt-6">
                <div class="mb-6 mx-10 py-5">
                    <p class="text-center text-black text-sm lg:text-base mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non hendrerit
                        sem, quis posuere purus. Sed venenatis, lorem molestie tempus faucibus, enim lectus pellentesque
                        augue, ut hendrerit augue odio vel dui.
                    </p>
                </div>
                <div class="flex justify-start">
                    <button
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        <a href="{{ route('form') }}">Kembali</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p class="text-sm">
                © 2024 Inspektorat DIY.
            </p>
        </div>
    </footer>
</body>

</html>
