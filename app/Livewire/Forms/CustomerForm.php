<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Customer;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;

class CustomerForm extends Form
{
    public ?Customer $customer;

    #[Locked]
    public $id;

    #[Rule('required|min:3', as: 'Name')]
    public $name;

    #[Rule('required|email', as: 'Email')]
    public $email;

    #[Rule('required|min:3', as: 'Address')]
    public $address;

    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
        // $this->id = $customer->id;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->address = $customer->address;
    }

    public function store()
    {
        Customer::create($this->except(['customer']));
        $this->reset();
    }

    public function update()
    {
        $this->customer->update($this->except(['customer']));
    }
}
