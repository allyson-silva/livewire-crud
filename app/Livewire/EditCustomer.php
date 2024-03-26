<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Customer;
class EditCustomer extends Component
{
    public $customer;
    public $name;
    public $email;
    public $phone;

    public function update()
    {

        $validated = $this->validate([
            'name' => 'required | max:255',
            'email' => 'required | email | max:255 ',
            'phone' => 'required | max:255 ',
        ]);

        $this->customer->update(
            $validated
        );

        session()->flash('message', 'Customer Updated Successfully');
        return $this->redirect('/customers', navigate:true);
    }

    public function mount($customer)
    {
        $this->customer = Customer::findOrFail($customer);

        $this->name = $this->customer->name;
        $this->email = $this->customer->email;
        $this->phone =  $this->customer->phone;




    }
    public function render()
    {
        return view('livewire.edit-customer');
    }
}
