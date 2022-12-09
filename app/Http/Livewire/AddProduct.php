<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddProduct extends Component
{
    public function resetFields()
    {
        $this->name = null;
    }
    public function render()
    {
        return view('livewire.add-product');
    }
}
