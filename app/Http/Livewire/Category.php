<?php
namespace App\Http\Livewire;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
use WithPagination;
public $visibleModalForm = false;
public $confirmDeleteModal = false;
    public $name;
    public $modelId;
public function rules()
    {
        return [
            'name' => 'required'
        ];
    }
public function createOrUpdate()
    {
        $this->validate();
        ProductCategory::updateOrCreate(['id' => $this->modelId], $this->modelData());
        $this->visibleModalForm = false;
        $this->resetFields();
    }
public function modelData()
    {
        return [
            'name' => $this->name
        ];
    }
public function resetFields()
    {
        $this->modelId = null;
        $this->name = null;
    }
public function showModal()
    {
        $this->resetValidation();
        $this->resetFields();
        $this->visibleModalForm = true;
    }
public function hideModal()
    {
        $this->visibleModalForm = false;
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
public function showUpdateModal($id)
    {
        $this->resetValidation();
        $this->resetFields();
        $this->modelId = $id;
        $this->visibleModalForm = true;
        $this->loadModel();
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