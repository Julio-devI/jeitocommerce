<?php

namespace App\Http\Livewire\Admin;

use App\Models\Discount;
use Livewire\Component;

class AdminEditDiscountsComponent extends Component
{
    public $discount_id;
    public $label;
    public $valor;
    public $ativo;

    public function mount($discount_id) {
        $discount = Discount::where('id', $discount_id)->first();

        $this->label = $discount->label;
        $this->valor = $discount->valor;
        $this->ativo = $discount->ativo;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'label' => 'required',
            'valor' => 'required'
        ]);
    }

    public function updateDiscount()
    {
        $this->validate([
            'label' => 'required',
            'valor' => 'required',
        ]);

        $discount = Discount::find($this->discount_id);

        $discount->label = $this->label;
        $discount->valor = $this->valor;
        $discount->ativo = $this->ativo;
        $discount->save();
        session()->flash('message', 'Discount has been updated successfully.');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-discounts-component')->layout('layouts.base');
    }
}
