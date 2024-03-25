<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class ViewCustomer extends Component
{
    public $customer;

    public function mount($customer)
    {
        $this->customer = Customer::findOrFail($customer);
    }

    public function render()
    {
        return view('livewire.view-customer');
    }
}
