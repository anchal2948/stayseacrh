<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\Property;
use App\Models\Blog;
use App\Models\AboutUs;
use App\Models\TermsCondition;
use App\Models\SuccessStory;
use App\Models\Booking;

class HostController extends Controller
{
    public function dashboard()
    {
    	return view('host.dashboard');
    }

    public function add_property()
    {
    	return view('host.property.add-property');
    }

    public function create_property(Request $request)
    {
    	$validate = Validator::make($request->all(),[
			"title" => 'required',
			"listing_type" => 'required',
			"description" => 'required'
		])->validate();

    	$data = $request->all();

        $imagesPath = [];
        foreach ($request->file('property_images') as $file) {
            $path = $file->store('property/images','public');
            $imagesPath[] = $path;
        }

    	unset($data['_token']);
    	unset($data['property_images']);

    	$data['images'] = json_encode($imagesPath);
        $data['host_id'] = Auth::guard('host')->user()->id;
        $data['price_from'] = json_encode($data['price_from']);
        $data['price_to'] = json_encode($data['price_to']);
        $data['from_to_price'] = json_encode($data['from_to_price']);
        $data['amenities'] = json_encode($data['amenities']);
        $data['min_stay'] = json_encode($data['min_stay']);

        // dd($data);
    	$insert = Property::create($data);

    	if($insert)
    		return redirect()->back()->with('success','Property Added Successfully');
    	else
    		return redirect()->back()->withErrors('error','Something went wrong');
    }

    public function properties()
    {
    	$properties = Property::where('host_id',Auth::guard('host')->user()->id)
                                ->get()
                                ->map(function($item){
                                    $item['amenities'] = json_decode($item['amenities']);
                                    $item['price_from'] = json_decode($item['price_from']);
                                    $item['price_to'] = json_decode($item['price_to']);
                                    $item['from_to_price'] = json_decode($item['from_to_price']);
                                    $item['images'] = json_decode($item['images']);

                                    return $item;
                                });

    	return view('host.property.list',compact('properties'));
    }


    // Blogs
    public function blogs()
    {
        $blogs = Blog::select('*')->paginate(10);
        return view('host.blog.list',compact('blogs'));
    }

    public function create_blog()
    {
        return view('host.blog.create');
    }

    public function add_blog(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'heading' => 'required',
            'description' => 'required'
            // 'blog_image' => 'required|image:jpeg,jpg,png'
        ])->validate();

        $data = [];

        if($request->hasFile('blog_image'))
        {
            $path = $request->file('blog_image')->store('images/blogs','public');

            $data['image'] = $path;
        }

        $data['heading'] = $request->heading;
        $data['description'] = $request->description;

        $create = Blog::create($data);

        if($create)
            return redirect()->back()->with('success','Blog Added');
        else
            return redirect()->back()->withErrors('error','Something went wrong');
    }

    public function aboutus()
    {
        $aboutus = AboutUs::select('*')->paginate(10);
        return view('host.aboutus.list',compact('aboutus'));
    }

    public function create_about()
    {
        return view('host.aboutus.create');
    }

    public function add_about(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'heading' => 'required',
            'description' => 'required',
            'about_image' => 'required|image:jpeg,jpg,png'
        ])->validate();

        $data = [];

        if($request->hasFile('about_image'))
        {
            $path = $request->file('about_image')->store('images/about','public');

            $data['image'] = $path;
        }

        $data['heading'] = $request->heading;
        $data['description'] = $request->description;

        $create = AboutUs::updateOrCreate(['id' => 1],$data);

        if($create)
            return redirect()->back()->with('success','About us updated');
        else
            return redirect()->back()->withErrors('error','Something went wrong');
    }

    public function termsconditions()
    {
        $terms = TermsCondition::first();

        return view('host.terms-condition.list',compact('terms'));
    }

    public function create_terms()
    {
        return view('host.terms-condition.create');
    }

    public function add_terms(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'heading' => 'required',
            'description' => 'required'
        ])->validate();

        $data['heading'] = $request->heading;
        $data['description'] = $request->description;

        $create = TermsCondition::updateOrCreate(['id' => 1],$data);

        if($create)
            return redirect()->back()->with('success','Terms & Conditions updated');
        else
            return redirect()->back()->withErrors('error','Something went wrong');
    }

    public function success_story()
    {
        $success = SuccessStory::get()->map(function($item){
            $item['images'] = json_decode($item['images']);

            return $item;
        });
        return view('host.success-story.list',compact('success'));
    }

    public function create_success()
    {
        return view('host.success-story.create');
    }

    public function add_success(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'heading' => 'required',
            'annual_revenue' => 'required',
            'baseline_revenue' => 'required',
            'pricing_premium' => 'required',
            'short_description' => 'required',
            'success_images' => 'required',
            'success_images.*' => 'mimes:jpg,jpeg,png'
        ])->validate();

        $data = $request->all();

        if($request->hasFile('success_images'))
        {
            $data['images'] = [];

            foreach($request->file('success_images') as $file)
            {
                $data['images'][] = $file->store('images/story','public');
            }

            $data['images'] = json_encode($data['images']);
        }

        unset($data['_token']);
        unset($data['success_images']);

        $Insert = SuccessStory::updateOrCreate(['id' => 1],$data);

        if($Insert)
            return redirect()->back()->with('success','Success Story Updated');
        else
            return redirect()->back()->withErrors('error','Something went wrong');
    }

    public function bookings()
    {
        $bookings = Booking::with('user','property')->paginate(10);

        return view('host.bookings.list',compact('bookings'));
    }
}