<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Peminjaman Aset')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">

    <header class="bg-white shadow">
        <nav class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="font-bold text-xl text-gray-800">Del-Leats</div>
            <ul class="flex space-x-6">
                
                <li><a href="#" class="text-blue-600 font-semibold">Katalog Aset</a></li>
                <li><a href="#" class="text-gray-600 hover:text-blue-600">Tambah Aset</a></li>
                <li><a href="#" class="text-gray-600 hover:text-blue-600">Riwayat Peminjaman</a></li>
            </ul>
        </nav>
    </header>

    
    <main class="max-w-7xl mx-auto px-4 py-6">
        @yield('content')
    </main>

    
    <footer class="bg-white border-t mt-12 py-4 text-center text-gray-500 text-sm">

    </footer>

</body>
</html>