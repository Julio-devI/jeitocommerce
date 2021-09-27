<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class AdminEditCategoryComponent extends Component
{
    public $category_id;
    public $name_category;

    public function mount($category_id) {
        $category = Category::where('id', $category_id)->first();

        $this->category_id = $category->category_id;
        $this->name_category = $category->name_category;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'category_id' => 'required',
            'name_category' => 'required'
        ]);
    }

    public function updateCategory()
    {
        $this->validate([
            'category_id' => 'required',
            'name_category' => 'required',
        ]);

        $category = Category::find($this->category_id);

        $category->category_id = $this->category_id;
        $category->name_category = $this->name_category;
        $category->save();
        session()->flash('message', 'Category has been updated successfully.');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout('layouts.base');
    }
}
