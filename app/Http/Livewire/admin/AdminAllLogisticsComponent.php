<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Logistic;

class AdminAllLogisticsComponent extends Component
{
    public function deleteLogistic($id)
    {
        $logistic = Logistic::find($id);
        $logistic->delete();
        session()->flash('message','Logistic has been deleted successfully');
    }

    public function render()
    {
        $logistics = Logistic::all();
        return view('livewire.admin.admin-all-logistics-component', ['logistics'=>$logistics])->layout('layouts.base');
    }
}
