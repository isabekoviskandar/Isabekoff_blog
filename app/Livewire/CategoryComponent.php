<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryComponent extends Component
{

    public $categories;
    public $name;
    public $showForm = false;
    public $editMode = false;
    public $categoryId;
    public $categoryToDelete;

    protected $rules = [
        'name' => 'required|min:3|max:255'
    ];

    public function mount()
    {
        $this->loadCategories();
    }

    public function loadCategories()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.category-component');
    }

    public function submit()
    {
        $this->validate();

        if ($this->editMode) {
            $category = Category::find($this->categoryId);
            $category->update([
                'name' => $this->name,
            ]);
            session()->flash('message', 'Category updated successfully!');
            $this->dispatch('removeMessage');
        } else {
            Category::create([
                'name' => $this->name,
                'status' => true
            ]);
            session()->flash('message', 'Category created successfully!');
            $this->dispatch('removeMessage');

        }

        $this->resetForm();
        $this->loadCategories();
    }

    public function edit($id)
    {
        $this->showForm = true;
        $this->editMode = true;
        $this->categoryId = $id;
        
        $category = Category::find($id);
        $this->name = $category->name;
    }

    public function resetForm()
    {
        $this->reset(['name', 'showForm', 'editMode', 'categoryId']);
        $this->resetValidation();
    }

    public function updateStatus($id, $status)
    {
        $category = Category::find($id);
        $category->update([
            'status' => $status
        ]);
        
        $this->loadCategories();
    }

    public function prepareDelete($id)
    {
        $this->categoryToDelete = $id;
    }

    public function deleteConfirmed()
    {
        if ($this->categoryToDelete) {
            $category = Category::find($this->categoryToDelete);
            $category->delete();
            
            session()->flash('message', 'Category deleted successfully!');
            $this->dispatch('removeMessage');

            $this->categoryToDelete = null;
            $this->loadCategories();
        }
    }
}
