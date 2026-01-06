@extends('layouts.admin')

@section('title', 'Danh sách vé')

@section('content')
<div class="max-w-6xl mx-auto">

    <h1 class="text-2xl font-bold mb-6">
        Danh sách vé đã đặt
    </h1>

    <div class="bg-white shadow rounded p-4">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-2 border">ID</th>
                    <th class="p-2 border">Họ tên</th>
                    <th class="p-2 border">SDT</th>
                    <th class="p-2 border">Điểm đi</th>
                    <th class="p-2 border">Điểm đến</th>
                    <th class="p-2 border">Ngày đi</th>
                    <th class="p-2 border text-center">Hành động</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($bookings as $b)
                <tr class="hover:bg-gray-50">
                    <td class="p-2 border">{{ $b->id }}</td>
                    <td class="p-2 border">{{ $b->ho_ten }}</td>
                    <td class="p-2 border">{{ $b->so_dien_thoai }}</td>
                    <td class="p-2 border">{{ $b->diem_di }}</td>
                    <td class="p-2 border">{{ $b->diem_den }}</td>
                    <td class="p-2 border">{{ $b->ngay_di }}</td>

                    <!-- HÀNH ĐỘNG -->
                    <td class="p-2 border">
                        <div class="flex gap-2 justify-center">

                            <!-- SỬA -->
                            <a href="{{ route('admin.booking.edit', $b->id) }}"
                               class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                Sửa
                            </a>

                            <!-- XOÁ -->
                            <form action="{{ route('admin.booking.destroy', $b->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Xóa vé này nha?')">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                    Xóa
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
