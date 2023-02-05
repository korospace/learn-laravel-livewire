<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    public $data;
    public $title;

    public function render()
    {
        $this->title = 'Table Contacts';
        $this->data  = Contact::all();

        // cara 1
        return view('livewire.contact-index');

        // cara 2
        // return view('livewire.contact-index',[
        //     'data' => Contact::all()
        // ]);
    }
}
