<?php

namespace App\Http\Livewire;
use App\Models\Blog;
use App\Models\BlogReview;
use App\Models\Category;
use App\Models\Setting;
use Livewire\Component;

class BlogDetailsComponent extends Component
{
    public $slug;
    public $name;
    public $email;
    public $comment;
    public $blog_id;

    public function mount($slug){
        $this->slug = $slug;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ]);
    }

    public function addReview(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ]);
        $blog = Blog::where('slug', $this->slug)->first();
        $review = new BlogReview();
        $review->name = $this->name;
        $review->email = $this->email;
        $review->comment = $this->comment;
        $review->blog_id = $blog->id;
        $review->save();
        session()->flash('message', 'Your review has been added successfully');
        return redirect()->route('blog.details', ['slug' => $blog->slug]);
    }

    public function render()
    {
        $blog = Blog::where('slug', $this->slug)->first();
        $l_blogs_review = BlogReview::where('blog_id', $blog->id)->inRandomOrder()->limit(5)->get();
        $l_blogs = Blog::orderBy('created_at', 'DESC')->get()->take(6);
        $setting = Setting::find(1);
        $categories=Category::paginate(12);
        return view('livewire.blog-details-component',  ['blog' => $blog, 'l_blogs' => $l_blogs, 'l_blogs_review' => $l_blogs_review, 'setting' => $setting,'categories'=>$categories])->layout('layouts.base');
    }
}
