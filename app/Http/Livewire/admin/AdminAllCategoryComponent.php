<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class AdminAllCategoryComponent extends Component
{
    public function deleteCategory($category_id)
    {
        $category = Category::find($category_id);
        $category->delete();
        session()->flash('message','Category has been deleted successfully');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-all-category-component', ['categories'=>$categories])->layout('layouts.base');
    }
}
