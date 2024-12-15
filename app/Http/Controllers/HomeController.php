<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Blog;
use App\Models\TermsCondition;
use Carbon\Carbon;
use App\Models\SuccessStory;
use Validator;
use Auth;
use App\Models\Booking;

class HomeController extends Controller
{
    public function index()
    {
    	$properties = Property::take(8)
                            ->orderByDesc('id')
    						->get()
    						->map(function($item){
    							$item['images'] = json_decode($item['images']);

    							return $item;
    						});

        $filter_locations = Property::select('location')->distinct('location')->get();
        
    	return view('user.index',compact('properties','filter_locations'));
    }

    public function blogs()
    {
    	$blogs = Blog::get();

    	return view('user.blogs.list',compact('blogs'));
    }

    public function termsconditions()
    {
        $terms = TermsCondition::first();

        return view('user.terms-conditions.terms-conditions',compact('terms'));
    }

    public function properties(Request $request)
    {
        $locations = [];
        $i = 0;
        $properties = Property::select('*');

        if($request->location)
            $properties = $properties->where('location',$request->location);

        $properties = $properties->orderByDesc('id')
                            ->get()
                            ->map(function($item) use (&$locations,&$i){
                                $item['images'] = json_decode($item['images']);

                                $locations[$i]['lat'] = $item['latitude'];
                                $locations[$i]['lon'] = $item['longitude'];

                                $i++;
                                return $item;
                            });

        $filter_locations = Property::select('location')->distinct('location')->get();

        return view('user.properties.properties',compact('properties','locations','filter_locations'));
    }

    public function findout()
    {
        $properties = Property::take(3)
                            ->get()
                            ->map(function($item){
                                $item['images'] = json_decode($item['images']);

                                return $item;
                            });

        $success = SuccessStory::first();

        return view('user.findout.findout',compact('properties','success'));
    }

    public function luxury_management()
    {
        $properties = Property::take(3)
                            ->get()
                            ->map(function($item){
                                $item['images'] = json_decode($item['images']);

                                return $item;
                            });

        $success = SuccessStory::first();

        return view('user.luxury.luxury',compact('properties','success'));
    }

    public function property_detail($id)
    {
        $eventsdata = [];
        $events = [];
        $property_detail = Property::where('id',$id)->get()->map(function($item) use (&$eventsdata){
            $item['price_from'] = json_decode($item['price_from']);
            $item['price_to']= json_decode($item['price_to']);
            $item['from_to_price'] = json_decode($item['from_to_price']);
            $item['amenities'] = json_decode($item['amenities']) ?? [];
            $item['min_stay'] = json_decode($item['min_stay']) ?? [];

            foreach($item['price_from'] as $key => $from)
            {
                $eventsdata['start'][] = $from;
                $eventsdata['end'][] = $item['price_to'][$key];
                $eventsdata['price'][] = $item['from_to_price'][$key];
                $eventsdata['min_stay'] = $item['min_stay'][$key];
            }

            $item['images'] = json_decode($item['images']);

            return $item;
        });

        $property_detail = $property_detail[0];

        foreach ($eventsdata['start'] as $index => $startDate) {
            $startDate = Carbon::parse($startDate)->toDateString();  // Convert to Date String
            $endDate = Carbon::parse($eventsdata['end'][$index])->toDateString();  // Convert to Date String
            $price = $eventsdata['price'][$index];
            $min_stay = $eventsdata['min_stay'][$index];

            // Create the event
            $events[] = [
                'title' => '$' . number_format($price, 2),  // Add the price as title
                'start' => $startDate,  // Event start date
                'end' => $endDate,  // Event end date
                'price' => $price,  // Store the price for reference
                'min_stay' => $min_stay
            ];
        }

        $default_price = $property_detail->default_price;
        $default_min_stay = $property_detail->default_min_stay;

        return view('user.properties.property-details',compact('property_detail','events','default_price','default_min_stay','default_min_stay'));
    }

    public function blog_detail($id)
    {
        $blog = Blog::find($id);

        return view('user.blogs.blog-detail',compact('blog'));
    }

    public function request_to_book(Request $request)
    {
        if(!Auth::check())
            return $this->sendError("You have to login first",'',401);

        $validate = Validator::make($request->all(),[
            'checkin' => 'required',
            'checkout' => 'required',
            'average' => 'required',
            'total' => 'required',
            'message' => 'required'
        ]);

        if($validate->fails())
            return $this->sendError(array_values($validate->errors()->toArray())[0][0],'',400);

        $data['user_id'] = Auth::user()->id;
        $data['checkin_date'] = $request->checkin;
        $data['checkout_date'] = $request->checkout;
        $data['price_per_day'] = str_replace('$','',$request->average);
        $data['total_price'] = str_replace('$','',$request->total);
        $data['property_id'] = $request->property_id;
        $data['message'] = $request->message;

        $insert = Booking::create($data);

        if($insert)
            return $this->sendResponse([],'Request Sent. We will contact you soon');
    }
}