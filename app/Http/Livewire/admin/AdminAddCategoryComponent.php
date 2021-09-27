<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class AdminAddCategoryComponent extends Component
{
    public $name_category;
    public $category_id;

    public function storeCategory()
    {
        $this->validate([
            'name_category' => 'required',
            'category_id' => 'required',
        ]);

        $category = new Category();
        $category->name_category = $this->name_category;
        $category->category_id = $this->category_id;
        $category->save();
        session()->flash('message', 'Category has been created successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
