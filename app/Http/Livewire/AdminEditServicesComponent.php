<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AdminEditServicesComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $description;
    public $image;
    public $newImage;
    public $service_id;

    public function mount($service_slug){
        $service = Service::where('slug', $service_slug)->first();
         $this->name =$service->name;
         $this->slug =$service->slug;
         $this->description =$service->description;
         $this->image =$service->image;
         $this->service_id =$service->id;
    }

    public function generateslug(){
        $this->slug = Str::slug($this->name, '-');
    }


    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);
    }

    public function updateService(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);

        $service = Service::find($this->service_id);
        $service->name = $this->name;
        $service->slug = $this->slug;
        $service->description = $this->description;
        if($this->newImage){
            $imageName = Carbon::now()->timestamp. '.' . $this->newImage->extension();
            $this->newImage->storeAs('services', $imageName);
            $service->image = $imageName;
        }

        $service->save();
        return redirect()->route('admin.services');
        session()->flash('message', 'Service has been created Successfully');
    }
    public function render()
    {
        return view('livewire.admin-edit-services-component');
    }
}