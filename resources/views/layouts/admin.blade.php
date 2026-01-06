<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-600 text-white p-4">
            <h2 class="text-xl font-bold mb-4">ADMIN</h2>
            <ul class="space-y-2">
                <li>
                    <a href="/admin/dat-ve" class="block px-2 py-1 rounded hover:bg-blue-500">
                        Danh sách vé
                    </a>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <div class="flex-1 p-6">
            @yield('content')
        </div>
    </div>

</body>
</html>
