<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    use HasFactory;

    protected $fillable = [
    	'heading',
    	'annual_revenue',
    	'baseline_revenue',
    	'pricing_premium',
    	'short_description',
    	'images'
    ];
}
