<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Attributes;

class AdminEditAttributeComponent extends Component
{
    public $attribute_id;
    public $attribute_name;
    public $is_mandatory;
    public $attribute_value;

    public function updateAttribute()
    {
        $this->validate([
            'attribute_id'=> 'required',
            'attribute_name' => 'required',
            'is_mandatory' => 'required',
            'attribute_value' => 'required'
        ]);

        $attribute = Attributes::find($this->attribute_id);
        
            $attribute->attribute_name = $this->attribute_name;
            $attribute->is_mandatory = $this->is_mandatory;
            $attribute->attribute_value = $this->attribute_value;
            $attribute->save();
            session()->flash('message', 'Attribute has been updated successfully.');
        
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-attribute-component')->layout('layouts.base');
    }
}
