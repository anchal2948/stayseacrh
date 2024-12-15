<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'host_id',
    	'place_type',
    	'title',
    	'description',
    	'listing_type',
    	'bedrooms',
    	'guests',
    	'beds',
    	'bathrooms',
    	'rooms',
    	'size',
    	'measure_unit',
    	'affiliate_booking_link',
    	'phone',
        'price_from',
        'price_to',
        'from_to_price',
    	'one_night_price',
    	'after_price_label',
    	'weekend_price_per_day',
    	'weekend_days',
    	'weekly_price_per_day',
    	'monthly_price_per_day',
    	'service_name',
    	'service_price',
    	'service_fee_type',
    	'additional_guests',
    	'price_per_guest',
    	'number_of_guests',
    	'cleaning_fee',
    	'cleaning_fee_type',
    	'city_fee',
    	'city_fee_type',
    	'security_deposit',
    	'images',
        'amenities_description',
        'amenities',
        'smoking_allowed',
        'pets_allowed',
        'party_allowed',
        'children_allowed',
        'fees',
        'tax',
        'youtube_url',
        'location',
        'cancellation_policy',
        'min_stay',
        'default_price',
        'default_min_stay',
        'latitude',
        'longitude'
    ];
}