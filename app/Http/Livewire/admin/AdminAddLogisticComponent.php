<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Logistic;

class AdminAddLogisticComponent extends Component
{
    public $logistic_name;
    public $is_free;
    public $estimated_shipping_fee;
    public $enabled;

    public function storeLogistic()
    {
        $this->validate([
            'logistic_name' => 'required',
            'is_free' => 'required',
            'estimate_shipping_fee'=> 'required',
            'enabled' => 'required'
        ]);

        $logistic = new Logistic();
        $logistic->logistic_name = $this->logistic_name;
        $logistic->is_free = $this->is_free;
        $logistic->estimate_shipping_fee = $this -> estimate_shipping_fee;
        $logistic->enabled = $this->enabled;
        $logistic->save();
        session()->flash('message', 'Category has been created successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-logistic-component')->layout('layouts.base');
    }
}
