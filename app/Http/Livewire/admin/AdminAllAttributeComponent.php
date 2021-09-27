<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Attributes;

class AdminAllAttributeComponent extends Component
{
    public function deleteAttribute($attributes_id)
    {
        $attributes = Attributes::find($attributes_id);
        $attributes->delete();
        session()->flash('message','Attributes has been deleted successfully');
    }

    public function render()
    {
        $attributes = Attributes::all();
        return view('livewire.admin.admin-all-attribute-component', ['attributes'=>$attributes])->layout('layouts.base');
    }
}
