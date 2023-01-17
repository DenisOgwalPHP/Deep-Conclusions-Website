<?php

namespace App\Http\Livewire;
use App\Models\Blog;
use App\Models\BlogReview;
use App\Models\Category;
use App\Models\Setting;
use Livewire\Component;
use Livewire\WithPagination;

class BlogsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $l_blogs_review = BlogReview::orderBy('id', 'DESC')->get()->take(5);
        $categories=Category::paginate(12);
        $blogs = Blog::paginate(1);
        $l_blogs = Blog::orderBy('created_at', 'DESC')->get()->take(5);
        $setting = Setting::find(1);
        return view('livewire.blogs-component',['l_blogs_review'=>$l_blogs_review,'blogs' => $blogs, 'l_blogs' => $l_blogs,'categories'=>$categories, 'setting' => $setting])->layout('layouts.base');
    }
}
