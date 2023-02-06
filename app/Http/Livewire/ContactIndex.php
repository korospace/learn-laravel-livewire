<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactIndex extends Component
{
    use WithPagination;

    // protected $paginationTheme = 'bootstrap';
    protected $queryString  = ['search'];
    public $search   = "";
    public $paginate = 5;
    public $isUpdate = false;
    public $title    = 'Table Contacts';

    protected $listeners = [
        'contactStored'  => 'handleStored',   // from: Http/livewire/ContactCreate.php
        'contactUpdated' => 'handleUpdated',  // from: Http/livewire/ContactUpdate.php
        'hideUpdateForm' => 'hideUpdateForm', // from: views/livewire/contact-update via $emit
    ];

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        // cara 1
        // return view('livewire.contact-index');

        // cara 2
        return view('livewire.contact-index',[
            'data' => Contact::latest()->where("name","like","%".$this->search."%")->paginate($this->paginate)
        ]);
    }

    public function delete($id)
    {
        Contact::where("id",$id)->delete();
    }

    public function showUpdateForm($id)
    {
        $this->isUpdate = true;
        $this->emit("getContactById",$id); // to: Http/Livewire/ContactUpdate.php
    }

    public function hideUpdateForm()
    {
        $this->isUpdate = false;
    }

    public function handleStored($contact)
    {
        session()->flash("msgSuccess","Contact with name <b>(".$contact['name'].")</b> was created");
    }

    public function handleUpdated($data)
    {
        $this->hideUpdateForm();
        session()->flash("msgSuccess","Contact with name <b>(".$data.")</b> was updated");
    }
}
