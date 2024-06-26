<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class Customers extends Component
{
    public $customers = [];

    public function mount()
    {
        $this->customers = Customer::all();
    }

    public function render()
    {
        return view('livewire.customers');
    }

    public function delete($id)
    {
        Customer::findOrFail($id)->delete();
        session()->flash('message', 'Customer Deleted Successfully');
        return $this->redirect('/customers', navigate:true);
    }
}
