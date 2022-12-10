<?php

namespace App\Http\Livewire;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddCategory extends Component
{  use WithFileUploads;
     public $modelId, $name, $description, $thumbnail, $tags;
     public $rule = [

     ];
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
        // $this->validate();
        ProductCategory::updateOrCreate(['id' => $this->modelId], $this->modelData());
        $this->resetFields();
        
    }
    public function modelData()
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'tags' => $this->tags,
            'thumbnail' => $this->thumbnail,

        ];
    }
    public function render()
    {
        return view('livewire.add-category');
    }
}
