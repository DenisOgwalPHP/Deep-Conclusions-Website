<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AdminAddServicesComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $description;
    public $image;

    public function generateslug(){
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:services',
            'description' => 'required',
            'image' => 'required',
        ]);
    }

    public function addService(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:services',
            'description' => 'required',
            'image' => 'required',
        ]);

        $service = new Service();
        $service->name = $this->name;
        $service->slug = $this->slug;

        $service->description = $this->description;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('services', $imageName);
        $service->image = $imageName;
        $service->save();
        return redirect()->route('admin.services');
        session()->flash('message', 'Service has been created Successfully');
    }
    public function render()
    {
        return view('livewire.admin-add-services-component');
    }
}
