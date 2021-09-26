<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Discount;

class AdminAddDiscountComponent extends Component
{
    public $label;
    public $valor;
    public $ativo;

    public function storeDiscount()
    {
        $this->validate([
            'label' => 'required',
            'valor' => 'required',
        ]);

        $discount = new Discount();
        $discount->label = $this->label;
        $discount->valor = $this->valor;
        $discount->ativo = $this->ativo;
        $discount->save();
        session()->flash('message', 'Discount has been created successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-discount-component')->layout('layouts.base');
    }
}
