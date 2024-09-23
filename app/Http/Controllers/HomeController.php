<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Models\Portfolio;
use App\Models\Services;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
 
use App\Mail\SendMail;
use App\Models\Seo;
use App\Models\Youtube;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    // public function send_mail()
    // {
    //     $details = [
    //         'title' => 'Mail from Laravel 11',
    //         'body' => 'This is for testing email using smtp.'
    //     ];

    //     Mail::to('khazinacollection1@gmail.com')->send(new TestMail($details));

    //     return "Email Sent successfully!";

    //     print_r($details);
    //     echo "1";
    //     die;
    // }
    public function index(){
        $wp_portfolio = Portfolio::where('category','WordPress')->orderBy('id','ASC')->limit(4)->get();
        $shopify_portfolio = Portfolio::where('category','Shopify')->orderBy('id','ASC')->limit(4)->get();
        $custom_portfolio = Portfolio::where('category','Custom Web Development')->orderBy('id','ASC')->limit(4)->get();
        $services = Services::orderBy('id','ASC')->get();
        $categories = Services::orderBy('id','ASC')->pluck('category');
        $seo = Seo::where('page','home')->orderBy('id','ASC')->first();
        return view('index',[
            'wp_portfolio' => $wp_portfolio,
            'shopify_portfolio' => $shopify_portfolio,
            'custom_portfolio' => $custom_portfolio,
            'services' => $services,
            'categories' => $categories,
            'seo' => $seo,
        ]);
    }

    public function about(){
        $categories = Services::orderBy('id','ASC')->pluck('category');
        $seo = Seo::where('page','about')->orderBy('id','ASC')->first();
        return view('about',[ 
            'categories' => $categories,
            'seo' => $seo,
        ]);
    }

    public function services(){
        $services = Services::orderBy('id','ASC')->get();
        $categories = Services::orderBy('id','ASC')->pluck('category');
        $seo = Seo::where('page','services')->orderBy('id','ASC')->first();
        return view('services', [
            'services' => $services,
            'categories' => $categories,
            'seo' => $seo,
        ]);
    }

    public function service_detail($category){
        $categories = Services::orderBy('id','ASC')->pluck('category');
        $service = Services::where('category',$category)->first();
        $seo = Services::where('category',$category)->first();
        return view('service_detail', [
            'service' => $service,
            'categories' => $categories,
            'seo' => $seo,
        ]);
    }

    public function portfolio($category){
        if($category=='all'){
            $portfolio = Portfolio::orderBy('id','DESC')->get();
        }else if($category=='business_coaches'){
            $portfolio = Portfolio::where('industry','Business Coaches')->orderBy('id','DESC')->get();
        }else if($category=='lawyer'){
            $portfolio = Portfolio::where('industry','Law Firm')->orderBy('id','DESC')->get();
        }
        $categories = Services::orderBy('id','ASC')->pluck('category');
        $seo = Seo::where('page','portfolio')->orderBy('id','ASC')->first();
        return view('portfolio',[
            'portfolio' => $portfolio,
            'categories' => $categories,
            'seo' => $seo,
        ]);
    }

    public function portfolio_detail($slug){
        $portfolio = Portfolio::where('slug',$slug)->first();
        $categories = Services::orderBy('id','ASC')->pluck('category');
        $seo = Portfolio::where('slug',$slug)->first();
        return view('portfolio_detail', [
            'portfolio' => $portfolio,
            'categories' => $categories,
            'seo' => $seo,
        ]);

    }

    public function blog(){
        $categories = Services::orderBy('id','ASC')->pluck('category');
        $blog = Blog::orderBy('id','ASC')->get();
        $seo = Seo::where('page','blog')->orderBy('id','ASC')->first();
        return view('blog',[
            'categories' => $categories,
            'blog' => $blog,
            'seo' => $seo,
        ]);
    }

    public function blog_detail($slug) {
        // Retrieve the specific blog by slug
        $blog = Blog::where('slug', $slug)->first();

        $seo = Blog::where('slug',$slug)->first();
    
        // Retrieve the 10 most recent blogs with only specific columns, excluding the current blog
        $recent_blogs = Blog::where('id', '!=', $blog->id)->select('title', 'banner_image', 'created_at', 'slug')->orderBy('created_at', 'desc')->limit(10)->get();
        
        // Retrieve categories
        $categories = Services::orderBy('id', 'ASC')->pluck('category');
        
        // Return the view with the blog, recent blogs, and categories
        return view('blog_detail', [
            'blog' => $blog,
            'recent_blogs' => $recent_blogs,
            'categories' => $categories,
            'seo' => $seo,
        ]);
    }
    
    public function youtube(){
        $categories = Services::orderBy('id','ASC')->pluck('category');
        $youtube = Youtube::orderBy('id','ASC')->get();
        $seo = Seo::where('page','youtube')->orderBy('id','ASC')->first();
        return view('youtube',[
            'categories' => $categories,
            'youtube' => $youtube,
            'seo' => $seo,
        ]);
    }

    public function youtube_blog_detail($slug) {
        // Retrieve the specific blog by slug
        $youtube = Youtube::where('slug', $slug)->first();
        $seo = Youtube::where('slug',$slug)->first();

    
        // Retrieve the 10 most recent blogs with only specific columns, excluding the current blog
        $recent_blogs = Blog::where('id', '!=', $youtube->id)->select('title', 'banner_image', 'created_at', 'slug')->orderBy('created_at', 'desc')->limit(10)->get();
        
        // Retrieve categories
        $categories = Services::orderBy('id', 'ASC')->pluck('category');
        
        // Return the view with the blog, recent blogs, and categories
        return view('youtube_blog_detail', [
            'youtube' => $youtube,
            'recent_blogs' => $recent_blogs,
            'categories' => $categories,
            'seo' => $seo,
        ]);
    }
    
    public function contact(){
        $categories = Services::orderBy('id','ASC')->pluck('category');
        $seo = Seo::where('page','youtube')->orderBy('id','ASC')->first();
        return view('contact',[
            'categories' => $categories,
            'seo' => $seo,
        ]);
    }

    public function refer_and_earn(){
        $categories = Services::orderBy('id','ASC')->pluck('category');
        $seo = Seo::where('page','refer_and_earn')->orderBy('id','ASC')->first();
        return view('refer_and_earn',[
            'categories' => $categories,
            'seo' => $seo,
        ]);
    }

    public function store_contact(Request $request){

        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns',
            'phone' => 'nullable|regex:/^\+?[0-9]{7,15}$/',
            'category' => 'required',
            'budget' => 'required',
            'project_detail' => 'required|string|min:100'
        ];


         // Validate the request data
         $validatedData = $request->validate($rules);

         date_default_timezone_set('Asia/Karachi');

        // Create a DateTime object with the current time in Pakistan
        $now = new DateTime();

        // Format the time as per your requirement (optional)
        $current_time = $now->format('Y-m-d H:i:s');
 
         // Create a new user instance and assign validated data
         $user = new Contact();
         $user->name = $validatedData['name'];
         $user->email = $validatedData['email'];
         $user->phone = $validatedData['phone'];
         $user->category = $validatedData['category'];
         $user->budget = $validatedData['budget'];
         $user->project_detail = $validatedData['project_detail'];
         $user->created_at = $current_time;
         $user->updated_at = $current_time;
 
         // Save the user data to the database
         $user->save();
 
         $newsletter = new Newsletter();
         $newsletter->email = $validatedData['email'];
         $newsletter->created_at = $current_time;
         $newsletter->updated_at = $current_time;
         $newsletter->save();

        $details = [
            'name' => $user->name,
            'subject' => "Your request for free consultation call with Shahrukh Developer submited successfully",
            'content' =>  '
            <p>Thank you for contacting <span class="gradient">Shahrukh Developer!</span></p>
            <p>I have received your request for a free consultation call. You will receive a confirmation message on your email within 24 hours.</p>
            <p>I appreciate your interest and look forward to assisting you with your needs.</p>',
        ];

        Mail::to($user->email)->send(new SendMail($details));

         // Return JSON response for AJAX request
        return response()->json([
            'success' => true,
            'message' => 'Your request is submitted successfully. Please check your email.',
        ]);
    }

    public function store_newsletter(Request $request){
        $rules = [
            'email' => 'required|email:rfc,dns',
        ];
        // Validate the request data
        $validatedData = $request->validate($rules);
        // Create a DateTime object with the current time in Pakistan
        date_default_timezone_set('Asia/Karachi');

        $now = new DateTime();
        // Format the time as per your requirement (optional)
        $current_time = $now->format('Y-m-d H:i:s');
        // Create a new user instance and assign validated data
        $newsletter = new Newsletter();
        $newsletter->email = $validatedData['email'];
        $newsletter->created_at = $current_time;
        $newsletter->updated_at = $current_time;
        // Save the newsletter data to the database
        $newsletter->save();
        // Redirect back to the referring page with a success message
        return redirect()->route('home.index')->with('success', 'Your successfully subscribed to newsletter');
    }
}
