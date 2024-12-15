<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
    	'user_id',
    	'checkin_date',
    	'checkout_date',
    	'price_per_day',
    	'total_price',
        'property_id',
        'message'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}