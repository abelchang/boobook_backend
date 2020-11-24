<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
	use HasFactory;

	protected $fillable = ['checkin', 'checkout', 'customer', 'room',
		'status', 'orderPlace', 'price', 'phone', 'memo', 'address',
		'placeOfBirth', 'birthday', 'idCard', 'backPay'];
}
