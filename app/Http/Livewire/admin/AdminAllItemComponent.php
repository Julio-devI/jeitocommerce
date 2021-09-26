<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminAllItemComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-all-item-component')->layout('layouts.base');
    }
}