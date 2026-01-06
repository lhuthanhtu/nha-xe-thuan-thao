<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
class BookingController extends Controller
{
    public function index()
    {
        return view('booking');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'ho_ten'        => 'required|min:3',
            'so_dien_thoai' => 'required|min:9',
            'diem_di'       => 'required',
            'diem_den'      => 'required',
            'ngay_di'       => 'required|date|after_or_equal:today',
        ], [
            'ho_ten.required' => 'Vui lòng nhập họ tên',
            'so_dien_thoai.required' => 'Vui lòng nhập số điện thoại',
            'ngay_di.after_or_equal' => 'Ngày đi không được nhỏ hơn hôm nay',
        ]);

        Booking::create($data);

        return back()->with('success', 'Đặt vé thành công!');
    }
    public function list()
    {
        $bookings = Booking::all();
        return view('admin.booking_list', compact('bookings'));
    }
    public function edit($id)
    {
     $booking = \App\Models\Booking::findOrFail($id);
    return view('admin.booking_edit', compact('booking'));
    }

public function update(Request $request, $id)
    {
    $booking = Booking::findOrFail($id);

    $data = $request->validate([
        'ho_ten' => 'required|min:3',
        'so_dien_thoai' => 'required|min:9',
        'diem_di' => 'required',
        'diem_den' => 'required',
        'ngay_di' => 'required|date|after_or_equal:today',
    ]);

    $booking->update($data);

    return redirect('/admin/dat-ve')->with('success', 'Đã cập nhật vé');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return back()->with('success','đã xóa thành công');
    }
}
