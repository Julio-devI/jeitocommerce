<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Discount;

class AdminAllDiscountsComponent extends Component
{
    public function render()
    {
        $discounts = Discount::all();
        return view('livewire.admin.admin-all-discounts-component', ['discounts'=>$discounts])->layout('layouts.base');
    }
}
