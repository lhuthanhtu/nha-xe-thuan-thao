@extends('layouts.app')

@section('content')

<style>
@keyframes fadeSlide {
    0% { opacity: 1; }
    13% { opacity: 1; }
    16% { opacity: 0; }    
    100% { opacity: 0; }
}

.hero-slide {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0;
    animation: fadeSlide 30s infinite;
}
.hero-slide:nth-child(1) { animation-delay: 0s; }
.hero-slide:nth-child(2) { animation-delay: 5s; }
.hero-slide:nth-child(3) { animation-delay: 10s; }
.hero-slide:nth-child(4) { animation-delay: 15s; }
.hero-slide:nth-child(5) { animation-delay: 20s; }
.hero-slide:nth-child(6) { animation-delay: 25s; }
</style>

<!-- HERO SLIDER -->
<section class="relative h-[90vh] overflow-hidden text-white">
    <div class="hero-slide" style="background-image:url('{{ asset('images/bus1.jpg') }}')"></div>
    <div class="hero-slide" style="background-image:url('{{ asset('images/bus2.jpg') }}')"></div>
    <div class="hero-slide" style="background-image:url('{{ asset('images/bus3.jpg') }}')"></div>
    <div class="hero-slide" style="background-image:url('{{ asset('images/bus4.jpg') }}')"></div>
    <div class="hero-slide" style="background-image:url('{{ asset('images/bus5.jpg') }}')"></div>
    <div class="hero-slide" style="background-image:url('{{ asset('images/bus6.jpg') }}')"></div>
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 h-full flex items-center justify-center text-center px-6">
        <div>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 drop-shadow">
                NHÀ XE - THUẬN THẢO 🚍 <br>
                <span class="text-yellow-400">Đặt Vé Nhanh – Đi An Tâm</span>
            </h1>
            <p class="text-lg md:text-xl mb-8 opacity-90">
                Xe đời mới • Giá tốt • Hỗ trợ 24/7
            </p>
            <a href="{{ route('booking') }}"
               class="inline-block bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-10 py-4 rounded-full text-lg transition transform hover:scale-105">
                👉 ĐẶT VÉ NGAY
            </a>
        </div>
    </div>
</section>

<!-- ƯU ĐIỂM -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-14">
            Tại sao khách chọn nhà xe THUẬN-THẢO?
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-white p-8 rounded-2xl shadow hover:-translate-y-2 transition">
                <div class="text-5xl mb-4">🕒</div>
                <h3 class="text-xl font-bold mb-2">Đúng giờ tuyệt đối</h3>
                <p class="text-gray-600">
                    "Chúng tôi trân trọng thời gian của bạn. Với Thuận Thảo, 'đúng giờ' không chỉ là một cam kết, mà là tiêu chuẩn hàng đầu. Lịch trình khởi hành luôn được đảm bảo chính xác, giúp bạn chủ động hoàn toàn cho mọi kế hoạch cá nhân."
                    <p class="font-bold text-xl bg-gradient-to-r from-red-600 via-orange-500 to-yellow-400 bg-clip-text text-transparent drop-shadow-sm">
                        Khởi hành đúng lúc - Cập bến đúng hẹn.
                    </p>
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow hover:-translate-y-2 transition">
                <div class="text-5xl mb-4">🚌</div>
                <h3 class="text-xl font-bold mb-2">Xe đời mới</h3>
                <p class="text-gray-600">
                    "Trải nghiệm không gian di chuyển hiện đại với hệ thống xe đời mới nhất. Ghế ngồi bọc da cao cấp, máy lạnh đa chiều và không gian luôn được khử khuẩn sạch sẽ. Mỗi chuyến đi là một khoảng thời gian thư giãn tuyệt đối dành cho bạn."
                    <p class="font-bold text-xl bg-gradient-to-r from-red-600 via-orange-500 to-yellow-400 bg-clip-text text-transparent drop-shadow-sm">
                        Xe sang, ghế xịn, hành trình bình an.
                    </p>
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow hover:-translate-y-2 transition">
                <div class="text-5xl mb-4">☎️</div>
                <h3 class="text-xl font-bold mb-2">Hỗ trợ 24/7</h3>
                <p class="text-gray-600">
                    "Bất kể bạn ở đâu hay khi nào, đội ngũ chăm sóc khách hàng của Thuận Thảo luôn sẵn sàng lắng nghe và hỗ trợ. Từ đặt vé đến giải quyết các vấn đề phát sinh, chúng tôi đồng hành cùng bạn trên mọi nẻo đường bằng sự nhiệt huyết và chuyên nghiệp."
                    <p class="font-bold text-xl bg-gradient-to-r from-red-600 via-orange-500 to-yellow-400 bg-clip-text text-transparent drop-shadow-sm">
                        Luôn lắng nghe, luôn thấu hiểu, mọi lúc mọi nơi.
                    </p>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- TUYẾN NỔI BẬT -->
<section class="bg-gray-50 py-20">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">
            🚍 Tuyến xe nổi bật
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- ITEM 1 -->
            <div class="group bg-white rounded-2xl p-8 shadow hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-orange-500 text-4xl mb-4">🚌</div>
                <h3 class="text-xl font-semibold mb-2">
                    Nhơn Trạch → Cà Mau
                </h3>
                <p class="text-gray-500 mb-4">
                    Giường nằm cao cấp · Điều hòa · Wifi
                </p>
                <div class="text-2xl font-bold text-red-500 mb-6">
                    Từ 250.000đ
                </div>
                <a href="{{ route('booking') }}"
                   class="inline-block w-full text-center bg-orange-500 text-white py-3 rounded-xl font-semibold hover:bg-orange-600 transition">
                    Đặt vé ngay
                </a>
            </div>

            <!-- ITEM 2 -->
            <div class="group bg-white rounded-2xl p-8 shadow hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-blue-500 text-4xl mb-4">🚐</div>
                <h3 class="text-xl font-semibold mb-2">
                    Nhơn Trạch → Long An
                </h3>
                <p class="text-gray-500 mb-4">
                    Xe mới · Ghế ngả · Chạy đúng giờ
                </p>
                <div class="text-2xl font-bold text-red-500 mb-6">
                    Từ 180.000đ
                </div>
                <a href="{{ route('booking') }}"
                   class="inline-block w-full text-center bg-blue-500 text-white py-3 rounded-xl font-semibold hover:bg-blue-600 transition">
                    Đặt vé ngay
                </a>
            </div>

            <!-- ITEM 3 -->
            <div class="group bg-white rounded-2xl p-8 shadow hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-green-500 text-4xl mb-4">🚍</div>
                <h3 class="text-xl font-semibold mb-2">
                    Sài Gòn → Cà Mau
                </h3>
                <p class="text-gray-500 mb-4">
                    Cao tốc · An toàn · Phục vụ tận tâm
                </p>
                <div class="text-2xl font-bold text-red-500 mb-6">
                    Từ 300.000đ
                </div>
                <a href="{{ route('booking') }}"
                   class="inline-block w-full text-center bg-green-500 text-white py-3 rounded-xl font-semibold hover:bg-green-600 transition">
                    Đặt vé ngay
                </a>
            </div>
        </div>
    </div>
</section>


<!-- CTA -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-700 py-20 text-white text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">
        Sẵn sàng cho chuyến đi tiếp theo?
    </h2>
    <a href="{{ route('booking') }}"
       class="inline-block bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-12 py-4 rounded-full text-lg transition transform hover:scale-110">
        🚀 ĐẶT VÉ NGAY
    </a>
</section>

@endsection
