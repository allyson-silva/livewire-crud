<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CreateCustomer extends Component
{
    public $name;
    public $email;
    public $phone;


    public function save(){
        $validated = $this->validate([
            'name' => 'required | max:255',
            'email' => 'required | email | max:255 | unique:customers',
            'phone' => 'required | max:255 | unique:customers',
        ]);
        Customer::create($validated);

        $this->reset();
    }


    public function render()
    {
        return view('livewire.create-customer');
    }
}
