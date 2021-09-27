<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Attributes;

class AdminAddAttributeComponent extends Component
{
    public $attribute_name;
    public $is_mandatory;
    public $attribute_value;

    public function storeAttribute()
    {
        $this->validate([
            'attribute_name' => 'required',
            'is_mandatory' => 'required',
            'attribute_value'=> 'required'
        ]);

        $attributes = new Attributes();
        $attributes->attribute_name = $this->attribute_name;
        $attributes->is_mandatory = $this->is_mandatory;
        $attributes->attribute_value = $this->attribute_value;
        $attributes->save();
        session()->flash('message', 'Attribute has been created successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-attribute-component')->layout('layouts.base');
    }
}
