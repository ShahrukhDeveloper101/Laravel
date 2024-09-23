<?php

namespace App\Http\Controllers;

 
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Emails;
use App\Models\Newsletter;
use App\Models\Portfolio;
use App\Models\Seo;
use App\Models\Services;


use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

use App\Models\Youtube;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(){
        return view('admin/login');
    }
    public function dashboard(){
        $portfolio = Portfolio::count();
        $contact = Contact::count();
        $newsletter = Newsletter::count();
        $blog = Blog::count();
        $service = Services::count();
        $emails = Emails::count();
        return view('admin/index',
            ['portfolios' => $portfolio,
            'contact' => $contact,
            'newsletter'=>$newsletter,
            'blogs' => $blog,
            'services' => $service,
            'emails' => $emails
            ]
        ); 
    }
    public function contact(){
        $contact = Contact::orderBy('created_at','DESC')->get();
        return view('admin/contact', ['contact' => $contact]);
    }
    public function all_emails(){
        $emails = Emails::orderBy('id','ASC')->get();
        return view('admin/manage_emails', ['emails' => $emails]);
    }
    public function delete_email($id){
        $email = Emails::findOrFail($id);
        $email->delete();
        return redirect()->route('admin.all_emails')->with('success'.'Email Deleted successfully');
 
    }
    public function emails($column) {
        // Ensure the column is one of the valid columns
        $validColumns = [
            'first_email_date',
            'first_followUp_date',
            'second_followUp_date',
            'third_followUp_date',
            'fourth_followUp_date',
            'fifth_followUp_date'
        ];
    
        if (!in_array($column, $validColumns)) {
            abort(404); // Or handle the error as you prefer
        }
    
        // Match today's date in the specified column
     
        $todayDate = date("d m y");

        
        $emails = Emails::where($column, $todayDate)->get();
    
        return view('admin/manage_emails', ['emails' => $emails]);
    }

    public function startEmailing(Request $request) {
        $segment = $request->input('segment');
        $modifiedSegment = $request->input('modifiedSegment');
        $todayDate = date("d m y");
 
        // echo $modifiedSegment;die;
        // // Get records that match the segment and today's date
        $emails = Emails::where($segment, $todayDate)->where($modifiedSegment, '')->get();
    
        if ($emails->isEmpty()) {
            echo 'No emails found to send';
        }
    
        // // Email sending logic
        $count = 0;
        $maxIterations = 10;
 

        for ($i = 0; $i < count($emails) && $i < $maxIterations; $i++) {
            $count++;
            $key = $emails[$i];

            $name = $key->name;
            if(empty($name)){
                $name = "";
            }
            if($segment=='first_email_date'){
                $details = [

                    'name' => $name,

                    'subject' => "Quick Tip to Attract More Clients",

                    'content' =>  '
                    <p>I came across your <a class="gradient" href="'.$key->website.'" target"_blank">Website</a> and was impressed by your expertise in law. I specialize in helping lawyers attract clients organically through engaging and user-friendly websites.</p>

                    <p>I\'ve made a personalized video highlighting some opportunities for improvement and suggestions. Can I send it over? What’s the best email to reach you?</p>

                    <h5>About Me:</h5>

                    <p>I\'m Shahrukh, a professional website developer with a focus on creating websites for lawyers and business consultants that generate leads.</p>

                    <p>You can check out my past work here: <a class="gradient" href="https://shahrukhdeveloper.com/portfolio" target"_blank">Portfolio</a></p>

                    <p>Looking forward to hearing from you!</p>',
                ];
            }else if($segment=='first_followUp_date'){
                $details = [
                    'name' => $name,

                    'subject' => "Insights for increasing Your clients",

                    'content' =>  '
                    <p>I hope you’re doing well.</p>

                    <p>I wanted to follow up on my previous email regarding the personalized video I mentioned. I believe the insights and recommendations in the video could be very beneficial in further enhancing your website\'s effectiveness in attracting new clients.</p>

                    <p>If you haven\'t had a chance to review it yet, I’d be happy to send it over to the best email address for you. Please let me know the most convenient way to get this information to you.</p>

                    <p>Thank you again for your time, and I’m here if you have any questions or need further assistance.</p>

                    <h5>About Me:</h5>

                    <p>I\'m Shahrukh, a professional website developer with a focus on creating websites for lawyers and business consultants that generate leads.</p>


                    <p>You can check out my past work here: <a class="gradient" href="https://shahrukhdeveloper.com/portfolio" target"_blank">Portfolio</a></p>

                    <p>Looking forward to hearing from you!</p>

                    <p style="font-size: 13px;">Please respond with a quick "No" if you want to stop these emails.</p>',
                ];
            }else if($segment=='second_followUp_date'){

            }else if($segment=='third_followUp_date'){

            }else if($segment=='fourth_followUp_date'){

            }else if($segment=='fifth_followUp_date'){

            }
            // Simulate sending email
            Mail::to($key->email)->send(new SendMail($details));
            // Send email to the recipient
 
    
            // Update the status in the database
            $key->update([$modifiedSegment => 'yes']);
        }
        return redirect()->route('admin.emails',$segment)->with('success', 'All emails sent successfully');
    }

    public function getRemainingEmails() {
        $segment = 'first_followUp_date'; // or dynamically determine this
        $todayDate = date("d m y");
    
        $remainingEmails = Emails::where($segment, $todayDate)
                                 ->where('status', '!=', 'yes') // Adjust based on your status field
                                 ->count();
    
        return response()->json(['remaining' => $remainingEmails]);
    }
    

    public function newsletter(){
        $newsletter = Newsletter::orderBy('id','ASC')->get();
        return view('admin/newsletter',['newsletter'=>$newsletter]);
    }
    public function add_portfolio(){
        $portfolio = null;
        return view('admin/add_portfolio',['portfolio'=> $portfolio]);
    }
    public function view_portfolios(){
        $portfolio = Portfolio::orderBy('id','ASC')->get();
        return view('admin/view_portfolios', ['portfolio' => $portfolio]);
    }
    public function portfolio($id){
        $portfolio = Portfolio::where('id',$id)->first();
        return view('admin/portfolio', compact('portfolio'));
    }
    public function portfolio_edit($id){
        $portfolio = Portfolio::where('id',$id)->first();
        return view('admin/add_portfolio', compact('portfolio'));
    }
    public function store_portfolio(Request $request){
        $portfolio = new Portfolio();
        $portfolio->name = $request->name;
        $portfolio->title = $request->title;
        $portfolio->industry = $request->industry;
        $portfolio->category = $request->category;
        $portfolio->project_type = $request->project_type;
        $portfolio->date = $request->date;
        $portfolio->country = $request->country;
        $portfolio->short_description = $request->short_description;
        $portfolio->main_description = $request->main_description;
        $portfolio->seo_description = $request->seo_description;
        $portfolio->tags = $request->tags;
        $portfolio->order = $request->order;
        $portfolio->slug = Str::slug($request->name.' '.$portfolio->industry);
        $portfolio->save();

        if ($request->hasFile('banner_image')) {
            $banner_image = $request->file('banner_image');
            $ext = $banner_image->getClientOriginalExtension();
            $bg_img_name = time() . '.' . $ext;

            $banner_image->move(public_path('uploads/portfolio'), $bg_img_name);

            $portfolio->banner_image = $bg_img_name;
            $portfolio->save();
        }

        $all_images = [];

        if ($request->hasFile('all_images')) {
           
            foreach ($request->file('all_images') as $file) {
                $ext = $file->getClientOriginalExtension();
                $image_name = time() . '_' . uniqid() . '.' . $ext;

                $file->move(public_path('uploads/portfolio'), $image_name);

                $all_images[] = $image_name;
            }

            // Save the array of image paths to the portfolio
            $portfolio->all_images = $all_images;
            $portfolio->save();
        }

        return redirect()->route('admin.view_portfolios')->with('success', 'Portfolio successfully inserted.');
    }
    public function update_portfolio($id, Request $request){
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->name = $request->name;
        $portfolio->title = $request->title;
        $portfolio->industry = $request->industry;
        $portfolio->category = $request->category;
        $portfolio->project_type = $request->project_type;
        $portfolio->date = $request->date;
        $portfolio->country = $request->country;
        $portfolio->short_description = $request->short_description;
        $portfolio->main_description = $request->main_description;
        $portfolio->seo_description = $request->seo_description;
        if(!empty($request->tags)){
            $portfolio->tags  = $request->tags;
        }
        $portfolio->order = $request->order;
        $portfolio->slug = Str::slug($request->name.' '.$portfolio->industry);
        $portfolio->save();

        if ($request->hasFile('banner_image')) {
            // delete old image
            File::delete(public_path('uploads/portfolio/'.$portfolio->banner_image));
            $banner_image = $request->file('banner_image');
            $ext = $banner_image->getClientOriginalExtension();
            $bg_img_name = time() . '.' . $ext;
            $banner_image->move(public_path('uploads/portfolio'), $bg_img_name);
            $portfolio->banner_image = $bg_img_name;
            $portfolio->save();
        }

        $all_images = [];

        if ($request->hasFile('all_images')) {
            foreach($portfolio->all_images as $image){
                // delete the image from directory
                File::delete(public_path('uploads/portfolio/'.$image));
            }
            foreach ($request->file('all_images') as $file) {
                $ext = $file->getClientOriginalExtension();
                $image_name = time() . '_' . uniqid() . '.' . $ext;

                $file->move(public_path('uploads/portfolio'), $image_name);

                $all_images[] = $image_name;
            }

            // Save the array of image paths to the portfolio
            $portfolio->all_images = $all_images;
            $portfolio->save();
        }

        return redirect()->route('admin.view_portfolios')->with('success', 'Portfolio successfully Updated.');
    }
    public function delete_portfolio($id){
        $portfolio = Portfolio::findOrFail($id);

        // delete the image from directory
        File::delete(public_path('uploads/portfolio/'.$portfolio->banner_image));


        
        // Decode JSON to array for all_images and delete each image
        if (!empty($portfolio->all_images)) {
            if (is_array($portfolio->all_images)) {
                foreach ($portfolio->all_images as $image) {
                    // Delete the image from the directory
                    File::delete(public_path('uploads/portfolio/' . $image));
                }
            }
        }

        // delete product from database
        $portfolio->delete();

        return redirect()->route('admin.view_portfolios')->with('success'.'Portfolio Deleted successfully');
 
    }
    public function add_service(){
        return view('admin/add_service');
    }
    public function view_services(){
        $services = Services::orderBy('id','ASC')->get();
        return view('admin/view_services', ['service' => $services]);
    }
    public function service($id){
        $service = Services::where('id',$id)->first();
        return view('admin/service', compact('service'));
    }
    public function service_edit($id){
        $service = Services::where('id',$id)->first();
        return view('admin/add_service', compact('service'));
    }
    public function store_service(Request $request){
        $service = new Services();
        $service->name = $request->name;
        $service->title = $request->title;
        $service->category = $request->category;
        $service->description = $request->description;
        $service->seo_description = $request->seo_description;
        $service->tags  = $request->tags;
        $service->save();

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $ext = $logo->getClientOriginalExtension();
            $bg_img_name = time() .'-'. uniqid().'.' . $ext;

            $logo->move(public_path('uploads/service'), $bg_img_name);

            $service->logo = $bg_img_name;
            $service->save();
        }
        if ($request->hasFile('banner_image')) {
            $banner_image = $request->file('banner_image');
            $ext = $banner_image->getClientOriginalExtension();
            $bg_img_name = time() .'-'. uniqid().'.' . $ext;

            $banner_image->move(public_path('uploads/service'), $bg_img_name);

            $service->banner_image = $bg_img_name;
            $service->save();
        }
        return redirect()->route('admin.view_services')->with('success', 'Service added successfully.');
    }
    public function update_service($id, Request $request){
        $service = Services::findOrFail($id);
        $service->name = $request->name;
        $service->title = $request->title;
        $service->category = $request->category;
        $service->description = $request->description;
        $service->seo_description = $request->seo_description;
        if(!empty($request->tags)){
            $service->tags  = $request->tags;
        }
        $service->save();
        if ($request->hasFile('logo')) {
            // delete old image
            File::delete(public_path('uploads/service/'.$service->logo));
            $logo = $request->file('logo');
            $ext = $logo->getClientOriginalExtension();
            $bg_img_name = time() .'-'. uniqid().'.' . $ext;

            $logo->move(public_path('uploads/service'), $bg_img_name);

            $service->logo = $bg_img_name;
            $service->save();
        }
        if ($request->hasFile('banner_image')) {
            // delete old image
            File::delete(public_path('uploads/service/'.$service->banner_image));
            $banner_image = $request->file('banner_image');
            $ext = $banner_image->getClientOriginalExtension();
            $bg_img_name = time() .'-'. uniqid().'.' . $ext;

            $banner_image->move(public_path('uploads/service'), $bg_img_name);

            $service->banner_image = $bg_img_name;
            $service->save();
        }

       

        return redirect()->route('admin.view_services')->with('success', 'Service successfully Updated.');
    }
    public function delete_service($id){
        $service = Services::findOrFail($id);

        // delete the image from directory
        File::delete(public_path('uploads/portfolio/'.$service->logo));


        
        // delete old image
        File::delete(public_path('uploads/service/'.$service->banner_image));

        // delete product from database
        $service->delete();

        return redirect()->route('admin.view_services')->with('success'.'Portfolio Deleted successfully');
 
    }
    public function add_blog(){
        return view('admin/add_blog');
    }
    public function view_blogs(){
        $blog = Blog::orderBy('id','ASC')->get();
        return view('admin/view_blogs', ['blog' => $blog]);
    }
    public function store_blog(Request $request){
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->industry = $request->industry;
        $blog->category = $request->category;
        $blog->tags  = $request->tags;
        $blog->main_description = $request->main_description;
        $blog->seo_description = $request->seo_description;
        $blog->slug = Str::slug($request->title);
        $blog->save();

        if ($request->hasFile('banner_image')) {
            $banner_image = $request->file('banner_image');
            $ext = $banner_image->getClientOriginalExtension();
            $bg_img_name = time() . '.' . $ext;

            $banner_image->move(public_path('uploads/blog'), $bg_img_name);

            $blog->banner_image = $bg_img_name;
            $blog->save();
        }

        return redirect()->route('admin.view_blogs')->with('success', 'Blog added successfully');
    }
    public function blog_edit($id){
        $blog = Blog::where('id',$id)->first();
        return view('admin/add_blog', compact('blog'));
    }
    public function update_blog($id, Request $request){
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->industry = $request->industry;
        $blog->category = $request->category;
        $blog->tags  = $request->tags;
        $blog->seo_description = $request->seo_description;
        $blog->main_description = $request->main_description;
        $blog->slug = Str::slug($request->title);
        $blog->save();

        if ($request->hasFile('banner_image')) {
            File::delete(public_path('uploads/blog/'.$blog->banner_image));
            $banner_image = $request->file('banner_image');
            $ext = $banner_image->getClientOriginalExtension();
            $bg_img_name = time() .'-'. uniqid().'.' . $ext;
            $banner_image->move(public_path('uploads/blog'), $bg_img_name);
            $blog->banner_image = $bg_img_name;
            $blog->save();
        }
        return redirect()->route('admin.view_blogs')->with('success', 'Blog successfully Updated.');
    }
    public function delete_blog($id){
        $blog = Blog::findOrFail($id);
        
        // delete old image
        File::delete(public_path('uploads/blog/'.$blog->banner_image));

        // delete product from database
        $blog->delete();

        return redirect()->route('admin.view_blogs')->with('success'.'Blog Deleted successfully');
 
    }
    public function add_youtube_video(){
        return view('admin/add_youtube_blog');
    }
    public function store_youtube_video(Request $request){
        $youtube = new Youtube();
        $youtube->title = $request->title;
        $youtube->url = $request->url;
        $youtube->tags = $request->tags;
        $youtube->main_description = $request->main_description;
        $youtube->seo_description = $request->seo_description;
        $youtube->slug = Str::slug($request->title);
        $youtube->save();
        if ($request->hasFile('banner_image')) {
            $banner_image = $request->file('banner_image');
            $ext = $banner_image->getClientOriginalExtension();
            $bg_img_name = time() . '.' . $ext;
            $banner_image->move(public_path('uploads/youtube'), $bg_img_name);
            $youtube->banner_image = $bg_img_name;
            $youtube->save();
        }
        return redirect()->route('admin.view_youtube_video')->with('success', 'Youtube video added successfully');
    }
    public function view_youtube_video(){
        $youtube = Youtube::orderBy('id','ASC')->get();
        return view('admin/view_youtube_blog', ['youtube' => $youtube]);
    }
    public function youtube_blog($id){
        $youtube_blog = Youtube::where('id',$id)->first();
        return view('admin/youtube_blog', compact('youtube_blog'));
    }
    public function youtube_blog_edit($id){
        $youtube = Youtube::where('id',$id)->first();
        return view('admin/add_youtube_blog', compact('youtube'));
    }
    public function update_youtube_video($id, Request $request){
        $youtube = Youtube::findOrFail($id);
        $youtube->title = $request->title;
        $youtube->seo_description = $request->seo_description;
        $youtube->main_description = $request->main_description;
        $youtube->slug = Str::slug($request->title);
        if(!empty($request->tags)){
            $youtube->tags  = $request->tags;
        }
        if(!empty($request->url)){
            $youtube->url  = $request->url;
        }
        $youtube->save();

        if ($request->hasFile('banner_image')) {
            File::delete(public_path('uploads/youtube/'.$youtube->banner_image));
            $banner_image = $request->file('banner_image');
            $ext = $banner_image->getClientOriginalExtension();
            $bg_img_name = time() .'-'. uniqid().'.' . $ext;
            $banner_image->move(public_path('uploads/youtube'), $bg_img_name);
            $youtube->banner_image = $bg_img_name;
            $youtube->save();
        }
        return redirect()->route('admin.view_youtube_video')->with('success', 'Youtube Blog Successfully Updated.');
    }
    public function delete_youtube_blog($id){
        $youtube = Youtube::findOrFail($id);
        
        // delete old image
        File::delete(public_path('uploads/youtube/'.$youtube->banner_image));

        // delete product from database
        $youtube->delete();

        return redirect()->route('admin.view_youtube_video')->with('success'.'Youtube Blog Deleted successfully');
 
    }
    public function seo($page){
        $seo = Seo::where('page',$page)->first();
        return view('admin/manage_seo', compact('seo'));
    }
    public function update_seo($id, Request $request){
        $seo = Seo::findOrFail($id);
        $seo->title = $request->title;
        $seo->seo_description = $request->seo_description;
        if(!empty($request->tags)){
            $seo->tags  = $request->tags;
        }
        $seo->save();
        return redirect()->route('admin.seo',$seo->page)->with('success', 'SEO Successfully Updated.');
    }
    public function authenticate(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->passes()){
            if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=> $request->password])){
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->route('admin.index')->with('error','Email or Password is incorrect.');
            }
        }else{
            return redirect()->route('admin.index')->withInput()->withErrors($validator);
            
        }
    } 
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.index');
    }
}