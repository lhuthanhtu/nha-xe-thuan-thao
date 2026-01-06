@extends('layouts.app')

@section('title', 'Sửa vé')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

    <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">
        Sửa vé
    </h2>

    <form method="POST" action="{{ route('admin.booking.update', $booking->id) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold">Họ tên</label>
            <input type="text" name="ho_ten"
                   value="{{ old('ho_ten', $booking->ho_ten) }}"
                   class="w-full border px-3 py-2 rounded">
        </div>

        <div>
            <label class="block font-semibold">SĐT</label>
            <input type="text" name="so_dien_thoai"
                   value="{{ old('so_dien_thoai', $booking->so_dien_thoai) }}"
                   class="w-full border px-3 py-2 rounded">
        </div>

        <div>
            <label class="block font-semibold">Điểm đi</label>
            <input type="text" name="diem_di"
                   value="{{ old('diem_di', $booking->diem_di) }}"
                   class="w-full border px-3 py-2 rounded">
        </div>

        <div>
            <label class="block font-semibold">Điểm đến</label>
            <input type="text" name="diem_den"
                   value="{{ old('diem_den', $booking->diem_den) }}"
                   class="w-full border px-3 py-2 rounded">
        </div>

        <div>
            <label class="block font-semibold">Ngày đi</label>
            <input type="date" name="ngay_di"
                   value="{{ old('ngay_di', $booking->ngay_di) }}"
                   class="w-full border px-3 py-2 rounded">
        </div>

        <div class="flex justify-between items-center pt-4">
            <a href="{{ route('admin.booking.index') }}"
               class="text-gray-600 hover:underline">
               ← Quay lại
            </a>

            <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
                Lưu thay đổi
            </button>
        </div>

    </form>
</div>
@endsection
