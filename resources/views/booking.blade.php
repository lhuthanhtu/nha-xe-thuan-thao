@extends('layouts.app')

@section('title', 'Đặt vé')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

    <h2 class="text-2xl font-bold text-center text-red-500 mb-6">
        Trang đặt vé
    </h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif    
        <form method="POST" action="{{ route('booking.store') }}" class="space-y-4">
    @csrf

    <div>
        <label>Họ tên</label>
        <input type="text" name="ho_ten" class="w-full border px-3 py-2 rounded">
    </div>

    <div>
        <label>Số điện thoại</label>
        <input type="text" name="so_dien_thoai" class="w-full border px-3 py-2 rounded">
    </div>

    <div>
        <label>Điểm đi</label>
        <input type="text" name="diem_di" class="w-full border px-3 py-2 rounded">
    </div>

    <div>
        <label>Điểm đến</label>
        <input type="text" name="diem_den" class="w-full border px-3 py-2 rounded">
    </div>

    <div>
        <label>Ngày đi</label>
        <input type="date" name="ngay_di" class="w-full border px-3 py-2 rounded">
    </div>

    <button class="w-full bg-blue-600 text-white py-2 rounded">
        Đặt vé
    </button>
</form>


</div>
@endsection
