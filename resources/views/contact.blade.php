@extends('layouts.app')

@section('content')
<section class="relative bg-gradient-to-br from-blue-600 to-indigo-700 text-white overflow-hidden">
    <!-- hiệu ứng tròn bay -->
    <div class="absolute -top-20 -left-20 w-96 h-96 bg-white/10 rounded-full animate-pulse"></div>
    <div class="absolute top-1/2 -right-24 w-80 h-80 bg-white/10 rounded-full animate-ping"></div>

    <div class="relative max-w-6xl mx-auto px-6 py-24 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            📞 Liên hệ với Nhà Xe Thuận Thảo
        </h1>
        <p class="text-lg text-white/90 max-w-2xl mx-auto">
            Chúng tôi luôn sẵn sàng lắng nghe, hỗ trợ và đồng hành cùng bạn
            trên mọi hành trình.
        </p>
    </div>
</section>

<section class="bg-gray-50 py-20">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12">

        <!-- THÔNG TIN CÔNG TY -->
        <div class="bg-white rounded-3xl shadow-xl p-10 transform transition hover:-translate-y-1">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">
                🏢 Thông tin doanh nghiệp
            </h2>

            <ul class="space-y-5 text-gray-700">
                <li class="flex gap-4">
                    <span class="text-2xl">🏷️</span>
                    <span>
                        <strong>CÔNG TY TNHH MTV TM DV VẬN TẢI THUẬN THẢO</strong>
                    </span>
                </li>

                <li class="flex gap-4">
                    <span class="text-2xl">🧾</span>
                    <span>
                        <strong>Mã số thuế:</strong> 3604038058
                    </span>
                </li>

                <li class="flex gap-4">
                    <span class="text-2xl">📍</span>
                    <span>
                        Hẻm 317, đường Hùng Vương, tổ 8,<br>
                        Khu phố Phước Kiểng, Xã Nhơn Trạch,<br>
                        Tỉnh Đồng Nai, Việt Nam
                    </span>
                </li>

                <li class="flex gap-4">
                    <span class="text-2xl">📞</span>
                    <span>
                        <strong>Hotline:</strong>
                        <a href="tel:0932600607" class="text-blue-600 font-semibold">
                            0932 600 607
                        </a>
                    </span>
                </li>

                <li class="flex gap-4">
                    <span class="text-2xl">📧</span>
                    <span>
                        <strong>Email:</strong>
                        <a href="mailto:thuanthaodvdl@gmail.com" class="text-blue-600">
                            thuanthaodvdl@gmail.com
                        </a>
                    </span>
                </li>
            </ul>
        </div>

        <!-- FORM LIÊN HỆ -->
       <div class="bg-white rounded-3xl shadow-xl p-10">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">
                ✉️ Gửi yêu cầu cho chúng tôi
            </h2>

            <form class="space-y-5">
                <input type="text" placeholder="Họ và tên"
                       class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500">

                <input type="tel" placeholder="Số điện thoại"
                       class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500">

                <input type="email" placeholder="Email"
                       class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500">

                <textarea rows="4" placeholder="Nội dung liên hệ..."
                          class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500"></textarea>
                    {{--  <button
                        type="button"
                        onclick="alert('Cảm ơn bạn đã liên hệ! Nhà Xe Thuận Thảo sẽ phản hồi sớm nhất 🚍')"
                        class="w-full mt-6 bg-blue-600 text-white py-3 rounded-xl
                        font-semibold text-lg shadow-lg
                        hover:bg-blue-700 hover:scale-105
                        transition duration-300">

                        🚀 Gửi liên hệ
                    </button>   --}}

                
            </form>
        </div>
    </div> 
</section>
<section class="bg-blue-600 text-white py-16 text-center">
    <h2 class="text-3xl font-bold mb-4">
        🚍 Nhà Xe Thuận Thảo
    </h2>
    <p class="text-lg">
        Khởi hành đúng giờ – Phục vụ tận tâm – Đồng hành bền vững
    </p>
</section>

<!-- GOOGLE MAP -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8">
            🗺️ Bản đồ vị trí
        </h2>

        <div class="rounded-3xl overflow-hidden shadow-xl">
            <iframe
                src="https://www.google.com/maps?q=Nhơn%20Trạch%20Đồng%20Nai&output=embed"
                class="w-full h-[450px]"
                loading="lazy">
            </iframe>
        </div>
    </div>
    <!-- NÚT LIÊN HỆ NỔI -->
<div class="fixed bottom-6 right-6 z-50 flex flex-col gap-4">

    <!-- GỌI ĐIỆN -->
    <a href="tel:0932600607"
       class="w-14 h-14 bg-red-600 rounded-full flex items-center justify-center shadow-lg animate-bounce hover:scale-110 transition">
        📞
    </a>

    <!-- ZALO -->
    <a href="https://zalo.me/0932600607" target="_blank"
       class="w-14 h-14 bg-blue-500 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition">
        💬
    </a>

</div>

</section>
@endsection
