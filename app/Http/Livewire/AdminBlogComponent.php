<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class AdminBlogComponent extends Component
{
    use WithPagination;

    public function deleteBlog($id){
        $category = Blog::find($id);
        $category->delete();
        session()->flash('message', 'Blog has been deleted successfully');
    }

    public function render()
    {
        $blogs = Blog::paginate(10);
        return view('livewire.admin-blog-component', ['blogs' => $blogs]);
    }
}