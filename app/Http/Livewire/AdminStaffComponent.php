<?php

namespace App\Http\Livewire;

use App\Models\Staff;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminStaffComponent extends Component
{
    use WithFileUploads;

    public function deleteStaff($id){
        $category = Staff::find($id);
        $category->delete();
        session()->flash('message', 'Staff has been deleted successfully');
    }

    public function render()
    {
        $staffs = Staff::paginate(12);
        return view('livewire.admin-staff-component',['staffs' => $staffs]);
    }
}