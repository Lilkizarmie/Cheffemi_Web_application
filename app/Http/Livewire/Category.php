<?php
namespace App\Http\Livewire;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
use WithPagination;
    public $name;
    public $modelId;
    public $description;
    public $tags;

public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
            'tags' => 'required',
        ];
    }
    public function modelData()
    {
        return [
            'name' => $this->name
        ];
    }
    public function render()
    {
        return view('livewire.category', [
            'data' => $this->read()
        ]);
    }
    public function read()
    {
        return ProductCategory::paginate(5);
    }
    public function loadModel()
    {
        $data = ProductCategory::findOrFail($this->modelId);
        $this->name = $data->name;
    }
    public function mount()
    {
        $this->resetPage();
    }
    public function showDeleteModal($id)
    {
        $this->modelId = $id;
        $this->confirmDeleteModal = true;
    }
    public function delete()
    {
        ProductCategory::destroy($this->modelId);
        $this->confirmDeleteModal = false;
    }
}