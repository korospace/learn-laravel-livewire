<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    // public $contacts;

    // public function mount($contacts)
    // {
    //     $this->contacts = $contacts;
    // }

    public $name;
    public $number;

    public function render()
    {
        return view('livewire.contact-create');
    }

    public function store()
    {
        $this->validate([
            'name'   => 'required',
            'number' => 'required|max:15'
        ]);

        $contact = Contact::create([
            'name'  => $this->name,
            'number' => $this->number,
        ]);

        $this->resetInput();
        $this->emit("contactStored",$contact); // Http/Livewire/ContactIndex.php
    }

    public function resetInput()
    {
        $this->name   = null;
        $this->number = null;
    }
}
