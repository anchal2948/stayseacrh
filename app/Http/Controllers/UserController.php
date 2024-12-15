<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\Booking;
use Auth;

class UserController extends Controller
{
    public function dashboard()
    {
    	return view('user.dashboard');
    }

    public function profile()
    {
    	return view('user.profile.profile');
    }

    public function privacy_policy()
    {
    	$privacy = PrivacyPolicy::first();

    	return view('user.privacy-policy.list',compact('privacy'));
    }
    
    public function bookings()
    {
        $bookings = Booking::with('property')->where('user_id',Auth::guard('web')->user()->id)->paginate(10);

        return view('user.bookings.list',compact('bookings'));
    }
}
