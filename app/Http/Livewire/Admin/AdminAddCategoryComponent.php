<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function generateslug()
    {
        $this->slug  = Str::slug($this->name);
    }
    public function storeCategory()
    {
        $category= new Category();
        $category->name=$this->name;
        $category->slug=$this->slug;
        $category->save();
        session()->flash('message','Category has been created Successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
