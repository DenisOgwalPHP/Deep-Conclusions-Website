<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminServicesComponent extends Component
{
    use WithFileUploads;

    public function deleteService($id){
        $category = Service::find($id);
        $category->delete();
        session()->flash('message', 'Service has been deleted successfully');
    }

    public function render()
    {
        $services = Service::paginate(12);
        return view('livewire.admin-services-component', ['services' => $services]);
    }
}
