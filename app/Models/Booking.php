<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $fillable = [
        'ho_ten',
        'so_dien_thoai',
        'diem_di',
        'diem_den',
        'ngay_di',
    ];
}
