<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminEditItemComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-edit-item-component')->layout('layouts.base');
    }
}