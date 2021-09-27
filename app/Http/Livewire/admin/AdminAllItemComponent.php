<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Item;

class AdminAllItemComponent extends Component
{
    public function deleteItem($id)
    {
        $item = Item::find($id);
        $item->delete();
        session()->flash('message','Item has been deleted successfully');
    }

    public function render()
    {
        $items = Item::all();
        return view('livewire.admin.admin-all-item-component',['items'=>$items])->layout('layouts.base');
    }
}