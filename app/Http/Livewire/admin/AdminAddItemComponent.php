<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Item;

class AdminAddItemComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-add-item-component')->layout('layouts.base');
    }
}