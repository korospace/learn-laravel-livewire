<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactUpdate extends Component
{
    public $idContact;
    public $name;
    public $number;

    protected $listeners = [
        'getContactById' => 'getContactById'
    ];

    public function render()
    {
        return view('livewire.contact-update');
    }

    public function getContactById($id)
    {
        $contact = Contact::where("id",$id)->first();
        $this->idContact = $contact->id;
        $this->name      = $contact->name;
        $this->number    = $contact->number;
    }

    public function update()
    {
        $this->validate([
            'name'   => 'required',
            'number' => 'required|max:15'
        ]);

        Contact::where("id",$this->idContact)->update([
            'name'  => $this->name,
            'number' => $this->number,
        ]);

        $this->emit("contactUpdated",$this->name); // Http/Livewire/ContactIndex.php
    }
}
