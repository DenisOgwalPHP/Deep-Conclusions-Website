<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Blog;
class HomeComponent extends Component
{
    public function render()
    {
        $l_blogs = Blog::orderBy('created_at', 'DESC')->get()->take(5);
        return view('livewire.home-component',['l_blogs' => $l_blogs])->layout('layouts.base');
    }
}
