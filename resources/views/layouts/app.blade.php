<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta property="og:title" content="Nhà Xe NHA-XE - Đặt Vé Online">
    <meta property="og:description" content="Đặt vé nhanh – xe đời mới – hỗ trợ 24/7">
    <meta property="og:image" content="{{ asset('banner.jpg') }}">
    <meta property="og:type" content="website">

    <title>@yield('title', 'Nhà xe')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    {{-- HEADER --}}
    @include('components.header')

    {{-- CONTENT --}}
    <main class="py-10">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('components.footer')
<script>
document.addEventListener("scroll", () => {
    document.querySelectorAll("[data-reveal]").forEach(el => {
        const top = el.getBoundingClientRect().top;
        if (top < window.innerHeight - 100) {
            el.classList.remove("opacity-0", "translate-y-10");
        }
    });
});
</script>

</body>
</html>
