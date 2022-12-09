<?php

namespace App\Http\Livewire;
use App\Models\ProductCategory;
use Livewire\Component;

class AddCategory extends Component
{
    public function resetFields()
    {
        $this->modelId = null;
        $this->name = null;
        $this->description = null;
        $this->thumbnail = null;
        $this->tags = null;
    }
    public function createOrUpdate()
    {
        $this->validate();
        ProductCategory::updateOrCreate(['id' => $this->modelId], $this->modelData());
        $this->resetFields();
    }
    public function render()
    {
        return view('livewire.add-category');
    }
}
